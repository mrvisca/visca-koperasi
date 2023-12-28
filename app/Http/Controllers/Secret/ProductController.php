<?php

namespace App\Http\Controllers\Secret;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\StockHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
            $item['foto'] = asset('storage/'.$p->foto);
            $item['harga_jual'] = $p->harga_jual;
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

        // Masukan data produk ke database
        $produk = new Product();
        $produk->nama = $request->nama;
        $produk->variant = $request->variant;
        $produk->kode = $request->kode;
        $produk->expired = $request->expired;
        $produk->stock = $request->stock;
        $produk->foto = $request->foto;
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
