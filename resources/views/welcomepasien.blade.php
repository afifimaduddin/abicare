<!DOCTYPE html>
<html>
<head>
  <title>Abicare Indonesia</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
    <!-- 
    Smoothy Template 
    http://www.templatemo.com/tm-396-smoothy
  -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <script src="{{url('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo_style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/templatemo_misc.css">

  <link rel="stylesheet" href="css/nivo-slider.css">
  <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
  <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
  <script type="text/JavaScript" src="js/slimbox2.js"></script> 
  <link rel="stylesheet" href="{{url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('asset/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('asset/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('asset/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{url('asset/dist/css/skins/_all-skins.min.css')}}">
   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
    
    <!--     <script type="text/javascript" src="js/jquery.min.js"></script> -->
    <script type="text/javascript" src="{{url('js/ddsmoothmenu.js')}}"></script>
    <!-- jQuery 3 -->

    <!-- Bootstrap 3.3.7 -->
    <script src="{{url('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('asset/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('asset/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('asset/dist/js/demo.js')}}"></script>

<!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->


<script type="text/javascript">

  ddsmoothmenu.init({
  mainmenuid: "templatemo_flicker", //menu DIV id
  orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
  classname: 'ddsmoothmenu', //class added to menu's outer DIV
  //customtheme: ["#1c5a80", "#18374a"],
  contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>
<body>
  <header>
    <!-- start menu -->
    <div id="templatemo_home">
      <div class="">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-md-3">
              <div class="logo">
                <a href="{{ url('/') }}"><img src="{{url('asset/dist/img/abicarelogo.png')}}"></a>
              </div>
            </div>
            <div class="col-sm-9 col-md-9 templatemo_col9">
              <div id="top-menu">
                <nav class="mainMenu">
                  <ul class="nav">
                    <li><a style="font-size:120%;" class="menu" href="{{route('login')}}"><b>Login</b></a></li>
                    <li><a style="font-size:120%;" class="menu" href="{{route('register')}}"><b>Daftar Sekarang</b></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="templatemo_portfolio" id="templatemo_portfolio">
    <div class="container">
      <div class="col-md-3 col-md-offset-4 templatemo_col12">
        <div class="item project-post">
          <div class="templatemo_about_box">
            <div class="square_coner">
             <span class="texts-a"><i class="fa fa-user"></i></span>
           </div>
         </div>
       </div>  
     </div>

   </div>
   <!--  <h2 class="page-header">Perawat</h2> -->
   <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <!-- Custom Tabs -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a style="font-size:120%;" href="#tab_1" data-toggle="tab">Daftar Pasien</a></li>
          <li><a style="font-size:120%;" href="#tab_2" data-toggle="tab">Pesan Homecare</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <b style="font-size:140%;">Selamat datang di Abicare Indonesia</b>
            <br>
            <br>
            <p style="font-size:120%;">Untuk melakukan pelayanan online dan terhubung dengan perawat, pasien harus menjadi member Abicare Indonesia.</p>

            <a class="btn btn-primary" href="{{route('register')}}">Buat Akun</a>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
            <p style="font-size:140%;">Pilih layanan yang anda butuhkan</p>
            <div class="row">
              @foreach($roles_jenis as $data)
              <div class="col-md-4">
                <div class="box box-widget widget-user-2">
                  <div class="widget-user-header bg-white">
                    <div class="box-body box-profile">
                      <div class="widget-user-image">
                        <img class="img-circle" src="{{url('asset/dist/img/layanan.png')}}" alt="User profile picture">
                      </div>
                      <h3 class="profile-username text-center">
                        {{$data->nama_perawatan}}
                      </h3>
                      <p class="text-muted text-center">
                        {{$data->id_roles_jenis}}
                      </p>
                    </div>
                    <div class="box-footer">
                      <center><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Pilih</button></center>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach


            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
    </div>
  </div>
  <!-- Bottom Start -->
  <div class="clear"></div>
  <!--Footer Start-->
  <div class="templatemo_footer">
    <div class="container">
      <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        <div class="clear"></div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        <div id="templatemo_flicker" >
          <br style="clear: right;" />
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-18 templatemo_col12">
        <h2>Kontak</h2>
        <span class="left col-xs-1 fa fa-map-marker"></span>
        <span class="right col-xs-11">Jalan Bulusan X, Tembalang, Semarang, Jawa Tengah, 50277, Indonesia </span>
        <div class="clear height10"></div>
        <span class="left col-xs-1 fa fa-phone"></span>
        <span class="right col-xs-11">0821-3865-1233</span>
        <div class="clear height10"></div>
        <span class="left col-xs-1 fa fa-envelope"></span>
        <span class="right col-xs-11">abicareindonesia@gmail.com</span>
        <div class="clear height10"></div>
        <span class="left col-xs-1 fa fa-globe"></span>
        <span class="right col-xs-11">www.abicareindonesia.com</span>
        <div class="clear"></div>
      </div>
    </div>
  </div>

  <div class="templatemo_bottom">
    <div class="container">
      <div class="row">
        <div class="left">
          <span>Copyright © 2018 <a href="{{ url('/') }}">Abicare Indonesai</a></span>
        </div>
        <div class="right">
          <a href="#"><div class="fa fa-rss soc"></div></a>
          <a href="#"><div class="fa fa-twitter soc"></div></a>
          <a href="#"><div class="fa fa-linkedin soc"></div></a>
          <a href="#"><div class="fa fa-dribbble soc"></div></a>
          <a href="#"><div class="fa fa-facebook soc"></div></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pemesanan</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger alert-dismissible">
          <h4><i class="icon fa fa-edit"></i> Buat Akun atau Login!</h4>
          Untuk melakukan pemesanan homecare harus membuat akun atau login sebagai pasien
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <a type="button" class="btn btn-primary" href="{{route('login')}}">Login</a>
        <a type="button" class="btn btn-danger" href="{{route('register')}}">Buat Akun</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ac6f004d7591465c7093d2b/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->

<!-- Bottom End -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="https://code.jquery.com/jquery.js"></script> -->
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cycle2.min.js"></script>
<script src="js/jquery.cycle2.carousel.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
<script type="text/javascript">
  $(function(){
    var default_view = 'grid';
    if($.cookie('view') !== 'undefined'){
      $.cookie('view', default_view, { expires: 7, path: '/' });
    } 
    function get_grid(){
      $('.list').removeClass('list-active');
      $('.grid').addClass('grid-active');
      $('.prod-cnt').animate({opacity:0},function(){
        $('.prod-cnt').removeClass('dbox-list');
        $('.prod-cnt').addClass('dbox');
        $('.prod-cnt').stop().animate({opacity:1});
      });
    }
    function get_list(){
      $('.grid').removeClass('grid-active');
      $('.list').addClass('list-active');
      $('.prod-cnt').animate({opacity:0},function(){
        $('.prod-cnt').removeClass('dbox');
        $('.prod-cnt').addClass('dbox-list');
        $('.prod-cnt').stop().animate({opacity:1});
      });
    }
    if($.cookie('view') == 'list'){ 
      $('.grid').removeClass('grid-active');
      $('.list').addClass('list-active');
      $('.prod-cnt').animate({opacity:0});
      $('.prod-cnt').removeClass('dbox');
      $('.prod-cnt').addClass('dbox-list');
      $('.prod-cnt').stop().animate({opacity:1}); 
    } 

    if($.cookie('view') == 'grid'){ 
      $('.list').removeClass('list-active');
      $('.grid').addClass('grid-active');
      $('.prod-cnt').animate({opacity:0});
      $('.prod-cnt').removeClass('dboxlist');
      $('.prod-cnt').addClass('dbox');
      $('.prod-cnt').stop().animate({opacity:1});
    }

    $('#list').click(function(){   
      $.cookie('view', 'list'); 
      get_list()
    });

    $('#grid').click(function(){ 
      $.cookie('view', 'grid'); 
      get_grid();
    });

    /* filter */
    $('.menuSwitch ul li').click(function(){
      var CategoryID = $(this).attr('category');
      $('.menuSwitch ul li').removeClass('cat-active');
      $(this).addClass('cat-active');

      $('.prod-cnt').each(function(){
        if(($(this).hasClass(CategoryID)) == false){
         $(this).css({'display':'none'});
       };
     });
      $('.'+CategoryID).fadeIn(); 

    });
  });
</script>
<script src="js/jquery.singlePageNav.js"></script>

<script type="text/javascript">
  $(window).load(function() {
    $('#slider').nivoSlider({
      prevText: '',
      nextText: '',
      controlNav: false,
    });
  });
</script>
<script>
  $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
    </script>
    <script type="text/javascript">
      <!--
      function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block'){
        e.style.display = 'none';
        $('#togg').text('show footer');
      }
      else {
        e.style.display = 'block';
        $('#togg').text('hide footer');
      }
    }
      //-->
    </script>
    
    <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
    <script src="js/stickUp.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
      <script>
       $('a.menu').click(function(){
        $('a.menu').removeClass("active");
        $(this).addClass("active");
      });
    </script>
    
    <script> <!-- scroll to specific id when click on menu -->
         // Cache selectors
         var lastId,
         topMenu = $("#top-menu"),
         topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
    scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
     lastId = id;
       // Set/remove active class
       menuItems
       .parent().removeClass("active")
       .end().filter("[href=#"+id+"]").parent().addClass("active");
     }                   
   });
 </script>
</body>
</html>