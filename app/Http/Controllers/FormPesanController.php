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
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
        'tanggal_pemesanan' => ['required'],
        'jam_pemesanan' => ['required'],
        'keluhan' => ['required']
       ]);
        
        $pesan = new FormPesan;
        $pesan->id_users = Auth::user()->id;
        $pesan->id_jenis_perawatan = $request->id_jenis_perawatan;
        $pesan->tanggal_pemesanan = $request->tanggal_pemesanan;
        $pesan->jam_pemesanan = $request->jam_pemesanan;
        $pesan->keluhan = $request->keluhan;
        $pesan->save();


        return redirect('riwayatpemesanan');
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
