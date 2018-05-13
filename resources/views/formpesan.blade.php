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
      autoclose: true,
      dateFormat: "yy-mm-dd",
      minDate: -3
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
          <h3 class="box-title">Silahkan Pesan Sesuai Jadwal Homecare</h3>
        </div>

        <form role="form" action="{{ route('formpesan.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="box-body">
            <!-- Date -->
            @foreach($homecare as $data)
            <h3 class="widget-user-username">{{$data->nama_homecare}}</h3>
            <input type="hidden" name="id_homecare" value="{{$data->id_homecare}}">
            @endforeach
            <div class="form-group">
              <label>Tanggal Pemesanan:</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input min="<?php echo date('Y-m-d') ?>" type="text" name="tanggal_pemesanan" class="form-control pull-right" id="datepicker">
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- Date range -->
            <!-- <div class="bootstrap-timepicker"> -->
              <div class="form-group">
                <label>Jam Pemesanan:</label>

                <div class="input-group">
                  <input name="jam_pemesanan" type="time" class="form-control" id="">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                </div>
                <a style="color : red">Contoh : 09:00:AM</a>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            <!-- </div> -->

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
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Hari Praktek</th>
                  <th>Jam Buka</th>
                  <th>Jam Tutup</th>
                </tr>
              </thead>
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
        <script>
          $('#jadwal').change(function() {
           $('#jadwal_time').val($('#jadwal').val());
         });
          $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false
            })
          })
        </script>


        @append
    <!-- /.content -->