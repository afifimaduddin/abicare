@extends('layouts.app')

@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
  <div class="login-logo">
     <a href="{{ url('/') }}"><img src="{{url('asset/dist/img/abicarelogo.png')}}"  class="img-responsive"></a>
 </div>
 <div class="login-box-body" style="border-radius: 25px">
    <p class="login-box-msg">Lengkapi form register untuk mendaftar</p>
    <div class="login-box-body">
    <div class="row">
                <!-- <div class="panel-heading">Belum memiliki akun?</div> -->

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama Lengkap">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autofocusplaceholder="Tanggal Lahir">

                                @if ($errors->has('tanggal_lahir'))
                                    <span class="help-block">
                                        <option value="" disabled selected=""> <i>---Tanggal Lahir---</i></option>
                                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                              <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                              </select>
                                @if ($errors->has('jenis_kelamin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                     <select id="jenis_kelamin" class="form-control" required="required">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                        </div>  
 -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-mail">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password terdiri dari 6 karakter">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Konfirmasi password">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <select name="id_roles" class="form-control">
                                     <option value="" disabled selected=""> <i>---Daftar Sebagai---</i></option>
                                    @foreach (\App\roles::all() as $users)
                                            <option value="{{ $users->id_roles }}">{{ $users->nama_roles }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <center>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-success">
                                    Daftar
                                </button>
                            </div>
                        </div>
                        </center>
                        <p style="text-align: center;">Sudah memiliki akun? Silahkan&nbsp<a href="{{ route('login') }}">Login</a> &nbsp;disini</p> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
