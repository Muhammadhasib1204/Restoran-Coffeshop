<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pemesanan;
use Barryvdh\DomPDF\Facade\Pdf;

class PembayaranController extends Controller
{
    public function index(){
        $data = Pembayaran::get(); 
        return view('Administrator/Pembayarans/Pembayaran', compact('data'));
    }

    public function add(){
        $data_pesanan = Pemesanan::get();
        return view('Administrator/Pembayarans/addPembayaran', compact('data_pesanan'));
    }

    public function insertdata(Request $request){
        Pembayaran::create($request->all());
        return redirect()->route('Pembayaran');
    }

    public function readdata($id){
        $data = Pembayaran::find($id);
        $data_pesanan = Pemesanan::get();
        return view('Administrator/Pembayarans/updatePembayaran' , compact('data', 'data_pesanan'));
    }


    public function updatedata(Request $request, $id){
        $data = Pembayaran::find($id);
        $data->update($request->all());
        return redirect()->route('Pembayaran');
    }

    public function deletedata($id){
        $data = Pembayaran::find($id);
        $data->delete();
        return redirect()->route('Pembayaran');
    }

    public function exportpdf(){
        $data = Pembayaran::all();
        $PDF = PDF::loadView('Administrator/Pembayarans/reportPembayaran', array('data' => $data));
        return $PDF->stream('data-pembayaran.pdf');
    }
}
