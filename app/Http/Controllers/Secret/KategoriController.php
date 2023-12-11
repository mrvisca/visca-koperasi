<?php

namespace App\Http\Controllers\Secret;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.index');
    }

    public function listKategori()
    {
        $list = Kategori::orderby('id','desc')->get();
        $data = array();
        foreach($list as $l)
        {
            $item['id'] = $l->id;
            $item['name'] = $l->name;
            $item['desc'] = $l->desc;
            $item['status'] = $l->is_active == 1 ? "Aktif" : "Non Aktif";
            $item['is_active'] = $l->is_active;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function tambahKategori(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
            'desc' => 'required',
            'is_active' => 'required',
        ]);

        //response error validation
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $kategori = new Kategori();
        $kategori->name = $request->name;
        $kategori->desc = $request->desc;
        $kategori->is_active = $request->is_active;
        $kategori->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data kategori produk',
        ],201);
    }

    public function updateData(Request $request, $id)
    {
        $cari = Kategori::where('id',$id)->first();
        if($cari)
        {
            $request->name != null ? $cari->name = $request->name : $cari->name = $cari->name;
            $request->desc != null ? $cari->desc = $request->desc : $cari->desc = $cari->desc;
            $request->is_active != null ? $cari->is_active = $request->is_active : $cari->is_active = $cari->is_active;
            $cari->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil mengupdate data kategori produk',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Update kategori gagal! data tidak ditemukan',
            ],400);
        }
    }

    public function hapus($id)
    {
        $cari = Kategori::where('id',$id)->delete();
        if($cari)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil menghapus data kategori',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus data, terjadi kesalahan saat menghapus data',
            ],400);
        }
    }
}
