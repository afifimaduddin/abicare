@extends('halamanadmin')

@section('isi')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Daftar Pesanan</h3>

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
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Nama Pasien</th>
              <th>Nama Homecare</th>
              <th>Jenis kelamin</th>
              <th>Tanggal Pesan</th>
              <th>Jam Pesan</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Zendry Ramdhani</td>
              <td>Alifia Homecare</td>
              <td>Laki-laki</td>
              <td>21 Desember 2017</td>
              <td>16.00 WIB</td>
              <td><span class="label label-success">Selesai</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Abdurrahman Trimanto</td>
              <td>Wounder Homecare</td>
              <td>Laki-laki</td>
              <td>9 Januari 2017</td>
              <td>19.00 WIB</td>
              <td><span class="label label-warning">Proses</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Shafira Fitrianissa</td>
              <td>Permata Homecare</td>
              <td>Perempuan</td>
              <td>7 Maret 2018</td>
              <td>10.00 WIB</td>
              <td><span class="label label-success">Proses</span></td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.row -->
  </section>
  @append
    <!-- /.content -->