<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormLayanan;

class PasienController extends Controller
{
    public function halpasien()
    {
    	return view('halamanpasien');
    }

    public function profilpas()
    {
        return view('profilepasien');
    }

    public function halpesan()
    {
    	return view('halamanpesan');
    }

    public function riwpesan()
    {
    	return view('riwayatpemesanan');
    }

    public function daftar()
    {
        return view('daftarhomecare');
    }

    public function pesansekarang()
    {
        return view('formpesan');
    }

    public function regis()
    {
        return view('registerabicare');
    }
}
