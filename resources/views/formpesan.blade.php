@extends('halamanpasien')

@section('isi2')

@if(session()->has('error'))
<script>
  $().ready(function (e) {
    swal({
      title: "Maaf!",
      text: "Jadwal Homecare Tidak Tersedia",
      icon: "warning",
      button: false,
      timer: 2000
    });
  });
</script>
@endif

<script>
  $(function () {

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })

</script>

<section class="content">
  <div>
    <h4>Pesan Homecare</h4>
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
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Silahkan Pesan Sesuai Jadwal Homecare :)</h3>
        </div>

        <form role="form" action="{{ route('formpesan.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="box-body">
            <!-- Date -->
            @foreach($homecare as $data)
            <h3 class="widget-user-username">{{$data->nama_homecare}}</h3>
            <input type="hidden" name="id_jenis_perawatan" value="{{$data->id_jenis_perawatan}}">
            @endforeach
            <div class="form-group">
              <label>Tanggal Pemesanan:</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="tanggal_pemesanan" class="form-control pull-right" id="datepicker">
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- Date range -->
            <div class="bootstrap-timepicker">
              <div class="form-group">
                <label>Jam Pemesanan:</label>

                <div class="input-group">
                  <input name="jam_pemesanan" type="time" class="form-control timepicker">

                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Keluhan pasien:</label>
              <textarea class="form-control" name="keluhan" rows="3" placeholder="Apa keluhan yang anda alamai?"></textarea>
            </div>

            <div class="box-footer">
              <!-- <a href="{{url('/riwayatpemesanan')}}"> -->
                <div class="col-md-6 col-md-offset-10">
                  <button type="submit" class="btn btn-primary">Pesan</button>
                </div>
                <!-- </a> -->  
              </div>
              <!-- /.form group -->

            </div>
          </form>  
          <!-- /.box-body -->
        </div>
      </div>

      
      <div class="col-md-6">
        <div class="box box-success">
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
              @foreach($jadwal as $data)
              <tr>
                <td>{{$data->hari_praktek}}</td>
                <td>{{$data->start}}</td>
                <td>{{$data->end}}</td>
              </tr>
              @endforeach
            </table>
            <!-- /.box-body -->
          </div>
          <!-- /.row -->
        </section>
        @append
    <!-- /.content -->