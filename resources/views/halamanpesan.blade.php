@extends('halamanpasien')

@section('isi2')
<section class="content-header">
  <h1>
    Pilih Layanan
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Pasien</a></li>
    <li class="active">Pilih Layanan</li>
  </ol>
</section>
<section class="content">
  <div class="callout callout-success">
    <p>Silahkan pilih jenis layanan yang anda butuhkan</p>
  </div>
  
  <section>
    <div class="row">
    @foreach($roles_jenis as $data)
    <div class="col-md-4">
      <div class="box box-widget widget-user-2">
        <div class="widget-user-header bg-white">
        <div class="box-body box-profile">
          <div class="widget-user-image">
            <img class="img-circle" src="{{url('asset/dist/img/layanan.png')}}" alt="User profile picture">
          </div>
          <h3 class="profile-username text-center">
            {{$data->nama_perawatan}}
          </h3>
          <p class="text-muted text-center">
            {{$data->id_roles_jenis}}
          </p>
        </div>
        <div class="box-footer">
          <a href="{{url('/daftarhomecare')}}/{{$data->id_roles_jenis}}">
            <center><button type="submit" class="btn btn-primary">Pilih</button></center>
          </a> 
        </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>
  @append
    <!-- /.content -->