@extends('halamanpasien')

@section('isi2')

@if(session()->has('store'))
<script>
  $().ready(function (e) {
    swal({
      title: "Selamat!",
      text: "Pemesanan Telah Dilakukan :)",
      icon: "success",
      button: false,
      timer: 2000
    });
  });
</script>
@endif

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Riwayat Pemesanan</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Nama Homecare</th>
              <th>Tanggal Pemesanan</th>
              <th>Jam Pemesanan</th>
              <th>Keluhan</th>
              <th>Status Pemesanan</th>
              <th>Hubungi Homecare</th>
            </tr>
            @foreach($pesanan as $data)
            <tr>
              <td>{{$data->nama_homecare}}</td>
              <td>{{$data->tanggal_pemesanan}}</td>
              <td>{{$data->jam_pemesanan}}</td>
              <td>{{$data->keluhan}}</td>
              <td>
                @if($data->status=='proses')
                <span class="label label-danger">Proses</span>
                @else
                <span class="label label-success">Selesai</span>
                @endif
              </td>
              <td><a target="_blank" href="https://api.whatsapp.com/send?phone={{$data->no_telfon}}&text=Selamat%20Datang%20Di%20Layanan%20Abicare%20 :)" class="btn btn-success" ><i class="fa fa-phone"></i></a></td>
              @endforeach  
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.row -->
  </section>
  @append