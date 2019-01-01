<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Dashboard - {{env('APP_NAME','PT. SIGI Systems')}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Ujian Sertifikasi untuk pegawai" name="description" />
        <meta content="PT SIGI Systems" name="author" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/font-awesome/css/font-awesome.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/simple-line-icons/simple-line-icons.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css ') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('___/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/morris/morris.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/fullcalendar/fullcalendar.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/jqvmap/jqvmap/jqvmap.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/datatables/datatables.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css ') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('___/assets/global/css/components-rounded.min.css ') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('___/assets/global/css/plugins.min.css ') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('___/assets/layouts/layout2/css/layout.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('___/assets/layouts/layout2/css/themes/blue.min.css ') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('___/assets/layouts/layout2/css/custom.min.css ') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ asset('___/assets/global/img/background.png') }}" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{url('/')}}">
                    <img src="{{ asset('___/assets/global/img/background.png ') }}" alt="logo" width="120" height="50" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="{{ asset('___/assets/layouts/layout2/img/avatar.png ') }}" />
                                    <span class="username username-hide-on-mobile"> {{ Auth::user()->userdetail->nama }} ({{Auth::user()->roles}}) <span class="caret"></span></span>
                                    <!-- <i class="fa fa-angle-down"></i> -->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Ubah Password </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="{{ url('/logout') }}" >
                                            <i class="icon-key"></i>
                                            Keluar</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200"><li class="nav-item active open">
										<a href="{{url('/home')}}" class="nav-link nav-toggle">
											<i class="icon-home"></i>
											<span class="title">Dashboard</span>
											<span class="selected"></span>
											<span class="arrow open"></span>
										</a>
									</li><li class="nav-item active open">
										<a href="{{url('peserta')}}" class="nav-link nav-toggle">
											<i class="icon-users"></i>
											<span class="title">Peserta</span>
											<span class="arrow"></span>
										</a>
									</li><li class="nav-item active open">
										<a href="#" class="nav-link nav-toggle">
											<i class="icon-user-following"></i>
											<span class="title">User</span>
											<span class="arrow"></span>
										</a>
									</li><li class="nav-item active open">
										<a href="#" class="nav-link nav-toggle">
											<i class="icon-grid"></i>
											<span class="title">Jenis Ujian</span>
											<span class="arrow"></span>
										</a>
									</li><li class="nav-item active open">
										<a href="#" class="nav-link nav-toggle">
											<i class="icon-list"></i>
											<span class="title">Bank Soal</span>
											<span class="arrow"></span>
										</a>
									</li><li class="nav-item active open">
										<a href="#" class="nav-link nav-toggle">
											<i class="icon-folder-alt"></i>
											<span class="title">Hasil Ujian</span>
											<span class="arrow"></span>
										</a>
									</li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- <h1 class="page-title"> Admin Dashboard
                        <small>statistics, charts, recent events and reports</small>
                    </h1> -->
                    <!-- END PAGE HEADER-->
                    @yield('content')
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
            <a href="#">{{env('APP_NAME','PT. SIGI Systems')}}</a>
            </div>
            <!-- END FOOTER -->
            <!--[if lt IE 9]>
<script src="{{ asset('___/assets/global/plugins/respond.min.js ') }}"></script>
<script src="{{ asset('___/assets/global/plugins/excanvas.min.js ') }}"></script> 
<script src="{{ asset('___/assets/global/plugins/ie8.fix.min.js ') }}"></script> 
<![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            <script src="{{ asset('___/assets/global/plugins/jquery.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/bootstrap/js/bootstrap.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/js.cookie.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/jquery.blockui.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js ') }}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{ asset('___/assets/global/plugins/moment.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/morris/morris.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/morris/raphael-min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/counterup/jquery.waypoints.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/counterup/jquery.counterup.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/amcharts/amcharts.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/amcharts/serial.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/amcharts/pie.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/amcharts/radar.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/amcharts/themes/light.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/amcharts/themes/patterns.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/amcharts/themes/chalk.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/ammap/ammap.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/amcharts/amstockcharts/amstock.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/fullcalendar/fullcalendar.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/horizontal-timeline/horizontal-timeline.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/flot/jquery.flot.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/flot/jquery.flot.resize.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/flot/jquery.flot.categories.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/jquery.sparkline.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/scripts/datatable.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/datatables/datatables.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/plugin/ckeditor/ckeditor.js ') }}"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{ asset('___/assets/global/scripts/app.min.js ') }}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{ asset('___/assets/pages/scripts/dashboard.min.js ') }}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{ asset('___/assets/layouts/layout2/scripts/layout.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/layouts/layout2/scripts/demo.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/layouts/global/scripts/quick-sidebar.min.js ') }}" type="text/javascript"></script>
            <script src="{{ asset('___/assets/layouts/global/scripts/quick-nav.min.js ') }}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            @php
            $root = "http://".$_SERVER['HTTP_HOST'];
            $root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
            $pc_root = explode("/", $root);
            $uri_js = count($pc_root) - 2;
            @endphp
            <script type="text/javascript">
                uri_js = "{{$uri_js}}";
            </script>
            <script src="{{ asset('___/js/aplikasi.js ') }}"></script> 
    </body>

</html>