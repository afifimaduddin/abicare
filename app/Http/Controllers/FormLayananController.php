<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RolesJenis;
use App\FormLayanan;
use App\DetailHomecare;
use App\JadwalHomecare;
use Auth;
use DB;

class FormLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role = RolesJenis::all();
        $homecare = FormLayanan::all()->where('id_users', Auth::user()->id);
        $detailhomecare = DetailHomecare::all()->where('id_users',Auth::user()->id);
        $jadwalhomecare = JadwalHomecare::all()->where('id_users',Auth::user()->id);

        return view('formlayanan')
        ->with('role', $role)
        ->with('homecare', $homecare)
        ->with('detailhomecare',  $detailhomecare)
        ->with('jadwalhomecare',  $jadwalhomecare);


        // $jenis = FormLayanan::all();
        // return view('pasienpesan')->with('jenis',$jenis);

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
       $validasi = $request->validate([
        'nama_homecare' => ['required'],
        'jenis_layanan' => ['required'],
        'foto' => ['required|mimes:jpeg,bmp,png|size:5000'],
        'alamat_homecare' => ['required']
       ]);
        
        $layanan = new FormLayanan;
        $layanan->nama_homecare = $request->nama_homecare;
        $layanan->id_perawatan = $request->jenis_layanan;
        $layanan->foto_homecare = $request->foto;
        $layanan->id_users = Auth::user()->id;
        $layanan->alamat_homecare = $request->alamat_homecare;
        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
           $destinationPath = 'public/asset/dist/img';
           $extension = $request->foto->extension();
           $fileName = date('YmdHsi').'_'.Auth::user()->id.'.'.$extension;
           $request->foto->storeAs($destinationPath, $fileName);
           $layanan->foto_homecare = $fileName;
        }
        $layanan->save();


        return redirect('detailhomecare');

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
        // $role = role::find($id)

        // return view::make('role.show')->with('role',$role);
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

       // dd($request);

        $layanan = FormLayanan::find($id);
        $layanan->nama_homecare = $request->nama_homecare;
        $layanan->id_perawatan = $request->jenis_layanan;
        $layanan->foto_homecare = $request->foto;
        $layanan->alamat_homecare = $request->alamat_homecare;
        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
           $destinationPath = 'public/asset/dist/img';
           $extension = $request->foto->extension();
           $fileName = date('YmdHsi').'_'.Auth::user()->id.'.'.$extension;
           $request->foto->storeAs($destinationPath, $fileName);
           $layanan->foto_homecare = $fileName;
        }
        $layanan->save();

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
    }
}
