<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Toko;
use Barryvdh\DomPDF\Facade\Pdf;

class MenuController extends Controller
{
    public function index(){
        $data = Menu::get(); 
        return view('Administrator/Menus/Menu', compact('data'));
    }

    public function add(){
        $data_toko = Toko::get();
        return view('Administrator/Menus/addMenu', compact( 'data_toko'));
    }

    public function insertdata(Request $request){
        Menu::create($request->all());
        return redirect()->route('Menu');
    }

    public function readdata($id){
        $data = Menu::find($id);
        $data_toko = Toko::get();
        return view('Administrator/Menus/updateMenu' , compact('data','data_toko'));
    }


    public function updatedata(Request $request, $id){
        $data = Menu::find($id);
        $data->update($request->all());
        return redirect()->route('Menu');
    }

    public function deletedata($id){
        $data = Menu::find($id);
        $data->delete();
        return redirect()->route('Menu');
    }

    public function exportpdf(){
        $data = Menu::all();
        $PDF = PDF::loadView('Administrator/Menus/reportMenu', array('data' => $data));
        return $PDF->stream('data-menu.pdf');
    }
}
