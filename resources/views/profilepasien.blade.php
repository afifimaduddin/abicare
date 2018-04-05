@extends('halamanpasien')

@section('isi2')

@if(session()->has('update'))
<script>
  $().ready(function (e) {
    swal({
      title: "Success!",
      text: "Profil berhasil diubah :)",
      icon: "success",
      button: false,
      timer: 2000
    });
  });
</script>
@endif

<section class="content-header">
  <h1>
    Profile
    <small>Pasien</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li class="active">Profile</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-5 col-xs-6">

      <!-- Profile Image -->
      <div class="box box-success">
        <div class="box-body box-profile">
          @foreach($profil as $data)
          <img class="profile-user-img img-responsive img-circle" src="{{url('storage/asset/dist/img/')}}/{{$data->foto_pasien}}" alt="User Avatar" onerror="this.src='{{url('asset/dist/img/avatar.png')}}'" alt="User profile picture">

          <h3 class="profile-username text-center">{{$data->name}}</h3>

          <p class="text-muted text-center">Pasien</p>

          <ul class="list-group list-group-unbordered">
            <strong><i class="fa fa-envelope-square margin-r-5"></i>E-mail</strong>

            <p class="text-muted">
              {{$data->email}}
            </p>

            <hr>

            <strong><i class="fa  fa-calendar-times-o margin-r-5"></i>Tanggal Lahir</strong>

            <p>
              {{$data->tanggal_lahir}}
            </p>

            <hr>

            <strong><i class="fa fa-user margin-r-5"></i>Jenis Kelamin</strong>

            <p class="text-muted">

             @if($data->jenis_kelamin=='male')
             <?php echo 'Laki-laki' ?> 
             @else
             <?php echo 'Perempuan' ?>
             @endif
           </p>

         </ul>

         <hr>

         <strong><i class="fa  fa-calendar-times-o margin-r-5"></i>No Telfon</strong>

         <p>
          {{$data->no_telfon_pasien}}
        </p>

        <div class="box-footer">
          <div class="col-md-12"> 
            <button type="submit" class="btn btn-primary pull-right" onclick="myFunction()">Ubah Profil</button>
          </a>
        </div>
      </div>
    </div>
    @endforeach
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>

<div class="col-md-6" style="display:none" id="editprofil">
  <!-- general form elements -->
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Ubah Profile</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @foreach($profil as $data)
    <form role="form" action="{{ route('profilepasien.update',$data->id) }}" method="POST">
      <input type="hidden" name="_method" value="PATCH">
      {{ csrf_field() }}
      {{method_field('PATCH')}}
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputFile">Foto Profil</label>
          <input class="form-control" type="file" id="exampleInputFile" name="foto">

          <p class="help-block">Maksimal file 1 MB</p>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="string" class="form-control" name="nama_pasien" id="exampleInputEmail1" placeholder="Nama" value="{{$data->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="email_pasien" id="exampleInputEmail1" placeholder="Email" value="{{$data->email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" id="exampleInputPassword1" placeholder="Nomor Telepon" value="{{$data->tanggal_lahir}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
              <option value="male" <?php if($data->jenis_kelamin=="Laki-laki"){echo "selected";} ?>>Laki-laki</option>
              <option value="female" <?php if($data->jenis_kelamin=="Perempuan"){echo "selected";} ?>>Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">No Telfon</label>
            <input type="string" class="form-control" name="no_telfon" id="exampleInputPassword1" placeholder="Nomor Telepon" value="{{$data->no_telfon_pasien}}">
          </div>
        </div>
        @endforeach
        <!-- /.box-body -->

        <div class="box-footer">
          <div class="col-md-6 col-md-offset-10"> 
            <button type="submit" class="btn btn-primary">Selesai</button>
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
<!-- /.col -->
</section>

<script type="text/javascript">
 function myFunction() {
  var x = document.getElementById("editprofil");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


<!-- /.content -->

@endsection
