@extends('halamanperawat')

@section('isi3')

@if(session()->has('identitas'))
<script>
  $().ready(function (e) {
    swal({
      title: "Success!",
      text: "Identitas berhasil ditambahkan",
      icon: "success",
      button: false,
      timer: 3000
    });
  });
</script>
@endif

<section class="content">
  <div class="callout callout-success">
    <h4></h4>

    <p>Silahkan isi form dibawah untuk mengisi detail homecare</p>
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
    <div class="col-md-6 col-md-offset-3">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Homecare</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('detailhomecare.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputPassword1">Deskripsi Homecare</label>
              <textarea class="form-control" name="deskripsi_homecare" rows="3" placeholder="Isi deskripsi singkat homecare"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" name="email_homecare" id="exampleInputEmail1" placeholder="Email Homecare">
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputPassword1">Nomor Telepon</label>
              <input type="string" class="form-control" name="no_telfon" id="exampleInputPassword1" placeholder="+62">
            </div> -->
            <div class="form-group">
            <label for="exampleInputPassword1">No Telfon</label>
            <div class="input-group">
                <span class="input-group-addon">+62</span>
                <input type="number" name="no_telfon" class="form-control" placeholder="821xxx" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tarif</label>
              <input type="string" class="form-control" name="tarif" id="exampleInputPassword1" placeholder="Rp.-">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <div class="col-md-6 col-md-offset-10">
              <a href="{{url ('/pesanan')}}"> 
                <button type="submit" class="btn btn-primary">Selesai</button>
              </a>
            </div>
          </div>
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
</section>
@append
    <!-- /.content -->