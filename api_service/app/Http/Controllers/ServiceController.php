<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function index()
    {
        return Service::all();
    }

     public function findId(Request $request)
    {
        $id = $request->id;
        
        return Service::find($id);
    }

    //menambahkan data service
    public function create(Request $request)
    {
        $service = new Service();
        $service->jenishandphone = $request->jenishandphone;
        $service->keluhan= $request->keluhan;
        $service->pemilik= $request->pemilik;
        $service->nohp= $request->nohp;
        $service->save();

        return "Data berhasil di tambahkan";

    }

    //mengubah data
    public function update(Request $request, $id)
    {
        $jenishandphone = $request->jenishandphone;
        $keluhan = $request->keluhan;
        $pemilik = $request->pemilik;
        $nohp= $request->nohp;

        $service = Service::find($id);

        $service->jenishandphone = $jenishandphone;
        $service->keluhan= $keluhan;
        $service->pemilik= $pemilik;
        $service->nohp= $nohp;

        $service->save();

        return "data berhasil di ubah";



    }

    //menghapus data
    public function delete($id)
    {
        $service = Service::find($id);

        $service->delete();
    }
}
