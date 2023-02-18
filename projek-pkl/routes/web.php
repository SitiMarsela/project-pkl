<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\DataPesertaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Index');
});

// Route::get('/formpendaftaran', function () {
//     return view('Formpendaftaran.created');
// });

Route::get('/datapkl', function () {
    return view('layout1');
});

Route::get('/terimakasih', function () {
    return view('poup');
});

// form pendaftaran

Route::get('/formpendaftaran', [PesertaController::class, 'index']); 
// Route::get('/create-form', [PesertaController::class, 'create'])->name('create-form'); 
Route::post('/simpan-form', [PesertaController::class, 'store'])->name('simpan-form'); 

// Data Peserta

Route::get('/datapeserta', [AdminController::class, 'index']); 


// Route::get('/datapeserta', [DataPesertaController::class, 'index']); 
// Route::get('/create-form', [DataPesertaController::class, 'create'])->name('create-form'); 
// Route::post('/simpan-form', [DataPesertaController::class, 'store'])->name('simpan-form'); 

