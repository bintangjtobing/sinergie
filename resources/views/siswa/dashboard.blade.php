<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portal Bimbingan Belajar Sinergie College  & Courses | @yield('title')</title>
        <meta name="title" content="SINERGIE E-LEARNING SYSTEM">
<meta name="description" content="E-learning sistem Sinergie College and courses">
<meta name="keywords" content="sinergie, college, courses, sinergie colleges, sinergie courses, e-learning sinergie, elearning sinergie, elearning, e-learning">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="author" content="Bintang Jeremia Tobing">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571123473/icon64_h5xu4m.png')!!}">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="{!! url ('http://placehold.it/144.png/000/fff')!!}">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="{!! url ('http://placehold.it/114.png/000/fff')!!}">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="{!! url ('http://placehold.it/72.png/000/fff')!!}">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="{!! url ('http://placehold.it/57.png/000/fff')!!}">
        <link rel="stylesheet" type="text/css" href="{!!url('https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.0/b-html5-1.6.0/b-print-1.6.0/r-2.2.3/sc-2.0.1/datatables.min.css')!!}">
        <!-- Styles -->
        <link href="{!! asset('css/lib/weather-icons.css')!!}" rel="stylesheet" />
        <link href="{!! asset('css/lib/owl.carousel.min.css')!!}" rel="stylesheet" />
        <link href="{!! asset('css/lib/owl.theme.default.min.css')!!}" rel="stylesheet" />
        <link href="{!! asset('css/lib/font-awesome.min.css')!!}" rel="stylesheet">
        <link href="{!! asset('css/lib/themify-icons.css')!!}" rel="stylesheet">
        <link href="{!! asset('css/lib/menubar/sidebar.css')!!}" rel="stylesheet">
        <link href="{!! asset('css/lib/bootstrap.min.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/lib/datepicker.min.css')!!}">
    <link href="{!! asset('/css/elearning/stylee.css')!!}" rel="stylesheet">
        
        <link href="{!! asset('css/lib/helper.css')!!}" rel="stylesheet">
        <link href="{!! asset('css/style.css')!!}" rel="stylesheet">
        <link rel="stylesheet" href="{!!asset('css/styleadd.css')!!}">
        <script src="{!!url('https://code.jquery.com/jquery-3.4.1.min.js')!!}" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        
    </head>

    <body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="/siswa/dashboard"><span>SINERGIE COLLEGE</span></a></div>
                    <ul>
                    <li class="liside pt-4"><strong>{{Auth::guard('murid')->user()->nama_murid}}</strong></li>
                    <li class="liside1 pt-1">{{Auth::guard('murid')->user()->kelas}}</li>
                        <hr>
                        <li class="label">Status</li>
                        <div class="alert alert-info">
                            <span style="font-size: 1.2em; color: green;"><i class="fas fa-check-circle"></i></span>Active <br>
                        <p class="palert">Kamu berlangganan paket <strong>{{Auth::guard('murid')->user()->paket}}</strong></p>
                        </div>
                        <li title="Logout" data-toggle="tooltip" data-placement="right"><a href="/siswa/dashboard/logout"><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            
                        </div>
                        <div class="float-right">
                            <ul>
                                <li class="header-icon dib"><span class="user-avatar">{{Auth::guard('murid')->user()->nama_murid}} <i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>

                                                <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                            <li><a href="/siswa/{{Auth::guard('murid')->user()->id_murid}}/setting"><i class="ti-settings"></i> <span>Setting</span></a></li>

                                                <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                                <li><a href="/siswa/dashboard/logout"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrap">
            <div class="main">
                <div class="container">
                    @yield('kontendash')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer">
                                    <p>©Copyright 2019 Sinergie Pro Courses & Colleges - All reserved by <a href="https://bintangtobing.com">Bintang Tobing</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.0/b-html5-1.6.0/b-print-1.6.0/r-2.2.3/sc-2.0.1/datatables.min.js"></script>
        
        {{-- <script src="{!!asset('js/lib/jquery.min.js')!!}"></script> --}}
        <script src="{!!asset('js/lib/jquery.nanoscroller.min.js')!!}"></script>
        <!-- nano scroller -->
        <script src="{!!asset('js/lib/menubar/sidebar.js')!!}"></script>
        <script src="{!!asset('js/lib/preloader/pace.min.js')!!}"></script>
        <!-- sidebar -->
        <script src="{!!asset('js/lib/bootstrap.min.js')!!}"></script>
        <script src="https://kit.fontawesome.com/ae026c985d.js"></script>
        <script src="{!!asset('js/lib/datepicker.js')!!}"></script>
        <script src="{!!asset('js/lib/datepicker.en.js')!!}"></script>
        <script>
                $('#example-show-hide-callbacks').datepicker({
       language: 'en',
       onShow: function(dp, animationCompleted){
           if (!animationCompleted) {
               log('start showing')
           } else {
               log('finished showing')
           }
       },
       onHide: function(dp, animationCompleted){
           if (!animationCompleted) {
               log('start hiding')
           } else {
               log('finished hiding')
           }
       }
   })
            </script>
        

        <!-- bootstrap -->

        <script src="{!!asset('js/lib/circle-progress/circle-progress.min.js')!!}"></script>
        <script src="{!!asset('js/lib/circle-progress/circle-progress-init.js')!!}"></script>

        <script src="{!!asset('js/lib/morris-chart/raphael-min.js')!!}"></script>
        <script src="{!!asset('js/lib/morris-chart/morris.js')!!}"></script>
        <script src="{!!asset('js/lib/morris-chart/morris-init.js')!!}"></script>

        <!--  flot-chart js -->
        <script src="{!!asset('js/lib/flot-chart/jquery.flot.js')!!}"></script>
        <script src="{!!asset('js/lib/flot-chart/jquery.flot.resize.js')!!}"></script>
        <script src="{!!asset('js/lib/flot-chart/flot-chart-init.js')!!}"></script>
        <!-- // flot-chart js -->


        <script src="{!!asset('js/lib/vector-map/jquery.vmap.js')!!}"></script>
        <!-- scripit init-->
        <script src="{!!asset('js/lib/vector-map/jquery.vmap.min.js')!!}"></script>
        <!-- scripit init-->
        <script src="{!!asset('js/lib/vector-map/jquery.vmap.sampledata.js')!!}"></script>
        <!-- scripit init-->
        <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.world.js')!!}"></script>
        <!-- scripit init-->
        <script src="{!!asset('js/lib/vector-map/country/jquery.vmap.usa.js')!!}"></script>
        <!-- scripit init-->
        <script src="{!!asset('js/lib/vector-map/vector.init.js')!!}"></script>

        <script src="{!!asset('js/lib/weather/jquery.simpleWeather.min.js')!!}"></script>
        <script src="{!!asset('js/lib/weather/weather-init.js')!!}"></script>
        <script src="{!!asset('js/lib/owl-carousel/owl.carousel.min.js')!!}"></script>
        <script src="{!!asset('js/lib/owl-carousel/owl.carousel-init.js')!!}"></script>
        <script src="{!!asset('js/lib/owl-carousel/invoice-edit.js')!!}"></script>
        <script src="{!!asset('js/scripts.js')!!}"></script>
        <script>
            $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
               var input = $($(this).attr("toggle"));
               if (input.attr("type") == "password") {
                  input.attr("type", "text");
               } else {
                  input.attr("type", "password");
               }
               });
      </script>
        <!-- scripit init-->
        
         <script>
             $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
         </script>
    </body>

</html>
