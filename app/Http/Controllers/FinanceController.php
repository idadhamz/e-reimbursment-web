<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    // Persetujuan Finance
    public function index()
    {

        return view('finance.persetujuanReim.index');
    
    }
    
    public function verifikasi()
    {

        return view('finance.persetujuanReim.verifikasi');
    
    }

    // Pengembalian Dana
    public function indexDana()
    {

        return view('finance.pengembalianDana.index');
    
    }
    
    public function createDana()
    {

        return view('finance.pengembalianDana.create');
    
    }
}
