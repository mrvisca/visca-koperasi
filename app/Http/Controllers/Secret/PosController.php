<?php

namespace App\Http\Controllers\Secret;

use App\Models\Product;
use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index()
    {
        return view('admin.pos.index');
    }

    public function getCategory()
    {
        $kategori = Kategori::where('is_active',true)->orderby('id','desc')->get();
        $data = array();
        foreach($kategori as $k)
        {
            $item['id'] = $k->id;
            $item['name'] = $k->name;
            $item['items'] = $k->hitungProduk().' Items';
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function productList(Request $request)
    {
        $limit = $request->limit ?? 10;
        $produk = Product::where(function ($q) use ($request) {
            if($request->category_id != null)
            {
                return $q->where('category_id',$request->category_id);
            }
        })->where(function ($q) use ($request) {
            if($request->search != null)
            {
                return $q->where('kode','LIKE','%'.$request->search.'%')->orWhere('nama','LIKE','%'.$request->search.'%')->orWhere('variant','LIKE','%'.$request->search.'%');
            }
        })->orderby('id','desc')->paginate($limit);
        $data = array();
        foreach($produk as $p)
        {
            $item['id'] = $p->id;
            $item['name'] = $p->nama.' - '.$p->variant;
            $item['foto'] = asset($p->foto);
            $item['stock'] = $p->stock;
            $item['modal'] = $p->modal;
            $item['harga_jual'] = $p->harga_jual;
            $item['satuan_jual'] = $p->satuan_jual;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }
}
