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
            <th>Jenis Kelamin</th>
            <th>E-Mail</th>
            <th>Roles</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.0
            </td>
            <td>Win 95+</td>
            <td>5</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.5
            </td>
            <td>Win 95+</td>
            <td>5.5</td>
            <td>A</td>
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