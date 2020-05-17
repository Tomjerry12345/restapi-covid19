<?php

namespace App\Http\Controllers;

use App\Makassar; //File Model
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    public function getDataProvinsi($provinsi)
    {
        if($provinsi == 'makassar')
            $data = Makassar::all();
        else
            $data = "Data pada provinsi tersebut belum tersedia / Provinsi tidak di temukan";

        return response($data);
    }

    public function setDataProvinsi(Request $request , $provinsi)
    {
        if($provinsi == 'makassar')
            $data = new Makassar();
        else
            return response("Data pada provinsi tersebut belum tersedia / Provinsi tidak di temukan");
        
        $data->status = $request->input('status');
        $data->total = $request->input('total');
        $data->save();

        return response('Berhasil Tambah Data');
    }

    public function updateDataProvinsi(Request $request, $provinsi , $id)
    {
        if($provinsi == 'makassar')
            $data = Makassar::where('id', $id)->first();
        else
            return response("Data pada provinsi tersebut belum tersedia / Provinsi tidak di temukan");
        
        $data->total = $request->input('total');
        $data->save();

        return response('Berhasil Merubah Data');
    }

    public function destroyDataProvinsi($provinsi , $id)
    {
        if($provinsi == 'makassar')
            $data = Makassar::where('id', $id)->first();
        else
            return response("Data pada provinsi tersebut belum tersedia / Provinsi tidak di temukan");

        $data->delete();

        return response('Berhasil Menghapus Data');
    }

}