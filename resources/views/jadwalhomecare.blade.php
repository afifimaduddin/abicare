@extends('halamanperawat')

@section('isi3')

@if(session()->has('jadwal'))
      <script>
        $().ready(function (e) {
          swal({
            title: "Success!",
            text: "Jadwal berhasil ditambahkan",
            icon: "success",
            button: false,
            timer: 2000
          });
        });
      </script>
      @endif

    <section class="content">
      <div class="callout callout-info">
          <h4>Halo :)</h4>

          <p>Silahkan isi form dibawah untuk mengisi jadwal homecare</p>
        </div>

        @if (count($errors) > 0)
        <div class="callout callout-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif  

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Isi Jadwal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('jadwalhomecare.store') }}" method="POST">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                    <label for="inputnip">Hari Praktek</label>
                  <div class="col-md-12" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-md-5">
                    <select id="angkatanawal" name="hari_praktek" class="form-control required">
                      <option value="" disabled selected=""> <i>---Pilih Hari---</i></option>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jumat">Jumat</option>
                      <option value="Sabtu">Sabtu</option>
                      <option value="Minggu">Minggu</option>
                    </select>
                  </div>
                </div>
                </div>

                <div class="form-group">
                    <label for="inputnip">Jam Buka</label>
                  <div class="col-md-12" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-md-5">
                      <input type="time" name="jam_buka" class="form-control pull-right" id="reservation">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                    <label for="inputnip">Jam tutup</label>
                  <div class="col-md-12" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-md-5">
                      <input type="time" name="jam_tutup" class="form-control pull-right" id="reservation">
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="col-md-12"> 
                    <button type="submit" class="btn btn-danger pull-right">Tambah</button>
                  </a>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
            </div>
          <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Jadwal Homecare</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Hari Praktek</th>
                  <th>Jam Buka</th>
                  <th>Jam Tutup</th>
                </tr>
                @foreach($jadwalhomecare as $data)
                <tr>
                  <td>{{$data->hari_praktek}}</td>
                  <td>{{$data->start}}</td>
                  <td>{{$data->end}}</td>
                </tr>
                @endforeach
              </table>
            </div>
            <div class="box-footer">
                <div class="col-md-12"> 
                    <a href="{{url ('/formlayanan')}}" type="submit" class="btn btn-primary pull-right">Selesai</a>
                </div>
            </div>        
            <!-- /.box-body -->
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    @append
    <!-- /.content -->