<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormPesan;
use App\FormLayanan;
use Auth;
use DB;

class FormPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formpesan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function hari_ini($tanggal){
      $hari = date ("D", strtotime($tanggal));

      switch($hari){
        case 'Sun':
        $hari_ini = "Minggu";
        break;

        case 'Mon':     
        $hari_ini = "Senin";
        break;

        case 'Tue':
        $hari_ini = "Selasa";
        break;

        case 'Wed':
        $hari_ini = "Rabu";
        break;

        case 'Thu':
        $hari_ini = "Kamis";
        break;

        case 'Fri':
        $hari_ini = "Jumat";
        break;

        case 'Sat':
        $hari_ini = "Sabtu";
        break;

        default:
        $hari_ini = "Tidak di ketahui";   
        break;
    }

    return $hari_ini;

}

public function store(Request $request)
{
        //
    $validasi = $request->validate([
        'tanggal_pemesanan' => ['required'],
        'jam_pemesanan' => ['required'],
        'keluhan' => ['required']
    ]);

    $tanggal = $this->hari_ini($request->tanggal_pemesanan);

    $cek = FormLayanan::query()->join('detail_homecare','jenis_perawatan.id_jenis_perawatan','=','detail_homecare.id_jenis_perawatan')
         ->join('jadwal_homecare','detail_homecare.id_detail_perawatan','=','jadwal_homecare.id_detail_perawatan')
         ->where('jenis_perawatan.id_jenis_perawatan',$request->id_jenis_perawatan)
         ->where('jadwal_homecare.hari_praktek',$tanggal)
         ->where('jadwal_homecare.start','<=', $request->jam_pemesanan)
         ->where('jadwal_homecare.end','>=', $request->jam_pemesanan)->get()->count();
        if($cek>0){
            //Jadwal tersedia
            $pesan = new FormPesan;
            $pesan->id_users = Auth::user()->id;
            $pesan->id_jenis_perawatan = $request->id_jenis_perawatan;
            $pesan->tanggal_pemesanan = $request->tanggal_pemesanan;
            $pesan->jam_pemesanan = $request->jam_pemesanan;
            $pesan->keluhan = $request->keluhan;
            $pesan->save();

            return redirect('riwayatpemesanan')->with(session()->flash('store', ''));

        }
        else{
            //Jadwal tidak tersedia
            return redirect('formpesan/'.$request->id_jenis_perawatan)->with(session()->flash('error', ''));
        }

    


    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_jenis_perawatan)
    {
        //
        $homecare = FormLayanan::query()
        ->join('detail_homecare','jenis_perawatan.id_jenis_perawatan','=','detail_homecare.id_jenis_perawatan')
        ->where('detail_homecare.id_jenis_perawatan',$id_jenis_perawatan)->get();

        $jadwal = FormLayanan::query()
        ->join('detail_homecare','jenis_perawatan.id_jenis_perawatan','=','detail_homecare.id_jenis_perawatan')
        ->join('jadwal_homecare','detail_homecare.id_detail_perawatan','=','jadwal_homecare.id_detail_perawatan')
        ->where('detail_homecare.id_jenis_perawatan',$id_jenis_perawatan)->get();

        return view('formpesan')
        ->with('homecare', $homecare)
        ->with('jadwal',$jadwal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
