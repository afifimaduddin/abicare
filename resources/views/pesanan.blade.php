@extends('halamanperawat')

@section('isi3')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Daftar Pemesanan</h3>

          <div class="box-tools"></div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama Pasien</th>
              <th>Tanggal Pemesanan</th>
              <th>Jam Pemesanan</th>
              <th>Keluhan</th>
              <th>Status Pemesanan</th>
              <th>Hubungi Pasien</th>
            </tr>
          </thead>
            @foreach($pesanan as $data)
            <tr>
              <td>{{$data->name}}</td>
              <td>{{$data->tanggal_pemesanan}}</td>
              <td>{{$data->jam_pemesanan}}</td>
              <td>{{$data->keluhan}}</td>
              <td>
                @if($data->status=='proses')
                <a href="{{url('/ubahstatus')}}/{{$data->id_pemesanan}}"><span class="btn btn-sm btn-info" style="background: #FF0000; border-color: #fff">Proses</span></a>
                @elseif($data->status=='diterima')
                <a href="{{url('/ubahstatusditerima')}}/{{$data->id_pemesanan}}"><span class="btn btn-sm btn-info" style="background: #FFD700; border-color: #fff">Pesanan Diterima</span></a>
                @else
                <span class="btn btn-sm btn-info" style="background: #32CD32; border-color: #fff">Selesai</span>
                @endif
              </td>
              <td><center><a target="_blank" href="https://web.whatsapp.com/send?phone=+62{{$data->no_telfon}}&text=Layanan%20Homecare" class="btn btn-success" ><i class="fa fa-whatsapp" style="font-size:32px"></i></a></center></td>
              @endforeach  
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
    <!-- /.content -->