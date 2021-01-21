<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    // Persetujuan HR
    public function index()
    {

        return view('HR.persetujuanReim.index');
    
    }
    
    public function verifikasi()
    {

        return view('HR.persetujuanReim.verifikasi');
    
    }
}
