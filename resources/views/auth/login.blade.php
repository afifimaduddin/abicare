@extends('layouts.app')

@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
  <div class="login-logo">
     <a href="{{ url('/') }}"><img src="{{url('asset/dist/img/abicarelogo.png')}}" class="img-responsive"></a>
 </div>

    <div class="login-box-body" style="border-radius: 25px">
            <p class="login-box-msg">Login untuk masuk</p>
              <center><small class="login-box-msg text-muted"><i>*Cek E-mail dan pastikan akun telah terverifikasi</i></small></center>
        <div class="row">
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                       <!--  <label for="email" class="col-md-2 control-label">E-Mail </label> -->

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail">

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                       <!--  <label for="password" class="col-md-2 control-label">Sandi</label>
 -->
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required autofocus placeholder="Kata Sandi">

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                        <!-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Login Sebagai</label>
                            <div class="col-md-6">
                                <select name="id_roles" class="form-control">
                                    @foreach (\App\roles::all() as $users)
                                            <option value="{{ $users->id_roles }}">{{ $users->nama_roles }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> -->

                       <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <center>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-success pull-center">
                                    Login
                                </button>
                        </center>
                               <!--  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                        <p style="text-align: center;">Belum memiliki akun? Silahkan&nbsp<a href="{{ route('register') }}">Daftar</a> &nbsp;disini</p> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
