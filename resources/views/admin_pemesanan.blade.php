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
            <th>Nama Pengguna</th>
            <th>Tanggal Pemesanan</th>
            <th>Jam Pemesanan</th>
            <th>Keluhan</th>
            <th>Status Pemesanan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Shafira Homecare</td>
            <td>Shafira Fitrianissa
            </td>
            <td>09/05/2018</td>
            <td> 10.00</td>
            <td>Sakit kepala dan migrain</td>
            <td>Selesai</td>
          </tr>
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