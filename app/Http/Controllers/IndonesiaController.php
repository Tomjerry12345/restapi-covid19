<?php

namespace App\Http\Controllers;

use App\Indonesia; //File Model
use Illuminate\Http\Request;

class IndonesiaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    public function getIndonesia()
    {
        $data = Indonesia::all();
        return response($data);
    }

    public function setIndonesia(Request $request)
    {
        $data = new Indonesia();
        $data->status = $request->input('status');
        $data->total = $request->input('total');
        $data->save();

        return response('Berhasil Tambah Data');
    }

    public function updateIndonesia(Request $request, $id)
    {
        $data = Indonesia::where('id', $id)->first();
        $data->total = $request->input('total');
        $data->save();

        return response('Berhasil Merubah Data');
    }

    public function destroyIndonesia($id)
    {
        $data = Indonesia::where('id', $id)->first();
        $data->delete();

        return response('Berhasil Menghapus Data');
    }


}