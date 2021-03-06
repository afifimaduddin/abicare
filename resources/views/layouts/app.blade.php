<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Abicare', 'Abicare Indonesia') }}</title>

    <!-- Styles -->
    <link href="{{ url('asset/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('asset/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('asset/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('asset/dist/css/AdminLTE.min.css')}}">

  <!-- <link rel="stylesheet" href="{{url('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{url('asset/dist/css/skins/_all-skins.min.css')}}">
   <!-- Morris chart -->
   <link rel="stylesheet" href="{{url('asset/bower_components/morris.js/morris.css')}}">
   <!-- jvectormap -->
   <link rel="stylesheet" href="{{url('asset/bower_components/jvectormap/jquery-jvectormap.css')}}">
   <!-- Date Picker -->
   <link rel="stylesheet" href="{{url('asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{url('asset/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{url('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

   <link rel="stylesheet" href="{{url('asset/bower_components/Ionicons/css/ionicons.min.css')}}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{url('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
   <!-- Bootstrap time Picker -->
   <link rel="stylesheet" href="{{url('asset/plugins/timepicker/bootstrap-timepicker.min.css')}}">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!-- jQuery 3 -->
<script src="{{url('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('asset/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('asset/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('asset/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{url('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('asset/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('asset/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('asset/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{url('asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script src="{{url('asset/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('asset/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('asset/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('asset/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('asset/dist/js/demo.js')}}"></script>

<script src="{{url('sweetalert/sweetalert.min.js')}}"></script>
<script src="{{url('sweetalert/moment.min.js')}}"></script>
<script src="{{url('sweetalert/promise.min.js')}}"></script>

<script src="{{url('asset/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
</head>
<body style="background-color: #16cc5c;">
        <!-- Right Side Of Navbar -->
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

   <!--  Scripts -->
    <script src="{{ url('asset/js/app.js') }}"></script>
</body>
</html>
