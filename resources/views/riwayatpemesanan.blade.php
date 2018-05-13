@extends('halamanpasien')

@section('isi2')

@if(session()->has('store'))
<script>
  $().ready(function (e) {
    swal({
      title: "Selamat!",
      text: "Pemesanan Telah Dilakukan",
      icon: "success",
      button: false,
      timer: 2000
    });
  });
</script>
@endif
<section class="content-header">
  <h1>
    Riwayat Pemesanan 
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Pasien</a></li>
    <li class="active">Riwayat Pemesanan</li>
  </ol>
</section>
<section class="content">
  <div class="box box-success">
    <div class="box-header">
      
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
                <span class="btn btn-sm btn-info" style="background: #FF0000; border-color: #fff">Proses</span>
                @elseif($data->status=='diterima')
                <span class="btn btn-sm btn-info" style="background: #FFD700; border-color: #fff">Pesanan Diterima</span>
                @else
                <span class="btn btn-sm btn-info" style="background: #32CD32; border-color: #fff">Selesai</span>
                @endif
              </td>
              <td><center><a target="_blank" href="https://web.whatsapp.com/send?phone=+62{{$data->no_telfon}}&text=Selamat%20Datang%20Di%20Layanan%20Abicare%20 :)" class="btn btn-success" ><i class="fa fa-whatsapp" style="font-size:32px"></i></a></center></td>
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