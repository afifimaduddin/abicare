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
       <div class="callout callout-success">
    <h4>Verifikasi Akun</h4>

    <p>Pastikan setelah verifikasi akun mengirimkan pemberitahuan melalui email user terkait </p>
  </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nama Pengguna</th>
            <th>Tangal lahir</th>
            <th>Jenis Kelamin</th>
            <th>E-Mail</th>
            <th>No telefon</th>
            <th>Roles</th>
            <th>Status</th>
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
            <td>+62{{$data->no_telfon}}</td>
            <td>
              @if($data->id_roles=='1')
              <?php echo 'Pasien' ?> 
              @else
              <?php echo 'Perawat' ?>
              @endif
            </td>
            <td>
              @if($data->status_users=='nonaktif')
                <a href="{{url('/ubahstatususers')}}/{{$data->id}}" class="btn btn-sm btn-info" style="background: #FF0000; border-color: #fff">Nonaktif</a>
                @else
                <span class="btn btn-sm btn-info" style="background: #32CD32; border-color: #fff">Aktif</span>
                <a class="btn btn-sm btn-info" style="background: #1E90FF; border-color: #fff" href="https://gmail.com" target="_blank">kirim Pemberitahuan</a>
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