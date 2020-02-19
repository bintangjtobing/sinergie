<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SINERGIE E-LEARNING SYSTEM | @yield('title')</title>
    <meta name="title" content="SINERGIE E-LEARNING SYSTEM - @yield('title')">
    <meta name="description" content="E-learning sistem Sinergie College and courses">
    <meta name="keywords"
        content="sinergie, college, courses, sinergie colleges, sinergie courses, e-learning sinergie, elearning sinergie, elearning, e-learning">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Bintang Jeremia Tobing">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon"
        href="{!! url('https://res.cloudinary.com/sinergiecollege-com/image/upload/v1571123473/icon64_h5xu4m.png')!!}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{!! url ('http://placehold.it/144.png/000/fff')!!}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{!! url ('http://placehold.it/114.png/000/fff')!!}">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="{!! url ('http://placehold.it/72.png/000/fff')!!}">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{!! url ('http://placehold.it/57.png/000/fff')!!}">
    <link rel="stylesheet" type="text/css"
        href="{!!url('https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.0/b-html5-1.6.0/b-print-1.6.0/r-2.2.3/sc-2.0.1/datatables.min.css')!!}">
    <!-- Styles -->
    <link href="{!! asset('css/lib/weather-icons.css')!!}" rel="stylesheet" />
    <link href="{!! asset('css/lib/owl.carousel.min.css')!!}" rel="stylesheet" />
    <link href="{!! asset('css/lib/owl.theme.default.min.css')!!}" rel="stylesheet" />
    <link href="{!! asset('css/lib/font-awesome.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('css/lib/themify-icons.css')!!}" rel="stylesheet">
    <link href="{!! asset('css/lib/menubar/sidebar.css')!!}" rel="stylesheet">
    <link href="{!! asset('css/lib/bootstrap.min.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/lib/datepicker.min.css')!!}">

    <link href="{!! asset('css/lib/helper.css')!!}" rel="stylesheet">
    <link href="{!! asset('css/style.css')!!}" rel="stylesheet">
    <script src="{!!url('https://code.jquery.com/jquery-3.4.1.min.js')!!}"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo"><a href="/dashboard"><span>SINERGIE COLLEGE</span></a></div>
                <ul>
                    <li class="label">Main Focus</li>
                    <li title="Dashboard" data-toggle="tooltip" data-placement="right"><a href="/dashboard"><i
                                class="ti-home"></i> Dashboard</a></li>

                    <li class="label">Management</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> User Management <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/member">Admin</a></li>
                            <li><a href="/member-guru">Guru</a></li>
                            <li><a href="/member-murid">Murid</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i> Komponen Kelas <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/kelas">Panel Kelas</a></li>
                            <li><a href="/paket">Paket pelajaran</a></li>
                            <li><a href="/soal">Soal Soal</a></li>
                            <li><a href="/bahan-ajar">Materi Pembelajaran</a></li>
                        </ul>
                    </li>
                    <li title="Logout" data-toggle="tooltip" data-placement="right"><a href="/logout"><i
                                class="ti-close"></i> Logout</a></li>
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
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <ul>

                            <li class="header-icon dib"><i class="ti-bell"></i>
                                <div class="drop-down">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="header-icon dib"><i class="ti-email"></i>
                                <div class="drop-down">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="/email"><i class="ti-pencil-alt pull-right"></i></a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="header-icon dib"><span class="user-avatar">{{auth()->user()->nama_lengkap}} <i
                                        class="ti-angle-down f-s-10"></i></span>
                                <div class="drop-down dropdown-profile">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>

                                            <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                            <li><a href="/member/{{auth()->user()->id}}/edit"><i
                                                        class="ti-settings"></i> <span>Setting</span></a></li>

                                            <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                            <li><a href="/logout"><i class="ti-power-off"></i> <span>Logout</span></a>
                                            </li>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hi <strong>{{auth()->user()->nama_lengkap}}</strong>, apa kabar hari ini?</h1>
                                <p>Mau setting apa sekarang?</p>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    @yield('content')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>©Copyright 2019 Sinergie Pro Courses & Colleges - All reserved by <a
                                        href="https://bintangtobing.com">Bintang Tobing</a></p>
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
    <!-- Modal -->
    <div class="modal fade" id="modalPurchase" tabindex="-1" role="dialog" aria-labelledby="modalPurchase"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPurchase">Purchase this app to get more features.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>About Our Application</h3>
                    We know that our application still requires broader and more complex developments, for that we
                    always innovate in developing our system so that the clients we serve are satisfied with our system.
                    If you are willing to help in our development, you can contact us in developing the idea at <a
                        href="mailto:support@starwhisper.id">support@starwhisper.id</a><br>
                    <hr>
                    <h3>Purchase this App.</h3>
                    And for the demo application, you can only see demo data, and if you want to use all the features,
                    please pay off your payment and immediately confirm to the email <a
                        href="mailto:billing@starwhisper.id">billing@starwhisper.id</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery vendor -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.0/b-html5-1.6.0/b-print-1.6.0/r-2.2.3/sc-2.0.1/datatables.min.js">
    </script>

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
            onShow: function (dp, animationCompleted) {
                if (!animationCompleted) {
                    log('start showing')
                } else {
                    log('finished showing')
                }
            },
            onHide: function (dp, animationCompleted) {
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

    <!-- scripit init-->

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>