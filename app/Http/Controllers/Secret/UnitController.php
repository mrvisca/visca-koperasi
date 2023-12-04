<?php

namespace App\Http\Controllers\Secret;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.satuan.index');
    }

    public function listSatuan()
    {
        $satuan = Unit::orderby('id','desc')->get();
        $data = array();
        foreach($satuan as $s)
        {
            $item['id'] = $s->id;
            $item['name'] = $s->name;
            $item['satuan'] = $s->satuan;
            $item['operator'] = $s->operator;
            $item['value'] = $s->value;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function tambahSatuan(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
            'satuan' => 'required',
            'operator' => 'required',
            'value' => 'required',
        ]);

        //response error validation
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $unit = new Unit();
        $unit->name = $request->name;
        $unit->satuan = $request->satuan;
        $unit->operator = $request->operator;
        $unit->value = $request->value;
        $unit->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil membuat unit satuan konversi',
        ],201);
    }

    public function update(Request $request,$id)
    {
        $cari = Unit::where('id',$id)->first();
        if(!$cari)
        {
            return response()->json([
                'success' => false,
                'message' => 'Update data gagal, Unit Satuan tidak ditemukan',
            ],400);
        }else{
            $cari->name = $request->name;
            $cari->satuan = $request->satuan;
            $cari->operator = $request->operator;
            $cari->value = $request->value;
            $cari->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil mengupdate data unit satuan',
            ],201);
        }
    }

    public function hapus($id)
    {
        $hapus = Unit::where('id',$id)->delete();

        if($hapus)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil menghapus data unit satuan',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus unit satuan, terjadi kesalahan saat hapus data',
            ],400);
        }
    }
}
