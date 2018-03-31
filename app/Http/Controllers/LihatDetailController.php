<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormLayanan;
use App\DetailHomecare;
use Auth;

class LihatDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detailhomecare = DetailHomecare::all()->where('id_users',Auth::user()->id);

        return view('lihatdetail')
        ->with('detailhomecare', $detailhomecare);
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

        return view('lihatdetail')
        ->with('homecare', $homecare)
        ->with('jadwal',$jadwal);
        // ->with('detailhomecare', $detailhomecare);
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
