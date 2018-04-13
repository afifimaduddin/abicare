@extends('halamanperawat')

@section('isi3')
<section class="content-header">
  <h1>
    <a class="btn btn-primary" href="{{url('/tambahperawat')}}">Tambah Perawat</a> 
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Perawat</a></li>
    <li class="active">Perawat Tersedia</li>
  </ol>
</section>
<section class="content">
  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Perawat Tersedia</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>Foto Perawat</th>
              <th>Nama Perawat</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Pendidikan terakhir</th>
              <th>Jurusan</th>
              <th>NIRA</th>
              <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach($tambahperawat as $data)
            <tr>
              <td><img class="profile-user-img img-responsive img-circle" src="{{url('storage/asset/dist/img/')}}/{{$data->foto_perawat}}" alt="User Avatar" onerror="this.src='{{url('asset/dist/img/avatar.png')}}'" alt="User profile picture"></td>
              <td>{{$data->nama_perawat}}</td>
              <td>{{$data->jenis_kelamin}}</td>
              <td>{{$data->tanggal_lahir}}</td>
              <td>{{$data->pendidikan_terakhir}}</td>
              <td>{{$data->jurusan}}</td>
              <td>{{$data->NIRA}}</td>
              <th><a href="{{url ('/ubah_perawat/')}}/{{$data->id_detail_perawat}}" class="btn btn-primary">Ubah</a></th>
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