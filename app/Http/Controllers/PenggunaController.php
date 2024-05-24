<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Pemilik;
use App\Models\Admin;
use App\Models\Pengguna;
use Barryvdh\DomPDF\Facade\Pdf;


class PenggunaController extends Controller
{
    public function index(){
        $data = Pengguna::get(); 
        return view('Administrator/Penggunas/Pengguna', compact('data'));
    }

    public function add(){
        $data_admin = Admin::get();
        $data_pemilik = Pemilik::get();
        $data_customer = Customer::get();
        return view('Administrator/Penggunas/addPengguna', compact('data_admin', 'data_pemilik', 'data_customer'));
    }

    public function insertdata(Request $request){
        Pengguna::create($request->all());
        return redirect()->route('Pengguna');
    }

    public function readdata($id){
        $data = Pengguna::find($id);
        $data_admin = Admin::get();
        $data_pemilik = Pemilik::get();
        $data_customer = Customer::get();
        return view('Administrator/Penggunas/updatePengguna' , compact('data', 'data_admin', 'data_pemilik', 'data_customer'));
    }


    public function updatedata(Request $request, $id){
        $data = Pengguna::find($id);
        $data->update($request->all());
        return redirect()->route('Pengguna');
    }

    public function deletedata($id){
        $data = Pengguna::find($id);
        $data->delete();
        return redirect()->route('Pengguna');
    }

    public function exportpdf(){
        $data = Pengguna::all();
        $PDF = PDF::loadView('Administrator/Penggunas/reportpengguna', array('data' => $data));
        return $PDF->stream('data-pengguna.pdf');
    }
}
