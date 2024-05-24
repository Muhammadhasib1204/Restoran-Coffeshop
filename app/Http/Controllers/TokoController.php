<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\Pemilik;
use Barryvdh\DomPDF\Facade\Pdf;

class TokoController extends Controller
{
    public function index(){
        $data = Toko::get(); 
        return view('Administrator/Tokos/Toko', compact('data'));
    }

    public function add(){
        $data_pemilik = Pemilik::get();
        return view('Administrator/Tokos/addToko', compact( 'data_pemilik'));
    }

    public function insertdata(Request $request){
        Toko::create($request->all());
        return redirect()->route('Toko');
    }

    public function readdata($id){
        $data = Toko::find($id);
        $data_pemilik = Pemilik::get();
        return view('Administrator/Tokos/updateToko' , compact('data','data_pemilik'));
    }


    public function updatedata(Request $request, $id){
        $data = Toko::find($id);
        $data->update($request->all());
        return redirect()->route('Toko');
    }

    public function deletedata($id){
        $data = Toko::find($id);
        $data->delete();
        return redirect()->route('Toko');
    }

    public function exportpdf(){
        $data = Toko::all();
        $PDF = PDF::loadView('Administrator/Tokos/reportToko', array('data' => $data));
        return $PDF->stream('data-toko.pdf');
    }
}
