@extends('halamanpasien')

@section('isi2')
<section class="content-header">
  <h1>
    Pilih Layanan
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Pasien</a></li>
    <li class="active">Pilih Layanan</li>
  </ol>
</section>
<section class="content">
  <div class="callout callout-success">
    <h4>Selamat Datang di Abicare Indonesia</h4>

    <p>Silahkan pilih jenis layanan pemesanan</p>
  </div>
  <div class="row">
    
    <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-white">
          <div class="widget-user-image">
            <img class="img-circle" src="{{url('asset/dist/img/akupuntur.jpg')}}" alt="User Avatar">
          </div>
          <!-- /.widget-user-image -->
          <h3 class="widget-user-username">Akupuntur</h3>
          <h5 class="widget-user-desc">-</h5>
        </div>
        <div class="box-footer">
          
          <a href="{{url('/daftarhomecare/1')}}">
            <button type="submit" class="btn btn-primary">Pilih</button>
          </a> 

        </div>
      </div>
      <!-- /.box-body -->
    </div>
    
    <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-white">
          <div class="widget-user-image">
            <img class="img-circle" src="{{url('asset/dist/img/fisioterapi.jpg')}}" alt="User Avatar">
          </div>
          <!-- /.widget-user-image -->
          <h3 class="widget-user-username">Fisioterapi</h3>
          <h5 class="widget-user-desc">Lead Developer</h5>
        </div>
           <!--  <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div> -->
            <div class="box-footer">
              <a href="{{url('/daftarhomecare/2')}}">
                <button type="submit" class="btn btn-primary">Pilih</button>
              </a>  
            </div>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-white">
              <div class="widget-user-image">
                <img class="img-circle" src="{{url('asset/dist/img/perawatanstoma.jpg')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Perawatan Stoma</h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <!-- <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div> -->
            <div class="box-footer">
              <a href="{{url('/daftarhomecare/3')}}">
                <button type="submit" class="btn btn-primary">Pilih</button>
              </a>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-white" >
              <div class="widget-user-image">
                <img class="img-circle" src="{{url('asset/dist/img/perawatanbayi.jpg')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Perawatan Bayi</h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <!-- <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div> -->
            <div class="box-footer">
              <a href="{{url('/daftarhomecare/4')}}">
                <button type="submit" class="btn btn-primary">Pilih</button>
              </a>  
            </div>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-white">
              <div class="widget-user-image">
                <img class="img-circle" src="{{url('asset/dist/img/perawatanluka.jpg')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Perawatan Luka</h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <!-- <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div> -->
            <div class="box-footer">
              <a href="{{url('/daftarhomecare/5')}}">
                <button type="submit" class="btn btn-primary">Pilih</button>
              </a>  
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-white">
              <div class="widget-user-image">
                <img class="img-circle" src="{{url('asset/dist/img/hipnoterapi.jpg')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Hipnoterapi</h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <!-- <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div> -->
            <div class="box-footer">
              <a href="{{url('/daftarhomecare/6')}}">
                <button type="submit" class="btn btn-primary">pilih</button>
              </a>  
            </div>
          </div>
          
          <!-- /.row -->
        </section>
        @append
    <!-- /.content -->