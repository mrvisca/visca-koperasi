<?php

namespace App\Http\Controllers\Secret;

use App\Exports\ExportStockist;
use App\Models\StockHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
}
