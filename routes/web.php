<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('layout/template');
});

// Route Index
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

// Route Admin
Route::get('/Admin', [AdminController::class, 'index'])->name('Admin');
Route::get('/Admin/addform', [AdminController::class, 'add'])->name('addAdmin');
Route::post('/Admin/addform', [AdminController::class, 'insertdata'])->name('insertAdmin');
Route::get('/Admin/updateform/{id}', [AdminController::class, 'readdata'])->name('readAdmin');
Route::get('/Admin/allform/{id}', [AdminController::class, 'alldata'])->name('allAdmin');
Route::post('/Admin/updateform/{id}', [AdminController::class, 'updatedata'])->name('updateAdmin');
Route::get('/Admin/{id}', [AdminController::class, 'deletedata'])->name('deleteAdmin');
Route::get('/pdf-Admin', [AdminController::class, 'exportpdf'])->name('pdfAdmin');


Route::get('/Customer', [CustomerController::class, 'index'])->name('Customer');
Route::get('/Customer/addform', [CustomerController::class, 'add'])->name('addCustomer');
Route::post('/Customer/addform', [CustomerController::class, 'insertdata'])->name('insertCustomer');   
Route::get('/Customer/updateform/{id}', [CustomerController::class, 'readdata'])->name('readCustomer');
Route::get('/Customer/allform/{id}', [CustomerController::class, 'alldata'])->name('allCustomer');
Route::post('/Customer/updateform/{id}', [CustomerController::class, 'updatedata'])->name('updateCustomer');
Route::get('/Customer/{id}', [CustomerController::class, 'deletedata'])->name('deleteCustomer');
Route::get('/pdf-Customer', [CustomerController::class, 'exportpdf'])->name('pdfCustomer');

Route::get('/Pemilik', [PemilikController::class, 'index'])->name('Pemilik');
Route::get('/Pemilik/addform', [PemilikController::class, 'add'])->name('addPemilik');
Route::post('/Pemilik/addform', [PemilikController::class, 'insertdata'])->name('insertPemilik');   
Route::get('/Pemilik/updateform/{id}', [PemilikController::class, 'readdata'])->name('readPemilik');
Route::get('/Pemilik/allform/{id}', [PemilikController::class, 'alldata'])->name('allPemilik');
Route::post('/Pemilik/updateform/{id}', [PemilikController::class, 'updatedata'])->name('updatePemilik');
Route::get('/Pemilik/{id}', [PemilikController::class, 'deletedata'])->name('deletePemilik');
Route::get('/pdf-Pemilik', [PemilikController::class, 'exportpdf'])->name('pdfPemilik');

Route::get('/Pengguna', [PenggunaController::class, 'index'])->name('Pengguna');
Route::get('/Pengguna/addform', [PenggunaController::class, 'add'])->name('addPengguna');
Route::post('/Pengguna/addform', [PenggunaController::class, 'insertdata'])->name('insertPengguna');
Route::get('/Pengguna/updateform/{id}', [PenggunaController::class, 'readdata'])->name('readPengguna');
Route::get('/Pengguna/allform/{id}', [PenggunaController::class, 'alldata'])->name('allPengguna');
Route::post('/Pengguna/updateform/{id}', [PenggunaController::class, 'updatedata'])->name('updatePengguna');  
Route::get('/Pengguna/{id}', [PenggunaController::class, 'deletedata'])->name('deletePengguna');
Route::get('/pdf-Pengguna', [PenggunaController::class, 'exportpdf'])->name('pdfPengguna');

Route::get('/Toko', [TokoController::class, 'index'])->name('Toko');
Route::get('/Toko/addform', [TokoController::class, 'add'])->name('addToko');
Route::post('/Toko/addform', [TokoController::class, 'insertdata'])->name('insertToko');
Route::get('/Toko/updateform/{id}', [TokoController::class, 'readdata'])->name('readToko');
Route::get('/Toko/allform/{id}', [TokoController::class, 'alldata'])->name('allToko');
Route::post('/Toko/updateform/{id}', [TokoController::class, 'updatedata'])->name('updateToko');  
Route::get('/Toko/{id}', [TokoController::class, 'deletedata'])->name('deleteToko');
Route::get('/pdf-Toko', [TokoController::class, 'exportpdf'])->name('pdfToko');

Route::get('/Menu', [MenuController::class, 'index'])->name('Menu');
Route::get('/Menu/addform', [MenuController::class, 'add'])->name('addMenu');
Route::post('/Menu/addform', [MenuController::class, 'insertdata'])->name('insertMenu');
Route::get('/Menu/updateform/{id}', [MenuController::class, 'readdata'])->name('readMenu');
Route::get('/Menu/allform/{id}', [MenuController::class, 'alldata'])->name('allMenu');
Route::post('/Menu/updateform/{id}', [MenuController::class, 'updatedata'])->name('updateMenu');  
Route::get('/Menu/{id}', [MenuController::class, 'deletedata'])->name('deleteMenu');
Route::get('/pdf-Menu', [MenuController::class, 'exportpdf'])->name('pdfMenu');

Route::get('/Pemesanan', [PemesananController::class, 'index'])->name('Pemesanan');
Route::get('/Pemesanan/addform', [PemesananController::class, 'add'])->name('addPemesanan');
Route::post('/Pemesanan/addform', [PemesananController::class, 'insertdata'])->name('insertPemesanan');
Route::get('/Pemesanan/updateform/{id}', [PemesananController::class, 'readdata'])->name('readPemesanan');
Route::get('/Pemesanan/allform/{id}', [PemesananController::class, 'alldata'])->name('allPemesanan');
Route::post('/Pemesanan/updateform/{id}', [PemesananController::class, 'updatedata'])->name('updatePemesanan');  
Route::get('/Pemesanan/{id}', [PemesananController::class, 'deletedata'])->name('deletePemesanan');
Route::get('/pdf-Pemesanan', [PemesananController::class, 'exportpdf'])->name('pdfPemesanan');

Route::get('/Pembayaran', [PembayaranController::class, 'index'])->name('Pembayaran');
Route::get('/Pembayaran/addform', [PembayaranController::class, 'add'])->name('addPembayaran');
Route::post('/Pembayaran/addform', [PembayaranController::class, 'insertdata'])->name('insertPembayaran');
Route::get('/Pembayaran/updateform/{id}', [PembayaranController::class, 'readdata'])->name('readPembayaran');
Route::get('/Pembayaran/allform/{id}', [PembayaranController::class, 'alldata'])->name('allPembayaran');
Route::post('/Pembayaran/updateform/{id}', [PembayaranController::class, 'updatedata'])->name('updatePembayaran');  
Route::get('/Pembayaran/{id}', [PembayaranController::class, 'deletedata'])->name('deletePembayaran');
Route::get('/pdf-Pembayaran', [PembayaranController::class, 'exportpdf'])->name('pdfPembayaran');

Route::get('/Penilaian', [PenilaianController::class, 'index'])->name('Penilaian');
Route::get('/Penilaian/addform', [PenilaianController::class, 'add'])->name('addPenilaian');
Route::post('/Penilaian/addform', [PenilaianController::class, 'insertdata'])->name('insertPenilaian');
Route::get('/Penilaian/updateform/{id}', [PenilaianController::class, 'readdata'])->name('readPenilaian');
Route::get('/Penilaian/allform/{id}', [PenilaianController::class, 'alldata'])->name('allPenilaian');
Route::post('/Penilaian/updateform/{id}', [PenilaianController::class, 'updatedata'])->name('updatePenilaian');  
Route::get('/Penilaian/{id}', [PenilaianController::class, 'deletedata'])->name('deletePenilaian');
Route::get('/pdf-Penilaian', [PenilaianController::class, 'exportpdf'])->name('pdfPenilaian');