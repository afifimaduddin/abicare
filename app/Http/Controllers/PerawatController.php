<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerawatController extends Controller
{
    public function halperawat()
    {
    	return view('halamanperawat');
    }

    public function contohlagi()
    {
        
    	return view('formlayanan');
    }

    public function daftarpesanan()
    {
    	return view('pesanan');
    }

    public function dethomecare()
    {
    	return view('detailhomecare');
    }

    public function hasilhomecare()
    {
        return view('homecareperawat');
    }

    public function jadwhomecare()
    {
        return view('jadwalhomecare');
    }
}
