<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       if (Auth::user() == true && Auth::user()->id_roles == 1)
       {
           return redirect()->route('pasien');
       }elseif (Auth::user() == true && Auth::user()->id_roles == 2)
       {
            return redirect()->route('perawat');
       }elseif (Auth::user() == true && Auth::user()->id_roles == 3)
       {
           return redirect()->route('admin');
       }
       return redirect('/login');
   }
}
