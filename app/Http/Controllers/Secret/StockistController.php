<?php

namespace App\Http\Controllers\Secret;

use App\Imports\ImportOpnameStock;
use App\Exports\TemplateOpanameStock;
use App\Exports\ExportStockist;
use App\Models\StockHistory;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class StockistController extends Controller
{
    public function index()
    {
        return view('admin.stockist.list');
    }

    public function stockList(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'product_id',
            2 => 'stock_transaksi',
            3 => 'real_stock',
            4 => 'unit_id',
            5 => 'tipe',
            6 => 'rata_rata',
            7 => 'keterangan',
            8 => 'user_id',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search')['value'];

        // Hitung data keseluruhan
        $hitung = StockHistory::count();

        $stockist = StockHistory::with('product')->where(function ($q) use ($search) {
            if($search != null)
            {
                return $q->whereHas('product', function ($queri) use ($search) {
                    return $queri->where('name','LIKE','%'.$search.'%');
                })->orWhere('tipe',$search);
            }
        })->orderby($orderColumn,$dir)->skip($start)->take($limit)->get();
        $data = array();
        foreach($stockist as $s)
        {
            $item['id'] = $s->id;
            $item['product_name'] = $s->product->nama ?? '';
            $item['stock_transaksi'] = $s->stock_transaksi;
            $item['stock'] = $s->real_stock;
            $item['unit_name'] = $s->unit->name ?? '';
            $item['tipe'] = $s->tipe;
            $item['average'] = $s->rata_rata;
            $item['keterangan'] = $s->keterangan;
            $item['user'] = $s->user->name ?? '';
            $data[] = $item;
        }

        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data,
        ],200);
    }

    public function export()
    {
        $stockist = StockHistory::orderby('id','desc')->get();
        $data = array();
        foreach($stockist as $s)
        {
            $item['id'] = $s->id;
            $item['product_name'] = $s->product->nama ?? '';
            $item['stock_transaksi'] = $s->stock_transaksi;
            $item['stock'] = $s->real_stock;
            $item['unit_name'] = $s->unit->name ?? '';
            $item['tipe'] = $s->tipe;
            $item['average'] = $s->rata_rata;
            $item['keterangan'] = $s->keterangan;
            $item['user'] = $s->user->name ?? '';
            $data[] = $item;
        }

        return Excel::download(new ExportStockist($data), 'Riwayat-Stock.xlsx');
    }

    public function supportProduct()
    {
        $product = Product::orderby('id','desc')->get();
        $data = array();
        foreach($product as $p)
        {
            $item['id'] = $p->id;
            $item['name'] = $p->nama;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function penyesuaianStock(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'stock'   => 'required',
            'modal' => 'required',
        ]);

        //response error validation
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        // cari product
        $product = Product::where('id',$request->product_id)->first();
        if($product)
        {
            // Buat riwayat penyesuaian stock
            $riwayat = new StockHistory();
            $riwayat->product_id = $product->id;
            $riwayat->stock_transaksi = $request->stock;
            $riwayat->real_stock = $request->stock;
            $riwayat->unit_id = $product->satuan_jual;
            $riwayat->tipe = 'penyesuaian';
            $riwayat->modal_lama = $product->modal;
            $riwayat->modal_baru = $request->modal;
            $riwayat->rata_rata = 0;
            $riwayat->keterangan = 'Penyesuian stock';
            $riwayat->user_id = Auth::user()->id;
            $riwayat->save();

            // Update data stock product
            $product->stock = $request->stock;
            $product->modal = $request->modal;
            $product->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil melakukan penyesuain stock produk',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal melakukan penyesuian stock! data produk tidak ditemukan',
            ],400);
        }
    }

    public function productDetail($id)
    {
        $product = Product::where('id',$id)->first();
        if(!$product)
        {
            $data = [
                'modal' => 0,
                'stock' => 0,
            ];

            return response()->json($data,200);
        }else{
            $data = [
                'modal' => $product->modal,
                'stock' => $product->stock,
            ];

            return response()->json($data,200);
        }
    }

    public function template()
    {
        return Excel::download(new TemplateOpanameStock(), 'Template-Opname.xlsx');
    }

    public function importOpname(Request $request)
    {
        // Lakukan validasi data impor
        $request->validate([
            'excel' => 'required|mimes:xls,xlsx',
        ]);

        // Proses data impor
        $file = $request->file('excel');

        Excel::import(new ImportOpnameStock, $file);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil melakukan import stock opname'
        ],201);
    }
}
