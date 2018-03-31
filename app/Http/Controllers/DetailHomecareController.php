<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailHomecare;
use App\FormLayanan;
use Auth;
use DB;


class DetailHomecareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       return view('detailhomecare');
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
        'deskripsi_homecare' => ['required'],
        'email_homecare' => ['required'],
        'no_telfon' => ['required'],
        'tarif' => ['required']
       ]);
        
        $detail = new DetailHomecare;
        $detail->deskripsi_homecare = $request->deskripsi_homecare;
        // $detail->id_jenis_perawatan = FormLayanan::all()->id_jenis_perawatan;
        $detail->id_jenis_perawatan = DB::table('jenis_perawatan')->where('id_users', Auth::user()->id )->first()->id_jenis_perawatan;
        $detail->id_users = Auth::user()->id;
        $detail->email_homecare = $request->email_homecare;
        $detail->no_telfon = $request->no_telfon;
        $detail->tarif = $request->tarif;
        $detail->save();


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
         $detail = DetailHomecare::find($id);
        $detail->deskripsi_homecare = $request->deskripsi_homecare;
        // $detail->id_jenis_perawatan = FormLayanan::all()->id_jenis_perawatan;
        $detail->id_jenis_perawatan = DB::table('jenis_perawatan')->where('id_users', Auth::user()->id )->first()->id_jenis_perawatan;
        $detail->id_users = Auth::user()->id;
        $detail->email_homecare = $request->email_homecare;
        $detail->no_telfon = $request->no_telfon;
        $detail->tarif = $request->tarif;
        $detail->save();


        return redirect('formlayanan')->with(session()->flash('update', ''));
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
        // DetailHomecare::find($id_detail_perawatan);
        // return redirect('formlayanan');
    }
}
