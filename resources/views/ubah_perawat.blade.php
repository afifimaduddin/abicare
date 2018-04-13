@extends('halamanperawat')

@section('isi3')
<section class="content-header">
  <h1>
   Ubah Detail Perawat
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Perawat</a></li>
    <li class="active">Ubah Detail Perawat</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 col-md-offset-3">
      <!-- general form elements -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Detail Perawat</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @foreach($ubahperawat as $data)
        <form role="form" action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PATCH">
          {{ csrf_field() }}
          {{method_field('PATCH')}}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Perawat</label>
              <input type="string" name="nama_perawat" class="form-control" id="exampleInputEmail1" placeholder="Nama" value="{{$data->nama_perawat}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                <option value="laki-laki" <?php if($data->jenis_kelamin=="Laki-laki"){echo "selected";} ?>>Laki-laki</option>
              <option value="perempuan" <?php if($data->jenis_kelamin=="Perempuan"){echo "selected";} ?>>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" value="{{$data->tanggal_lahir}}" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Pendidikan Terakhir</label>
              <select id="angkatanawal" name="jenjang" class="form-control required">
                    <option value="" disabled selected=""> <i>---Pilih Jenjang---</i></option>
                    <option <?php if($data->pendidikan_terakhir=="d1"){echo "selected";} ?> value="d1">D1</option>
                    <option <?php if($data->pendidikan_terakhir=="d2"){echo "selected";} ?> value="d2">D2</option>
                    <option <?php if($data->pendidikan_terakhir=="d3"){echo "selected";} ?> value="d3">D3</option>
                    <option <?php if($data->pendidikan_terakhir=="d4"){echo "selected";} ?> value="d4">D4</option>
                    <option <?php if($data->pendidikan_terakhir=="s1"){echo "selected";} ?> value="s1">S1</option>
                    <option <?php if($data->pendidikan_terakhir=="s2"){echo "selected";} ?> value="s2">S2</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jurusan</label>
              <input type="string" name="jurusan" class="form-control" id="exampleInputPassword1" placeholder="Jurusan" value="{{$data->jurusan}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">NIRA (Nomor Induk Registrasi Anggota)</label>
              <input type="string" name="nomor" class="form-control" id="exampleInputPassword1" placeholder="NIRA" value="{{$data->NIRA}}">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto</label>
              <input type="file" id="exampleInputFile" name="foto_parawat">

              <p class="help-block">Unggah foto perawat.</p>
            </div>
          </div>
          <!-- /.box-body -->
         @endforeach
          <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">Ubah</button>
          </div>
        </form>
         
      </div>
    </section>
    @append
    <!-- /.content -->