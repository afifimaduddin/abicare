@extends('halamanperawat')

@section('isi3')
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
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
                  <th>Nama Pasien</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Jam Pemesanan</th>
                  <th>Keluhan</th>
                  <th>Status Pemesanan</th>
                  <th>Hubungi Pasien</th>
                </tr>
                @foreach($pesanan as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->tanggal_pemesanan}}</td>
                  <td>{{$data->jam_pemesanan}}</td>
                  <td>{{$data->keluhan}}</td>
                  <td>
                    @if($data->status=='proses')
                    <a href="{{url('/ubahstatus')}}/{{$data->id_pemesanan}}"><span class="label label-danger">Proses</span></a>
                    @else
                    <span class="label label-success">Selesai</span>
                    @endif
                  </td>
                  <td><a target="_blank" href="https://api.whatsapp.com/send?phone={{$data->no_telfon_pasien}}&text=Layanan%20Homecare" class="btn btn-success" ><i class="fa fa-phone"></i></a></td>
                @endforeach  
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