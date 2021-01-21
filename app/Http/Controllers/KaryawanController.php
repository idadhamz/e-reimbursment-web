<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Request Reim
    public function index()
    {

        return view('karyawan.requestReim.index');
    
    }

    public function create()
    {

        return view('karyawan.requestReim.create');
    
    }

    public function edit()
    {

        return view('karyawan.requestReim.edit');
    
    }
    
    // Track Reim
    public function indexTrack()
    {

        return view('karyawan.trackReim.index');
    
    }
    
    public function viewTrack()
    {

        return view('karyawan.trackReim.view');
    
    }
}
