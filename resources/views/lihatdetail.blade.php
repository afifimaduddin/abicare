@extends('halamanpasien')

@section('isi2')
<section class="content">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        @foreach($homecare as $data)
        <div class="widget-user-header bg-default">
          <div class="widget-user-image">
            <img class="profile-user-img img-responsive img-circle" src="{{url('storage/asset/dist/img/')}}/{{$data->foto_homecare}}" alt="User Avatar" onerror="this.src='{{url('asset/dist/img/avatar.png')}}'" alt="User profile picture">
          </div>
          <!-- /.widget-user-image -->
          
          <h3 class="widget-user-username">{{$data->nama_homecare}}</h3>
          <h5 class="widget-user-desc">{{$data->alamat_homecare}}</h5>
          <h5 class="widget-user-desc" value=""></h5>
        </div>
        <div class="widget-user-image">
        </div> 
        @endforeach
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      @foreach($homecare as $data)
      <!-- Profile Image -->
      <div class="box box-success">
        <div class="box-body box-profile">
          <ul class="list-group list-group-unbordered">
            <strong><i class="fa fa-book margin-r-5"></i>Deskripsi Homecare</strong>

            <p class="text-muted">{{$data->deskripsi_homecare}}</p>

            <hr>

            <strong><i class="fa fa-envelope-square margin-r-5"></i>E-mail</strong>

            <p class="text-muted">{{$data->email_homecare}}</p>

            <hr>

            <strong><i class="fa fa-phone margin-r-5"></i>No Telepon</strong>

            <p class="text-muted">{{$data->no_telfon}}</p>

            <hr>

            <strong><i class="fa  fa-money margin-r-5"></i>Tarif</strong>

            <p>
              {{$data->tarif}}
            </p>
          </ul>
        </div>
        @endforeach
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-md-6">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Jadwal Homecare</h3>
        </div>
        <!-- /.box-header -->
        
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Hari Praktek</th>
              <th>Jam Buka</th>
              <th>Jam Tutup</th>
            </tr>
          </thead>
            @foreach($jadwal as $data)
            <tr>
              <td>{{$data->hari_praktek}}</td>
              <td>{{$data->start}}</td>
              <td>{{$data->end}}</td>
            </tr>
            @endforeach
          </table>
          <!-- /.box-body -->
        </div>
        
        <!-- /.box-body -->
      </div>
      @foreach($homecare as $data)
      <a href="{{url ('/formpesan/')}}/{{$data->id_homecare}}"> 
        <button type="" class="pull-right btn-lg btn-danger" id="">Pesan Homecare
          <i class="fa fa-arrow-circle-right"></i></button>
        </a>    
        @endforeach
      </section>

      @append