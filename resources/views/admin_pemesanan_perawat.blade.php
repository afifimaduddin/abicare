@extends('halamanadmin')

@section('isi')

<section class="content-header">
  <h1>
   
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Daftar Perawat</li>
  </ol>
</section>
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Perawat</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Foto Perawat</th>
            <th>Nama Perawat</th>
            <th>Jenis Kelamin</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tambahperawat as $data)
          <tr>
            <td><img class="profile-user-img img-responsive img-circle" src="{{url('storage/asset/dist/img/')}}/{{$data->foto_perawat}}" alt="User Avatar" onerror="this.src='{{url('asset/dist/img/avatar.png')}}'" alt="User profile picture"></td>
            <td>{{$data->nama_perawat}}</td>
            <td>{{$data->jenis_kelamin}}</td>
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