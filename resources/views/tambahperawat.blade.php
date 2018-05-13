@extends('halamanperawat')
@section('isi3')

@if(session()->has('tambahperawat'))
<script>
  $().ready(function (e) {
    swal({
      title: "Success!",
      text: "Identitas berhasil ditambahkan :)",
      icon: "success",
      button: false,
      timer: 2000
    });
  });
</script>
@endif

<section class="content-header">
  <h1>
    <small><a href="{{url('perawattersedia')}}">Kembali</a></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Perawat</a></li>
    <li class="active">kembali</li>
  </ol>
</section>

@if (count($errors) > 0)
  <div class="callout callout-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 col-md-offset-3">
      <!-- general form elements -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Perawat</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('tambahperawat.store') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group"
              <label for="exampleInputEmail1">Nama Perawat</label>
              <input type="string" name="nama_perawat" class="form-control" id="exampleInputEmail1" placeholder="Nama">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Pendidikan Terakhir</label>
              <select id="angkatanawal" name="jenjang" class="form-control required">
                    <option value="" disabled selected=""> <i>---Pilih Jenjang---</i></option>
                    <option value="d1">D1</option>
                    <option value="d2">D2</option>
                    <option value="d3">D3</option>
                    <option value="d4">D4</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jurusan</label>
              <input type="string" name="jurusan" class="form-control" id="exampleInputPassword1" placeholder="Jurusan">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">SIPP/STR</label>
              <input type="string" name="nomor" class="form-control" id="exampleInputPassword1" placeholder="SIPP/STR">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto</label>
              <input type="file" id="exampleInputFile" name="foto_parawat">

              <p class="help-block">Example block-level help text here.</p>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right" >Tambahkan</button>
          </div>
        </form>
      </div>
    </section>
    @append
    <!-- /.content -->