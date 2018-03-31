@extends('halamanadmin')

@section('isi')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Users</h3>

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
                  <th>Nama</th>
                  <th>Jenis kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>E-mail</th>
                  <th>Jenis kelamin</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Zendry Ramdhani</td>
                  <td>Laki-laki</td>
                  <td>21 Desember 1997</td>
                  <td>Zendry.ramdhani@gmail.com</td>
                  <td>Pasien</td>
                  <td><span class="label label-success">Aktif</span></td>
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