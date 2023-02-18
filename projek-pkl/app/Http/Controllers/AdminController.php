<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

     $dataPeserta = Peserta::all();
    return view('Formpendaftaran.datapeserta', compact('dataPeserta'));   
    }
    
}
