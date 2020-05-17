<?php

namespace App\Http\Controllers;

use App\Sembuh; //File Model Status
use App\Meninggal; //File Model Status
use App\Kasus; //File Model Status
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    public function getStatus($status)
    {
        if($status == 'sembuh')
            $data = Sembuh::all();
        elseif($status == 'meninggal')
            $data = Meninggal::all();
        elseif($status == 'kasus')
            $data = Kasus::all();
        else
            $data = "status tidak di temukan";
        return response($data);
    }

    public function setStatus(Request $request , $status)
    {
        if($status == 'sembuh')
            $data = new Sembuh();
        elseif($status == 'meninggal')
            $data = new Meninggal();
        elseif($status == 'kasus')
            $data = new Kasus();
        else
            return response('status tidak di temukan');

        $data->bulan = $request->input('bulan');
        $data->jumlah = $request->input('jumlah');
        $data->save();

        return response('Berhasil Tambah Data');
    }

    public function updateStatus(Request $request, $status , $id)
    {
        if($status == 'sembuh')
            $data = Sembuh::where('id', $id)->first();
        elseif($status == 'meninggal')
            $data = Meninggal::where('id', $id)->first();
        elseif($status == 'kasus')
         $data = Kasus::where('id', $id)->first();
        else
            return response('status tidak di temukan');

        $data->bulan = $request->input('bulan');
        $data->jumlah = $request->input('jumlah');
        $data->save();

        return response('Berhasil Merubah Data');
    }

    public function destroyStatus($status , $id)
    {
        if($status == 'sembuh')
            $data = Sembuh::where('id', $id)->first();
        elseif($status == 'meninggal')
            $data = Meninggal::where('id', $id)->first();
        elseif($status == 'kasus')
         $data = Kasus::where('id', $id)->first();
        else
            return response('status tidak di temukan');
            
        $data->delete();

        return response('Berhasil Menghapus Data');
    }


}