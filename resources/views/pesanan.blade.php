@extends('halamanperawat')

@section('isi3')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pemesanan</h3>

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
                  <th>Tanggal Pemesanan</th>
                  <th>Jam Pemesanan</th>
                  <th>Status Pemesanan</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Zendry Ramdhani</td>
                  <td>27-2-2018</td>
                  <td>15.00 WIB</td>
                  <td><span class="label label-success">Selesai</span></td>
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