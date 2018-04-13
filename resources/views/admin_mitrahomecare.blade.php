@extends('halamanadmin')

@section('isi')

<section class="content-header">
      <h1>
       
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Mitra Homecare</li>
      </ol>
    </section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Mitra Homecare</h3>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Foto</th>
              <th>Nama Homecare</th>
              <th>Alamat Homecare</th>
              <th>Aksi</th>
            </tr>
          </thead>
            @foreach($mitra as $data)
            <tr>
              <td>{{$data->id_homecare}}</td>
              <td><img class="profile-user-img img-responsive img-circle" src="{{url('storage/asset/dist/img/')}}/{{$data->foto_homecare}}" alt="User Avatar" onerror="this.src='{{url('asset/dist/img/avatar.png')}}'" alt="User profile picture"></td>
              <td>{{$data->nama_homecare}}</td>
              <td>{{$data->alamat_homecare}}</td>
              <td>
                <a href="{{url ('/detail_mitrahomecare/')}}/{{$data->id_homecare}}" class="btn btn-primary" >Lihat detail</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
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