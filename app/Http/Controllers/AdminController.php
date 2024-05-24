<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function index(){
        $data = Admin::get(); 
        return view('Administrator/Admins/Admin', compact('data'));
    }

    public function add(){
        return view('Administrator/Admins/addAdmin');
    }

    public function insertdata(Request $request){
        Admin::create($request->all());
        return redirect()->route('Admin');
    }

    public function readdata($id){
        $data = Admin::find($id);
        return view('Administrator/Admins/updateAdmin' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Admin::find($id);
        $data->update($request->all());
        return redirect()->route('Admin');
    }

    public function deletedata($id){
        $data = Admin::find($id);
        $data->delete();
        return redirect()->route('Admin');
    }

    public function exportpdf(){
        $data = Admin::all();
        $PDF = PDF::loadView('Administrator/Admins/reportAdmin', array('data' => $data));
        return $PDF->stream('data-admin.pdf');
    }
}
