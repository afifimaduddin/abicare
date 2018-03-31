<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormLayanan;
use App\User;
use Auth;

class ProfilPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = User::all()->where('id', Auth::user()->id)->where('id_roles',1);
        return view('profilepasien')->with('profil',$profil);
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
        $profil = User::find($id);
        $profil->name = $request->nama_pasien;
        $profil->email = $request->email_pasien;
        $profil->id = Auth::user()->id;
        // $profil->foto_homecare = $request->foto;
        $profil->tanggal_lahir = $request->tanggal_lahir;
        $profil->jenis_kelamin = $request->jenis_kelamin;
        // if($request->hasFile('foto') && $request->file('foto')->isValid()) {
        //    $destinationPath = 'public/asset/dist/img';
        //    $extension = $request->foto->extension();
        //    $fileName = date('YmdHsi').'_'.Auth::user()->id.'.'.$extension;
        //    $request->foto->storeAs($destinationPath, $fileName);
        //    $profil->foto_homecare = $fileName;
        $profil->save();

        return redirect('profilepasien');
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
