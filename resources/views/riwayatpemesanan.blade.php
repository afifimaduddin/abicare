@extends('halamanpasien')

@section('isi2')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Riwayat Pemesanan</h3>

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
                  <th>Nama Homecare</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Jam Pemesanan</th>
                  <th>Keluhan</th>
                  <th>Status Pemesanan</th>
                  <th>Hubungi</th>
                </tr>
                @foreach($pesanan as $data)
                <tr>
                  <td>{{$data->nama_homecare}}</td>
                  <td>{{$data->tanggal_pemesanan}}</td>
                  <td>{{$data->jam_pemesanan}}</td>
                  <td>{{$data->keluhan}}</td>
                  <td><span class="label label-success">Selesai</span></td>
                  <td><a href="https://api.whatsapp.com/send?phone={{$data->no_telfon}}&text=Layanan%20Homecare" class="btn btn-success" ><i class="fa fa-phone"></i></a></td>
                @endforeach  
                </tr>
                <!-- <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    @append