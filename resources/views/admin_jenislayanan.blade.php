@extends('halamanadmin')

@section('isi')

@if(session()->has('update'))
<script>
  $().ready(function (e) {
    swal({
      title: "Success!",
      text: "Nama Perawatan Berhasil Diubah :)",
      icon: "success",
      button: false,
      timer: 2000
    });
  });
</script>
@endif

@if(session()->has('store'))
<script>
  $().ready(function (e) {
    swal({
      title: "Success!",
      text: "Nama Perawatan Berhasil Ditambah :)",
      icon: "success",
      button: false,
      timer: 2000
    });
  });
</script>
@endif

<section class="content-header">
  <a class="btn btn-primary fa fa-plus" data-toggle="" data-target=""> Tambah</a>
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Jenis Layanan</li>
  </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Jenis Layanan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Jenis layanan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($jenis as $data)
          <tr>
            <td>{{$data->id_perawatan}}</td>
            <td>{{$data->nama_perawatan}}</td>
            <td>
              <form method="" action="">
                <a class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#modal-default"> Ubah</a>
              </form>
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
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Default Modal</h4>
        
          <form role="form" action="{{ route('admin_jenislayanan.update',$data->id_perawatan) }}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            {{ csrf_field() }}
            {{method_field('PATCH')}}

            <div class="form-group">
              <label>Jenis Layanan</label>
              <input type="string" class="form-control" name="jenis_layanan" id="exampleInputEmail1" placeholder="Jenis Layanan" value="{{$data->nama_perawatan}}">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
         
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->s

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