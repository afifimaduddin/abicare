@extends('halamanperawat')

@section('isi3')
    <section class="content">
      <div class="callout callout-info">
          <h4>Selamat, Homecare telah selesai dibuat :)</h4>
        </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
                <img class="img-circle" src="dist/img/avatar3.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Panji Wound Care</h3>
              <h5 class="widget-user-desc">Jl. Kliwonan Rt 03 Rw 01, cangkringan, banyudono, Boyolali, Jawa Tengah </h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">--Deskripsi Homecare--</a>
                    <ul>
                      Homecare ini dapat melayani berbagai perawatan luka yang meliputi perawatan luka ringan maupun luka berat
                    </ul>
                </li>
                <li><a href="#">--Hari Praktek--</a>
                    <ul>
                      Senin - Kamis 
                    </ul>
                <li><a href="#">--Jam Praktek--</a>
                    <ul>
                      16.00 WIB - 20.00 WIB
                    </ul>
                </li>
                <li><a href="#">--E-mail--</a>
                    <ul>
                      wounderhomecare@gmail.com
                    </ul>
                </li>
                <li><a href="#">--No Telepon--</a>
                    <ul>
                      082138657982
                    </ul>
                </li>
                <li><a href="#">--tarif--</a>
                    <ul>
                      Rp.7000,00
                    </ul>
                </li>
              </ul>
            </div>
            <div class="box-footer">
              <a href="{{url('/formpesan')}}">
                <div class="col-md-6 col-md-offset-9">
                  <button type="submit" class="btn btn-warning">edit</button>
                </div>
              </a>  
            </div>
          </div>
              <!-- /.box-body -->

    </section>
    @append
    <!-- /.content -->