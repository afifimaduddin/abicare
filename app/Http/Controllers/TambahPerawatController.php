<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TambahPerawat;
use Auth;
use DB;

class TambahPerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tambahperawat');
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
        $tambahperawat = new TambahPerawat;
        $tambahperawat->nama_perawat = $request->nama_perawat;
        $tambahperawat->id_homecare = DB::table('homecare')->where('id_users', Auth::user()->id )->first()->id_homecare;
        $tambahperawat->jenis_kelamin = $request->jenis_kelamin;
        $tambahperawat->tanggal_lahir = $request->tanggal_lahir;
        $tambahperawat->pendidikan_terakhir = $request->jenjang;
        $tambahperawat->jurusan = $request->jurusan;
        $tambahperawat->NIRA = $request->nomor;
        $tambahperawat->foto_perawat = $request->foto_perawat;
        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
           $destinationPath = 'public/asset/dist/img';
           $extension = $request->foto->extension();
           $fileName = date('YmdHsi').'_'.Auth::user()->id.'.'.$extension;
           $request->foto->storeAs($destinationPath, $fileName);
           $tambahperawat->foto_perawat = $fileName;
        }
        $tambahperawat->save();


        return redirect('perawattersedia');

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
        $ubahperawat = TambahPerawat::all()->where('id_detail_perawat',$id);
        return view('ubah_perawat')->with('ubahperawat',$ubahperawat);
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
        $tambahperawat = TambahPerawat::find($id);
        $tambahperawat->nama_perawat = $request->nama_perawat;
        $tambahperawat->id_homecare = DB::table('homecare')->where('id_users', Auth::user()->id )->first()->id_homecare;
        $tambahperawat->jenis_kelamin = $request->jenis_kelamin;
        $tambahperawat->tanggal_lahir = $request->tanggal_lahir;
        $tambahperawat->pendidikan_terakhir = $request->jenjang;
        $tambahperawat->jurusan = $request->jurusan;
        $tambahperawat->NIRA = $request->nomor;
        $tambahperawat->foto_perawat = $request->foto_perawat;
        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
           $destinationPath = 'public/asset/dist/img';
           $extension = $request->foto->extension();
           $fileName = date('YmdHsi').'_'.Auth::user()->id.'.'.$extension;
           $request->foto->storeAs($destinationPath, $fileName);
           $tambahperawat->foto_perawat = $fileName;
        }
        $tambahperawat->save();


        return redirect('perawattersedia');
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