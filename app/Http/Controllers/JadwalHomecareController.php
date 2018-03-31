<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalHomecare;
use App\FormLayanan;
use Auth;
use DB;

class JadwalHomecareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jadwalhomecare = JadwalHomecare::all()->where('id_users',Auth::user()->id);
        return view('jadwalhomecare')->with('jadwalhomecare',  $jadwalhomecare);
;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'hari_praktek' => ['required'],
        'jam_buka' => ['required'],
        'jam_tutup' => ['required'],
       ]);
        
        $jadwal = new JadwalHomecare;
        $jadwal->hari_praktek = $request->hari_praktek;
        $jadwal->start = $request->jam_buka;
        $jadwal->end = $request->jam_tutup;
         $jadwal->id_users = Auth::user()->id;
        $jadwal->id_detail_perawatan = DB::table('detail_homecare')->where('id_users', Auth::user()->id )->first()->id_detail_perawatan;
        $jadwal->save();

        return redirect('jadwalhomecare');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $jadwal = JadwalHomecare::find($id);
        $jadwal->hari_praktek = $request->hari_praktek;
        $jadwal->start = $request->jam_buka;
        $jadwal->end = $request->jam_tutup;
        $jadwal->id_users = Auth::user()->id;
        $jadwal->id_detail_perawatan = DB::table('detail_homecare')->where('id_users', Auth::user()->id )->first()->id_detail_perawatan;
        $jadwal->save();

        return redirect('formlayanan');
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
        $detail = JadwalHomecare::find($id);
        $detail->delete();

        return redirect('formlayanan');
    }
}
