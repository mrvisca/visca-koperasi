<?php

namespace App\Http\Controllers\Secret;

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
}
