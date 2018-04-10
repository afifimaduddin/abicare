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
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Riwayat Pemesanan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>Nama Homecare</th>
              <th>Tanggal Pemesanan</th>
              <th>Jam Pemesanan</th>
              <th>Keluhan</th>
              <th>Status Pemesanan</th>
              <th>Hubungi Homecare</th>
              </tr>
            </thead>
            <tbody>
            @foreach($pesanan as $data)
            <tr>
              <td>{{$data->nama_homecare}}</td>
              <td>{{$data->tanggal_pemesanan}}</td>
              <td>{{$data->jam_pemesanan}}</td>
              <td>{{$data->keluhan}}</td>
              <td>
                @if($data->status=='proses')
                <span class="label label-danger">Proses</span>
                @elseif($data->status=='diterima')
                <span class="label label-warning">Pesanan Diterima</span>
                @else
                <span class="label label-success">Selesai</span>
                @endif
              </td>
              <td><a target="_blank" href="https://api.whatsapp.com/send?phone={{$data->no_telfon}}&text=Selamat%20Datang%20Di%20Layanan%20Abicare%20 :)" class="btn btn-success" ><i class="fa fa-phone"></i></a></td>
            </tr>
              @endforeach  
          </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.row -->
  </section>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

  @append