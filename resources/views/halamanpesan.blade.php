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
    <h4>Selamat Datang di Abicare Indonesia</h4>

    <p>Silahkan pilih jenis layanan pemesanan</p>
  </div>
  <div class="row">
    @foreach($roles_jenis as $data)
    <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-white">
          <div class="widget-user-image">
            <img class="img-circle" src="{{url('asset/dist/img/akupuntur.jpg')}}" alt="User Avatar">
          </div>
          <!-- /.widget-user-image -->
          <h3 class="widget-user-username">{{$data->nama_perawatan}}</h3>
          <h5 class="widget-user-desc">-</h5>
        </div>
        <div class="box-footer">
          
          <a href="{{url('/daftarhomecare')}}/{{$data->id_roles_jenis}}">
            <button type="submit" class="btn btn-primary">Pilih</button>
          </a> 

        </div>
      </div>
      <!-- /.box-body -->
    </div>
    @endforeach
          <!-- /.row -->
        </section>
        @append
    <!-- /.content -->