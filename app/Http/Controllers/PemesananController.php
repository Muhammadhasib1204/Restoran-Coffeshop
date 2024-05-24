<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Customer;
use App\Models\Pemesanan;
use Barryvdh\DomPDF\Facade\Pdf;

class PemesananController extends Controller
{
    public function index(){
        $data = Pemesanan::get(); 
        return view('Administrator/Pemesanans/Pemesanan', compact('data'));
    }

    public function add(){
        $data_customer = Customer::get();
        $data_menu = Menu::get();
        return view('Administrator/Pemesanans/addPemesanan', compact('data_customer', 'data_menu'));
    }

    public function insertdata(Request $request){
        Pemesanan::create($request->all());
        return redirect()->route('Pemesanan');
    }

    public function readdata($id){
        $data = Pemesanan::find($id);
        $data_customer = Customer::get();
        $data_menu = Menu::get();;
        return view('Administrator/Pemesanans/updatePemesanan' , compact('data', 'data_customer', 'data_menu'));
    }


    public function updatedata(Request $request, $id){
        $data = Pemesanan::find($id);
        $data->update($request->all());
        return redirect()->route('Pemesanan');
    }

    public function deletedata($id){
        $data = Pemesanan::find($id);
        $data->delete();
        return redirect()->route('Pemesanan');
    }

    public function exportpdf(){
        $data = Pemesanan::all();
        $PDF = PDF::loadView('Administrator/Pemesanans/reportpemesanan', array('data' => $data));
        return $PDF->stream('data-pemesanan.pdf');
    }
}
