@extends('halamanadmin')

@section('isi')

<section class="content-header">
  <h1>
   
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Daftar Pemesanan</li>
  </ol>
</section>
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Pemesanan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nama Homecare</th>
            <th>Nama Perawat</th>
            <th>Nama Pasien</th>
            <th>Tanggal Pemesanan</th>
            <th>Jam Pemesanan</th>
            <th>Keluhan</th>
            <th>Status Pemesanan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pesan as $data)
          <tr>
            <td>{{$data->nama_homecare}}</td>
            <td><a href="{{url('admin_pemesanan_perawat')}}/{{$data->id_homecare}}" class="btn btn-primary">Lihat Perawat</a></td>
            <td>{{$data->name}}</td>
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
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.box -->
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