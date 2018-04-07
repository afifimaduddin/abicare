@extends('halamanadmin')

@section('isi')

<section class="content-header">
  <h1>

    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Daftar Pengguna</li>
  </ol>
</section>
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Pengguna</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nama Pengguna</th>
            <th>Tangal lahir</th>
            <th>Jenis Kelamin</th>
            <th>E-Mail</th>
            <th>No telefon</th>
            <th>Roles</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($daftarpengguna as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->tanggal_lahir}}</td>
            <td>
              @if($data->jenis_kelamin=='male')
              <?php echo 'Laki-laki' ?> 
              @else
              <?php echo 'Perempuan' ?>
              @endif
            </td>
            <td>{{$data->email}}</td>
            <td>{{$data->no_telfon_pasien}}</td>
            <td>
              @if($data->id_roles=='1')
              <?php echo 'Pasien' ?> 
              @else
              <?php echo 'Perawat' ?>
              @endif
            </td>
            <td>X</td>
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