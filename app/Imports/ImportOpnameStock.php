<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\StockHistory;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;

class ImportOpnameStock implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */

    public function rules(): array
    {
        return [
            'nama_produk' => 'required',
            'stock' => 'required',
            'satuan' => 'required',
            'modal' => 'required|integer',
        ];
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $product = Product::where('name',$row['nama_produk'])->first();
            if($product)
            {
                // Proses Opname pengurangan / penambahan / penyesuaian
                $real_stock = 0;
                $status = 'penambahan';
                $keterangan = 'Tidak ada keterangan opname stock';
                if($product->stock > $row['stock'])
                {
                    $real_stock = $product->stock - $row['stock'];
                    $status = 'pengurangan';
                    $keterangan = 'Pengurangan stock produk saat opname stock';
                }else if($product->stock == $row['stock']){
                    $real_stock = $row['stock'];
                    $status = 'penyesuian';
                    $keterangan = 'Penyesuaian stock produk saat opname stock';
                }else{
                    $real_stock = $product->stock + $row['stock'];
                    $status = 'penambahan';
                    $keterangan = 'Penambahan stock produk saat opname stock';
                }

                // Proses Average Modal ketika terjadi perubahan harga modal saat stock opname berlangsung (penambahan)
                $old = $product->stock * $product->modal;
                $new = $row['stock'] * $row['modal'];
                $pembanding = $product->stock + $row['stock'];
                $hasil = ($old + $new) / $pembanding;

                // Buat riwayat stock untuk opname stock
                $riwayat = new StockHistory();
                $riwayat->product_id = $product->id;
                $riwayat->stock_transaksi = $row['stock'];
                $riwayat->real_stock = $real_stock;
                $riwayat->unit_id = $product->satuan_jual;
                $riwayat->tipe = $status;
                $riwayat->modal_lama = $product->modal;
                $riwayat->modal_baru = $row['modal'];
                $riwayat->rata_rata = $status == 'penambahan' ? $hasil : $row['modal'];
                $riwayat->keterangan = $keterangan;
                $riwayat->user_id = Auth::user()->id;

                // Update Data Produk
                $product->stock = $riwayat->real_stock;
                $product->modal = $riwayat->rata_rata;
                $product->save();
            }
        }
    }
}
