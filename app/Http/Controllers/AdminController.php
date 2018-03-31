<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dafusers()
    {
    	return view('daftarusers');
    }
    
    public function haladmin()
    {
    	return view('halamanadmin');
    }
    public function listhome()
    {
    	return view('listhomecare');
    }
    public function dafpesanan()
    {
        return view('daftarpesanan');
    }
    // public function afterregister()
    // {
    // 	return view('login')
    // }
}
