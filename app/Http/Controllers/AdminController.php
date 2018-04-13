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
    public function dafpengguna()
    {
        return view('admin_daftarpengguna');
    }
    public function pemesanan()
    {
    	return view('admin_pemesanan');
    }
    public function mitra()
    {
        return view('admin_mitrahomecare');
    }
    public function jenis()
    {
        return view('admin_jenislayanan');
    }
    public function lihat()
    {
        return view('admin_pemesanan_perawat');
    }
}
