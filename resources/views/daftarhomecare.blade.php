@extends('halamanpasien')

@section('isi2')
<section class="content">
  <div class="row">  
    <td>
      <div class="col-md-1"><button type="button" class="btn btn-block btn-success btn-sm">Kembali</button></div> 
    </td>
  </div>  
  <p></p>
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Daftar Homecare</h3>

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
          <table id="example1" class="table table-hover">
            <tr>
              <th>No</th>
              <th>Foto</th>
              <th>Nama Homecare</th>
              <th>Alamat Homecare</th>
              <th>Aksi</th>
            </tr>
            @foreach($homecare as $data)
            <tr>
              <td>{{$data->id_jenis_perawatan}}</td>
              <td><img class="profile-user-img img-responsive img-circle" src="{{url('storage/asset/dist/img/')}}/{{$data->foto_homecare}}" alt="User Avatar" onerror="this.src='{{url('asset/dist/img/avatar.png')}}'" alt="User profile picture"></td>
              <td>{{$data->nama_homecare}}</td>
              <td>{{$data->alamat_homecare}}</td>
              <td>
                <a href="{{url ('/lihatdetail/')}}/{{$data->id_jenis_perawatan}}" class="btn btn-primary" >Lihat detail</a></a>
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
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  </script>
  @append
    <!-- /.content -->