<?php

namespace App\Http\Controllers\Secret;

use App\Models\Unit;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Product;
use App\Models\StockHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.produk.list');
    }

    public function listProduct(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'nama',
            2 => 'variant',
            3 => 'kode',
            4 => 'harga_jual',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search')['value'];

        // Hitung data keseluruhan
        $hitung = Product::count();

        $produk = Product::where(function ($q) use ($search) {
            return $q->where('nama','LIKE','%'.$search.'%')->orWhere('variant','LIKE','%'.$search.'%')->orWhere('kode','LIKE','%'.$search.'%');
        })->orderby($orderColumn,$dir)->skip($start)->take($limit)->get();
        $data = array();
        foreach($produk as $p)
        {
            $item['id'] = $p->id;
            $item['nama'] = $p->nama;
            $item['variant'] = $p->variant;
            $item['kode'] = $p->kode;
            $item['foto'] = asset($p->foto);
            $item['harga_jual'] = $p->harga_jual;
            $item['category_id'] = $p->category_id;
            $item['expired'] = $p->expired;
            $item['stock'] = $p->stock;
            $item['modal'] = $p->modal;
            $item['satuan_jual'] = $p->satuan_jual;
            $item['satuan_beli'] = $p->satuan_beli;
            $item['deskripsi'] = $p->deskripsi;
            $data[] = $item;
        }

        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data,
        ],200);
    }

    public function tambahProduct(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'nama'   => 'required',
            'variant' => 'required',
            'kode' => 'required',
            'expired' => 'required',
            'stock' => 'required',
            'modal' => 'required',
            'harga_jual' => 'required',
            'satuan_beli' => 'required',
            'satuan_jual' => 'required',
            'deskripsi' => 'required',
        ]);

        //response error validation
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if ($request->hasFile('foto')) {
            // Fungsi upload foto
            $gambar = $request->file('foto');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Menggunakan Image Manager untuk membuat objek gambar
            $img = Image::make($gambar);

            // Mengompres gambar dengan kualitas bagus dan target ukuran di bawah 100KB
            $img->encode('jpg', 60); // Ubah format dan kualitas kompresi di sini

            // Mendapatkan ukuran file setelah kompresi
            $fileSize = $img->filesize();

            // Simpan gambar ke direktori penyimpanan
            $path = public_path("assets/produk/{$nama_gambar}");
            $img->save($path);
            $simpan = 'assets/produk/'.$nama_gambar;

            // Masukan data produk ke database
            $produk = new Product();
            $produk->category_id = $request->category_id;
            $produk->nama = $request->nama;
            $produk->variant = $request->variant;
            $produk->kode = $request->kode;
            $produk->expired = $request->expired;
            $produk->stock = $request->stock;
            $produk->foto = $simpan;
            $produk->modal = $request->modal;
            $produk->harga_jual = $request->harga_jual;
            $produk->satuan_beli = $request->satuan_beli;
            $produk->satuan_jual = $request->satuan_jual;
            $produk->deskripsi = $request->deskripsi;
            $produk->save();

            // Buat riwayat stock
            $stock = new StockHistory();
            $stock->product_id = $produk->id;
            $stock->stock_transaksi = $request->stock;
            $stock->real_stock = $produk->stock;
            $stock->unit_id = $request->satuan_beli;
            $stock->tipe = 'penambahan';
            $stock->modal_lama = $produk->modal;
            $stock->modal_baru = $produk->modal;
            $stock->rata_rata = 0;
            $stock->keterangan = 'Stock Awal produk baru';
            $stock->user_id = Auth::user()->id;
            $stock->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil membuat produk baru',
            ],201);
        }else{
            // Masukan data produk ke database
            $produk = new Product();
            $produk->category_id = $request->category_id;
            $produk->nama = $request->nama;
            $produk->variant = $request->variant;
            $produk->kode = $request->kode;
            $produk->expired = $request->expired;
            $produk->stock = $request->stock;
            $produk->modal = $request->modal;
            $produk->harga_jual = $request->harga_jual;
            $produk->satuan_beli = $request->satuan_beli;
            $produk->satuan_jual = $request->satuan_jual;
            $produk->deksirpsi = $request->deskripsi;
            $produk->save();

            // Buat riwayat stock
            $stock = new StockHistory();
            $stock->product_id = $produk->id;
            $stock->stock_transaksi = $request->stock;
            $stock->real_stock = $produk->stock;
            $stock->unit_id = $request->satuan_beli;
            $stock->tipe = 'penambahan';
            $stock->modal_lama = $produk->modal;
            $stock->modal_baru = $produk->modal;
            $stock->rata_rata = 0;
            $stock->keterangan = 'Stock Awal produk baru';
            $stock->user_id = Auth::user()->id;
            $stock->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil membuat produk baru',
            ],201);
        }
    }

    public function listSatuan()
    {
        $satuan = Unit::orderby('id','desc')->get();
        $data = array();
        foreach($satuan as $s)
        {
            $item['id'] = $s->id;
            $item['name'] = $s->name;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function listCategory()
    {
        $kategori = Kategori::orderby('id','desc')->get();
        $data = array();
        foreach($kategori as $k)
        {
            $item['id'] = $k->id;
            $item['name'] = $k->name;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function update(Request $request)
    {
        $cari = Product::where('id',$request->id)->first();
        if(!$cari)
        {
            return response()->json([
                'success' => false,
                'message' => 'Update produk gagal! data produk tidak ditemukan',
            ],400);
        }else{
            if ($request->hasFile('foto')) {
                // Cek apakah gambar sudah ada, jika iya, hapus gambar yang sudah ada
                if ($cari->foto != null) {
                    unlink($cari->foto);
                }

                // Fungsi upload foto
                $gambar = $request->file('foto');
                $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();

                // Menggunakan Image Manager untuk membuat objek gambar
                $img = Image::make($gambar);

                // Mengompres gambar dengan kualitas bagus dan target ukuran di bawah 100KB
                $img->encode('jpg', 70); // Ubah format dan kualitas kompresi di sini

                // Mendapatkan ukuran file setelah kompresi
                $fileSize = $img->filesize();

                // Simpan gambar ke direktori penyimpanan
                $path = public_path("assets/produk/{$nama_gambar}");
                $img->save($path);
                $simpan = 'assets/produk/'.$nama_gambar;

                // Update Produk
                $cari->category_id = $request->category_id;
                $cari->nama = $request->nama;
                $cari->variant = $request->variant;
                $cari->kode = $request->kode;
                $cari->expired = $request->expired;
                $cari->modal = $request->modal;
                $cari->harga_jual = $request->harga_jual;
                $cari->satuan_beli = $request->satuan_beli;
                $cari->satuan_jual = $request->satuan_jual;
                $cari->deskripsi = $request->deskripsi;
                $cari->foto = $simpan;
                $cari->save();

                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil melakukan update produk',
                ],201);
            }else{
                // Update Produk
                $cari->category_id = $request->category_id;
                $cari->nama = $request->nama;
                $cari->variant = $request->variant;
                $cari->kode = $request->kode;
                $cari->expired = $request->expired;
                $cari->modal = $request->modal;
                $cari->harga_jual = $request->harga_jual;
                $cari->satuan_beli = $request->satuan_beli;
                $cari->satuan_jual = $request->satuan_jual;
                $cari->deskripsi = $request->deskripsi;
                $cari->save();

                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil melakukan update produk',
                ],201);
            }
        }
    }

    public function hapusProduct($id)
    {
        $cari = Product::where('id',$id)->first();
        if(!$cari)
        {
            return response()->json([
                'success' => false,
                'message' => 'Hapus produk gagal! data produk tidak ditemukan',
            ],400);
        }else{
            // Cek apakah gambar sudah ada, jika iya, hapus gambar yang sudah ada
            if ($cari->foto != null) {
                unlink($cari->foto);
            }

            // Hapus Riwayat Stock
            $hapus_riwayat = StockHistory::where('product_id',$cari->id)->delete();
            $hapus_produk = Product::where('id',$id)->delete();

            if($hapus_riwayat && $hapus_produk)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Hapus data produk berhasil',
                ],201);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat hapus data produk!',
                ],400);
            }
        }
    }

}
