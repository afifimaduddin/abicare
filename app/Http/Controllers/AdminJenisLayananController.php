<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RolesJenis;

class AdminJenisLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenis = RolesJenis::all();
        return view('admin_jenislayanan')->with('jenis',$jenis);
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
       $jenis = new RolesJenis;
       $jenis->nama_perawatan = $request->nama_perawatan;
       $jenis->save();


       return redirect('admin_jenislayanan')->with(session()->flash('store', ''));
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
       $jenis = RolesJenis::find($id);
       $jenis->nama_perawatan = $request->jenis_layanan;
       $jenis->save();


       return redirect('admin_jenislayanan')->with(session()->flash('update', ''));
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
