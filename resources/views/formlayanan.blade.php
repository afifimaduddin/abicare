  @extends('halamanperawat')

  @section('isi3')


  <?php
  $id_homecare="nggak ada";
  $tampilkaninfo = "none";
  $tampilkanform = "block";
  ?>
      <!-- <?php
          // echo "data sebelum $id_homecare";    
      ?> -->

      @foreach($homecare as $data)
      <?php
      $id_homecare=$data->id_homecare;
      $tampilkaninfo = "block";
      $tampilkanform = "none";
      ?>


      @endforeach

      @if(session()->has('update'))
      <script>
        $().ready(function (e) {
          swal({
            title: "Success!",
            text: "Detail Homecare berhasil diubah :)",
            icon: "success",
            button: false,
            timer: 2000
          });
        });
      </script>
      @endif

      @if(session()->has('jenis'))
      <script>
        $().ready(function (e) {
          swal({
            title: "Success!",
            text: "Identitas berhasil diubah :)",
            icon: "success",
            button: false,
            timer: 2000
          });
        });
      </script>
      @endif

      @if(session()->has('jadwal'))
      <script>
        $().ready(function (e) {
          swal({
            title: "Success!",
            text: "Jadwal berhasil diubah :)",
            icon: "success",
            button: false,
            timer: 2000
          });
        });
      </script>
      @endif
      <br>
        <!-- <?php
          //echo $id_homecare;    
        ?>
      -->
      <section style="display:<?php echo $tampilkaninfo ?>" class="content">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              @foreach($homecare as $data)
              <div class="widget-user-header bg-green">
                <div class="widget-user-image">
                  <img class="img-circle" src="{{url('storage/asset/dist/img/')}}/{{$data->foto_homecare}}" alt="User Avatar" onerror="this.src='{{url('asset/dist/img/avatar.png')}}'">
                </div>
                <!-- /.widget-user-image -->
                
                <h3 class="widget-user-username">{{$data->nama_homecare}}</h3>
                <h5 class="widget-user-desc">{{$data->alamat_homecare}}</h5>
                <h5 class="widget-user-desc" value="{{$data->id_roles_jenis}}">{{$data->id_roles_jenis}}</h5>
              </div>
              <div class="widget-user-image">
                <div class="box-footer">
                  <div class="col-md-2 col-md-offset-10">
                    <a href="#" class="btn btn-primary btn-block " data-toggle="modal" data-target="#modal-defaul" ><b>Ubah</b></a>
                  </div>
                </div>    
              </div>
            </div>
          </div>
        </div>     
        @endforeach
        
        @foreach($detailhomecare as $data)  
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="box box-success">
              <div class="box-body box-profile">
                <ul class="list-group list-group-unbordered">
                  <strong><i class="fa fa-book margin-r-5"></i>Deskripsi Homecare</strong>

                  <p class="text-muted">{{$data->deskripsi_homecare}}</p>

                  <hr>

                  <strong><i class="fa fa-envelope-square margin-r-5"></i>E-mail</strong>

                  <p class="text-muted">{{$data->email_homecare}}</p>

                  <hr>

                  <strong><i class="fa fa-phone margin-r-5"></i>No Telepon</strong>

                  <p class="text-muted">{{$data->no_telfon}}</p>

                  <hr>

                  <strong><i class="fa  fa-money margin-r-5"></i>Tarif</strong>

                  <p>
                    {{$data->tarif}}
                  </p>
                </ul>

                <div class="box-footer">
                  <div class="col-md-2 col-md-offset-10">  
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><b>Ubah</b></a>
                  </div>
                </div>  
              </div>
              @endforeach
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Jadwal Homecare</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Hari Praktek</th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  @foreach($jadwalhomecare as $data)
                  <tr>
                    <td>{{$data->hari_praktek}}</td>
                    <td>{{$data->start}}</td>
                    <td>{{$data->end}}</td>
                    <td>
                      <form method="delete" action="{{ route('jadwalhomecare.destroy', $data->id_jadwal_homecare) }}">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#modal-jadwal{{$data->id_jadwal_homecare}}">Ubah</a>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  <div class="modal fade" id="modal-jadwal{{$data->id_jadwal_homecare}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Ubah Jadwal Homecare</h4>
                          </div>
                          <div class="modal-body">
                            <form role="form" action="{{ route('jadwalhomecare.update', $data->id_jadwal_homecare) }}" method="POST">
                              <input type="hidden" name="_method" value="PATCH">
                              {{ csrf_field() }}
                              {{method_field('PATCH')}}
                              <div class="box-body">

                                <div class="form-group">
                                  <label for="inputnip" class="col-md-4 control-label" style="padding-top: 5px; padding-bottom: 5px;">Hari Praktek</label>

                                  <div class="col-md-5">
                                    <select id="angkatanawal" name="hari_praktek" class="form-control required">
                                      <option value="" disabled selected=""> <i>---Pilih Hari---</i></option>
                                      <option <?php if($data->hari_praktek=="Senin"){echo "selected";} ?> value="Senin">Senin</option>
                                      <option <?php if($data->hari_praktek=="Selasa"){echo "selected";} ?> value="Selasa">Selasa</option>
                                      <option <?php if($data->hari_praktek=="Rabu"){echo "selected";} ?> value="Rabu">Rabu</option>
                                      <option <?php if($data->hari_praktek=="Kamis"){echo "selected";} ?> value="Kamis">Kamis</option>
                                      <option <?php if($data->hari_praktek=="Jumat"){echo "selected";} ?> value="Jumat">Jumat</option>
                                      <option <?php if($data->hari_praktek=="Sabtu"){echo "selected";} ?> value="Sabtu">Sabtu</option>
                                      <option <?php if($data->hari_praktek=="Minggu"){echo "selected";} ?> value="Minggu">Minggu</option>
                                    </select>
                                  </div>
                                </div>
                                <br>
                                <div class="form-group">
                                  <label for="inputnip" class="col-md-4 control-label" style="padding-top: 5px; padding-bottom: 5px;">Jam Buka</label>
                                  <div class="col-md-5">
                                    <input value="{{$data->start}}" type="time" name="jam_buka" class="form-control pull-right" id="reservation">
                                  </div>
                                </div>
                                <br>
                                <div class="form-group">
                                  <label for="inputnip" class="col-md-4 control-label" style="padding-top: 5px; padding-bottom: 5px;">Jam tutup</label>
                                  <div class="col-md-5">
                                    <input value="{{$data->end}}" type="time" name="jam_tutup" class="form-control pull-right" id="reservation">
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                            </div>
                          </div>
                        </form>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    @endforeach
                  </table>
                </div>
                <div class="box-footer">
                  <div class="col-md-12"> 
                    <a href="{{url ('/jadwalhomecare')}}" type="submit" class="btn btn-primary pull-left">Tambah</a>
                    
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box-body -->
            </div>
            
            <!-- /.box-body -->
          </section>
          <section class="content" style="display:<?php echo $tampilkanform ?>" >
            <div class="callout callout-success">
              <h4>Selamat Datang di Abicare Indonesia :)</h4>

              <p>Silahkan lengkapi form dibawah untuk menambah identitas homecare.</p>
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
              <div class="col-md-6 col-md-offset-3" >
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Layanan Homecare</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form" action="{{ route('formlayanan.store') }}" method="POST" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   <div class="box-body">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">  
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Homecare</label>
                        <input type="string" name="nama_homecare" class="form-control" id="exampleInputPassword1" placeholder="Nama Homecare">

                        @if ($errors->has('nama_homecare'))
                        <span class="help-block">
                          <strong>{{ $errors->first('nama_homecare') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">    
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Layanan</label>
                        <select class="form-control" name="jenis_layanan">
                          <option value="" disabled selected=""> <i>---Jenis Layanan---</i></option>
                          @foreach($role as $data)

                          <option value="{{ $data->id_roles_jenis }}">{{ $data->nama_perawatan }}</option>
                          
                          @endforeach
                        </select>
                        @if ($errors->has('nama_homecare'))
                        <span class="help-block">
                          <strong>{{ $errors->first('nama_homecare') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>    

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <div class="form-group">
                        <label for="exampleInputFile">Foto Homecare</label>
                        <input type="file" class="form-control" id="exampleInputFile" name="foto">

                        <p class="help-block">Maksimal file 1 MB</p>

                        @if ($errors->has('foto'))
                        <span class="help-block">
                          <strong>{{ $errors->first('foto') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div> 

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Alamat Homecare</label>
                        <textarea class="form-control" name="alamat_homecare" rows="3" placeholder="Alamat Homecare"></textarea>

                        @if ($errors->has('alamat_homecare'))
                        <span class="help-block">
                          <strong>{{ $errors->first('alamat_homecare') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <!-- /.box-body --> 
                    <div class="box-footer"> 
                      <div class="col-md-6 col-md-offset-10">
                        <!-- <a href="{{url ('/detailhomecare')}}">  --> 
                          <button type="submit" class="btn btn-primary">Selesai</button>  
                          <!-- </a> -->
                        </div>  
                      </div>
                    </a>  
                  </form>
                </div>
                <!-- /.box -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
        <div class="modal fade" id="modal-defaul">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Identitas Homecare</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body">
                    @foreach($homecare as $data)
                    <form role="form" action="{{route('formlayanan.update',$data->id_homecare)}}" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PATCH">
                      {{ csrf_field() }}
                      {{method_field('PATCH')}}
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">  
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Homecare</label>
                          <div>
                            <input type="string" name="nama_homecare" class="form-control" id="exampleInputPassword1" placeholder="Nama Homecare" value="{{$data->nama_homecare}}">

                          </div>
                          @if ($errors->has('nama_homecare'))
                          <span class="help-block">
                            <strong>{{ $errors->first('nama_homecare') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>
                      
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">    
                        <div class="form-group">
                          <label for="exampleInputPassword1">Jenis Layanan</label>
                          <select class="form-control" name="jenis_layanan">
                            <option value="" disabled selected=""> <i>---Jenis Layanan---</i></option>
                            @foreach($role as $record)

                            <option value="{{ $record->id_roles_jenis }}" <?php if($record->id_roles_jenis==$data->id_roles_jenis){echo "selected";} ?>>{{ $record->nama_perawatan }}</option>
                            
                            @endforeach
                          </select>
                          @if ($errors->has('nama_homecare'))
                          <span class="help-block">
                            <strong>{{ $errors->first('nama_homecare') }}</strong>
                          </span>
                          @endif
                        </div>
                      </div>    

                      <div class="form-group">
                        <label for="exampleInputFile">Foto Homecare</label>
                        <input class="form-control" type="file" id="exampleInputFile" name="foto">
                      </div>

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Alamat Homecare</label>
                          <div>
                           <textarea class="form-control" name="alamat_homecare" rows="3" placeholder="Alamat Homecare">{{$data->alamat_homecare}}</textarea>
                         </div>
                         @if ($errors->has('alamat_homecare'))
                         <span class="help-block">
                          <strong>{{ $errors->first('alamat_homecare') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    @endforeach
                    <!-- /.box-body --> 
                  </a>  
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                  <input type="submit" class="btn btn-primary" value="Simpan" >
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- modal edit detail homecare -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Ubah Detail Homecare</h4>
            </div>
            <div class="modal-body">
              @foreach($detailhomecare as $data)
              <form role="form" action="{{ route('detailhomecare.update',$data->id_detail_perawatan) }}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Homecare</label>
                    <textarea class="form-control" name="deskripsi_homecare" rows="3" placeholder="Isi deskripsi homecare">{{$data->deskripsi_homecare}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" name="email_homecare" id="exampleInputEmail1" placeholder="Email Homecare" value="{{$data->email_homecare}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Telepon</label>
                    <input type="string" class="form-control" name="no_telfon" id="exampleInputPassword1" placeholder="Nomor Telepon" value="{{$data->no_telfon}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tarif</label>
                    <input type="string" class="form-control" name="tarif" id="exampleInputPassword1" placeholder="Rp.-" value="{{$data->tarif}}">
                  </div>
                </div>
                @endforeach
                <!-- /.box-body -->
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <input type="submit" class="btn btn-primary" value="Simpan">
              </div>
            </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
      
    </section>
    @append
    <!-- /.content -->