@extends('halamanpasien')

@section('isi2')
<section class="content-header">
  <h1>

    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Pilih Layanan</a></li>
    <li class="active">Daftar Homecare</li>
  </ol>
</section>
<section class="content">
 <!--  -->
  <p></p>
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Daftar Homecare</h3>
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
            @foreach($homecare as $data)
            <tr>
              <td>{{$data->id_homecare}}</td>
              <td><img class="profile-user-img img-responsive img-circle" src="{{url('storage/asset/dist/img/')}}/{{$data->foto_homecare}}" alt="User Avatar" onerror="this.src='{{url('asset/dist/img/iconhomecare.png')}}'" alt="User profile picture"></td>
              <td>{{$data->nama_homecare}}</td>
              <td>{{$data->alamat_homecare}}</td>
              <td>
                <a href="{{url ('/lihatdetail/')}}/{{$data->id_homecare}}" class="btn btn-primary" >Lihat detail</a></a>
              </td>
            </tr>
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