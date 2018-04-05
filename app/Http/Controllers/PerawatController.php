<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormPesan;
use Auth;

class PerawatController extends Controller
{
    public function halperawat()
    {
        $jumlah = FormPesan::query()->join('jenis_perawatan','jenis_perawatan.id_jenis_perawatan','=','pemesanan.id_jenis_perawatan')
         ->join('detail_homecare','detail_homecare.id_jenis_perawatan','=','jenis_perawatan.id_jenis_perawatan')
         ->join('users','users.id','=','jenis_perawatan.id_users')
         ->join('users as u','u.id','=','pemesanan.id_users')
         ->where('u.id_roles',1)
         ->where('users.id',Auth::user()->id)->get()->count();

        return view('halamanperawat')->with('jumlah',$jumlah);
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

    public function welcome1()
    {
        return view('welcomeperawat');
    }


}
