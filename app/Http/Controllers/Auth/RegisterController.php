<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\roles;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';
   //  public function redirectPath()
   // {
   //     if (Auth::user() == true && Auth::user()->id_roles == 1 )
   //     {

   //         return '/halamanpasien';
   //     }elseif (Auth::user() == true && Auth::user()->id_roles == 2 )
   //     {
   //          return '/halamanperawat';
   //     }elseif (Auth::user() == true && Auth::user()->id_roles == 3)
   //     {
   //         return '/halamanadmin';
   //     }else
   //     {
   //      return redirect('/login');
   //     }
   //  } 


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      return Validator::make($data, [
        'name' => 'required|string|max:255',
        'jenis_kelamin' => 'required',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'tanggal_lahir' => 'required|date',
        'id_roles' => 'required',
      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'jenis_kelamin' => $data['jenis_kelamin'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
        'tanggal_lahir' => ($data['tanggal_lahir']),
        'id_roles' => $data['id_roles'],

      ]);
        // redirect('/perawat');
    }

  }
