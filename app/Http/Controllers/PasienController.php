<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormLayanan;
use App\RolesJenis;

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
       $roles_jenis = RolesJenis::all();

        return view('halamanpesan')->with('roles_jenis', $roles_jenis);
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

    public function welcome2()
    {
        $roles_jenis = RolesJenis::all();

        return view('welcomepasien')->with('roles_jenis', $roles_jenis);
    }
}
