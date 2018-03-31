@extends('halamanpasien')

@section('isi2')
    <section class="content">
      <div>
        <h4>Pesan Homecare</h4>
      </div>

      @if (count($errors) > 0)
        <div class="callout callout-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif  

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Pesan Sekarang</h3>
            </div>

          <form role="form" action="{{ route('formpesan.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="box-body">
              <!-- Date -->
                @foreach($homecare as $data)
                 <h3 class="widget-user-username">{{$data->nama_homecare}}</h3>
                 <input type="hidden" name="id_jenis_perawatan" value="{{$data->id_jenis_perawatan}}">
                @endforeach
              <div class="form-group">
                <label>Tanggal Pemesanan:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="tanggal_pemesanan" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date range -->
              <div class="form-group">
                <label>Jam Pemesanan:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="time" name="jam_pemesanan" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Keluhan pasien:</label>
                   <textarea class="form-control" name="keluhan" rows="3" placeholder="Apa keluhan yg anda alamai?"></textarea>
                </div>

              <div class="box-footer">
                <!-- <a href="{{url('/riwayatpemesanan')}}"> -->
                  <div class="col-md-6 col-md-offset-10">
                    <button type="submit" class="btn btn-primary">Selesai</button>
                  </div>
                <!-- </a> -->  
              </div>
              <!-- /.form group -->

            </div>
          </form>  
            <!-- /.box-body -->
          </div>
        
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Jadwal Homecare</h3>
              </div>
            <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>Hari Praktek</th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                  </tr>
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
      <!-- /.row -->
    </section>
    @append
    <!-- /.content -->