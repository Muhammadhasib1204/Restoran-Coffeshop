<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Penilaian;
use Barryvdh\DomPDF\Facade\Pdf;

class PenilaianController extends Controller
{
    public function index(){
        $data = Penilaian::get(); 
        return view('Administrator/Penilaians/Penilaian', compact('data'));
    }

    public function add(){
        $data_menu = Menu::get();
        return view('Administrator/Penilaians/addPenilaian', compact('data_menu'));
    }

    public function insertdata(Request $request){
        Penilaian::create($request->all());
        return redirect()->route('Penilaian');
    }

    public function readdata($id){
        $data = Penilaian::find($id);
        $data_menu = Menu::get();
        return view('Administrator/Penilaians/updatePenilaian' , compact('data', 'data_menu'));
    }


    public function updatedata(Request $request, $id){
        $data = Penilaian::find($id);
        $data->update($request->all());
        return redirect()->route('Penilaian');
    }

    public function deletedata($id){
        $data = Penilaian::find($id);
        $data->delete();
        return redirect()->route('Penilaian');
    }

    public function exportpdf(){
        $data = Penilaian::all();
        $PDF = PDF::loadView('Administrator/Penilaians/reportPenilaian', array('data' => $data));
        return $PDF->stream('data-pembayaran.pdf');
    }
}
