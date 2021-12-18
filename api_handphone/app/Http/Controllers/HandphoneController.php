<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
     public function index()
    {
        return Handphone::all();
    }

     public function findId(Request $request)
    {
        $id = $request->id;
        
        return Handphone::find($id);
    }
    //menambahkan data handphone
    public function create(Request $request)
    {
        $handphone = new Handphone();
        $handphone->jenishandphone = $request->jenishandphone;
        $handphone->spesifikasi= $request->spesifikasi;
        $handphone->status= $request->status;
        $handphone->harga= $request->harga;
        $handphone->save();

        return "Data berhasil di tambahkan";

    }

    //mengubah data
    public function update(Request $request, $id)
    {
        $jenishandphone = $request->jenishandphone;
        $spesifikasi = $request->spesifikasi;
        $status = $request->status;
        $harga= $request->harga;

        $handphone = Handphone::find($id);

        $handphone->jenishandphone = $jenishandphone;
        $handphone->spesifikasi= $spesifikasi;
        $handphone->status= $status;
        $handphone->harga= $harga;

        $handphone->save();

        return "data berhasil di ubah";



    }

    //menghapus data
    public function delete($id)
    {
        $handphone = Handphone::find($id);

        $handphone->delete();
    }
}
