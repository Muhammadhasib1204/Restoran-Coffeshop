<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;

class CustomerController extends Controller
{
    public function index(){
        $data = Customer::get(); 
        return view('Administrator/Customers/Customer', compact('data'));
    }

    public function add(){
        return view('Administrator/Customers/addCustomer');
    }

    public function insertdata(Request $request){
        Customer::create($request->all());
        return redirect()->route('Customer');
    }

    public function readdata($id){
        $data = Customer::find($id);
        return view('Administrator/Customers/updateCustomer' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Customer::find($id);
        $data->update($request->all());
        return redirect()->route('Customer');
    }

    public function deletedata($id){
        $data = Customer::find($id);
        $data->delete();
        return redirect()->route('Customer');
    }

    public function exportpdf(){
        $data = Customer::all();
        $PDF = PDF::loadView('Administrator/Customers/reportCustomer', array('data' => $data));
        return $PDF->stream('data-customer.pdf');
    }
}
