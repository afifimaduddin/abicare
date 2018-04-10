<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormPesan;
use Auth;

class PerawatController extends Controller
{
    public function halperawat()
    {
        $jumlah = FormPesan::query()->join('homecare','homecare.id_homecare','=','pemesanan.id_homecare')
         ->join('detail_homecare','detail_homecare.id_homecare','=','homecare.id_homecare')
         ->join('users','users.id','=','homecare.id_users')
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
