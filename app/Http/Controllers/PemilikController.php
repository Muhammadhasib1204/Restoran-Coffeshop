<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemilik;
use Barryvdh\DomPDF\Facade\Pdf;

class PemilikController extends Controller
{
    public function index(){
        $data = Pemilik::get(); 
        return view('Administrator/Pemiliks/Pemilik', compact('data'));
    }

    public function add(){
        return view('Administrator/Pemiliks/addPemilik');
    }

    public function insertdata(Request $request){
        Pemilik::create($request->all());
        return redirect()->route('Pemilik');
    }

    public function readdata($id){
        $data = Pemilik::find($id);
        return view('Administrator/Pemiliks/updatePemilik' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pemilik::find($id);
        $data->update($request->all());
        return redirect()->route('Pemilik');
    }

    public function deletedata($id){
        $data = Pemilik::find($id);
        $data->delete();
        return redirect()->route('Pemilik');
    }

    public function exportpdf(){
        $data = Pemilik::all();
        $PDF = PDF::loadView('Administrator/Pemiliks/reportPemilik', array('data' => $data));
        return $PDF->stream('data-pemilik.pdf');
    }
}
