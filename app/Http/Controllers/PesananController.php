<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormPesan;
use Auth;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pesanan = FormPesan::query()->join('jenis_perawatan','jenis_perawatan.id_jenis_perawatan','=','pemesanan.id_jenis_perawatan')
         ->join('detail_homecare','detail_homecare.id_jenis_perawatan','=','jenis_perawatan.id_jenis_perawatan')
         ->join('users','users.id','=','jenis_perawatan.id_users')
         ->join('users as u','u.id','=','pemesanan.id_users')
         ->where('u.id_roles',1)
         ->where('users.id',Auth::user()->id)->get();

        return view('pesanan')->with('pesanan',$pesanan);
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

    public function ubahstatus($id_pemesanan)
    {
        $pemesanan = FormPesan::find($id_pemesanan);
        $pemesanan->status = 'selesai';
        $pemesanan->save();

        return redirect('pesanan');
    }

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
