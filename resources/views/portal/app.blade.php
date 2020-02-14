<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{ asset('assets/global/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/global/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/global/css/ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/md-layout1/material-design/css/material.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/md-layout1/css/layout.css') }}" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <!-- <link href="{{ asset('assets/global/plugins/metrojs/metrojs.min.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/global/plugins/maps-amcharts/ammap/ammap.css') }}" rel="stylesheet"> -->
    <!-- END PAGE STYLE -->
    <!-- <script  src="{{ asset('assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script> -->
    <!-- <link href="{{ asset('assets/global/plugins/datatables/dataTables.min.css') }}" rel="stylesheet"> -->
    <script>function base_url(url=''){return '<?php  echo URL::to('/');?>/'+url; }</script>

    @stack('css')
</head>

<body class="fixed-topbar fixed-sidebar theme-sdtl color-default dashboard">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
        <!-- BEGIN SIDEBAR -->
        <div class="sidebar">
            <div class="logopanel">
                <h1>
                    <a href=""></a>
                </h1>
            </div>
            <div class="sidebar-inner">
                <div class="sidebar-top" style="display: none;">
                    <form action="#" method="post" class="searchform" id="search-results">
                        <input type="text" class="form-control" name="keyword" placeholder="Search...">
                    </form>
                    <div class="userlogged clearfix">
                        <i class="icon icons-faces-users-01"></i>
                        <div class="user-details">
                            <h4>Mike Mayers</h4>
                            <div class="dropdown user-login">
                                <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                                    <i class="online"></i><span>Available</span><i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="busy"></i><span>Busy</span></a></li>
                                    <li><a href="#"><i class="turquoise"></i><span>Invisible</span></a></li>
                                    <li><a href="#"><i class="away"></i><span>Away</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-title">
                    Navigation
                    <div class="pull-right menu-settings">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                            <i class="icon-settings"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="reorder-menu" class="reorder-menu">Reorder menu</a></li>
                            <li><a href="#" id="remove-menu" class="remove-menu">Remove elements</a></li>
                            <li><a href="#" id="hide-top-sidebar" class="hide-top-sidebar">Hide user &amp; search</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav nav-sidebar">
                    <li class=" nav-active active"><a href="dashboard"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li class="nav-parent">
                        <a href="#"><i class="icon-puzzle"></i><span>Users</span> <span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="user?grid=table">All Users</a></li>
                            <li><a href="user?grid=form"> New User</a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a href="#"><i class="icon-puzzle"></i><span>Package</span> <span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="user">All Package</a></li>
                            <li><a href="profile"> New Package</a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a href="#"><i class="icon-puzzle"></i><span>Modules</span> <span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="user">All Modules</a></li>
                            <li><a href="profile"> New Modules</a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a href="#"><i class="icon-puzzle"></i><span>Features</span> <span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="user">All Features</a></li>
                            <li><a href="profile"> Active Features</a></li>
                            <li><a href="profile"> Inactive Features</a></li>
                        </ul>
                    </li>


                    <li class="nav-parent">
                        <a href="#"><i class="icon-puzzle"></i><span>Plugins</span> <span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="user">All Plugin</a></li>
                            <li><a href="profile"> Active Plugins</a></li>
                            <li><a href="profile"> Inactive Plugin</a></li>
                        </ul>
                    </li>


                    <li class="nav-parent">
                        <a href="#"><i class="icon-cup"></i><span>Extra </span><span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="extra-fullcalendar.html"><span class="pull-right badge badge-primary">New</span> Fullcalendar</a></li>
                            <li><a href="extra-widgets.html"> Widgets</a></li>
                            <li><a href="page-coming-soon.html"> Coming Soon</a></li>
                            <li><a href="extra-sliders.html"> Sliders</a></li>
                            <li><a href="maps-google.html"> Google Maps</a></li>
                            <li><a href="maps-vector.html"> Vector Maps</a></li>
                            <li><a href="extra-translation.html"> Translation</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-footer clearfix">
                    <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
                        <i class="icon-settings"></i></a>
                    <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
                        <i class="icon-size-fullscreen"></i></a>
                    <a class="pull-left" href="user-lockscreen.html" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
                        <i class="icon-lock"></i></a>
                    <a class="pull-left btn-effect" href="user-login-v1.html" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
                        <i class="icon-power"></i></a>
                </div>
            </div>
        </div>
        <!-- END SIDEBAR -->
        <div class="main-content">
            <!-- BEGIN TOPBAR -->
            <div class="topbar">
                <div class="header-left">
                    <div class="topnav">
                        <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
                        <ul class="nav nav-icons">
                            <li><a href="#" class="toggle-sidebar-top"><span class="icon-user-following"></span></a></li>
                            <li><a href="mailbox.html"><span class="octicon octicon-mail-read"></span></a></li>
                            <li><a href="#"><span class="octicon octicon-flame"></span></a></li>
                            <li><a href="builder-page.html"><span class="octicon octicon-rocket"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="header-menu nav navbar-nav">
                        <!-- BEGIN USER DROPDOWN -->

                        <!-- END USER DROPDOWN -->
                        <!-- BEGIN NOTIFICATION DROPDOWN -->

                        <!-- END MESSAGES DROPDOWN -->
                        <!-- BEGIN USER DROPDOWN -->
                        <li class="dropdown" id="user-header">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img src="{{ asset('assets/global/images/avatars/user1.png')}}" id="imLogo" name="imLogo" alt="phpMyAdmin" border="0">
                                <span class="username">Hi, John Doe</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="icon-user"></i><span>My Profile</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-calendar"></i><span>My Calendar</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-settings"></i><span>Account Settings</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-logout"></i><span>Logout</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER DROPDOWN -->
                    </ul>
                </div>
                <!-- header-right -->
            </div>

            <div class="page-content">
                <div class="header">
                    <h2>Tables <strong>Dynamic</strong></h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="dashboard.html">Make</a>
                            </li>
                            <li><a href="tables.html">Tables</a>
                            </li>
                            <li class="active">Tables Dynamic</li>
                        </ol>
                    </div>
                </div>
                <!-- <div class="row" id="form-content"></div>
                <div class="row" id="table-content"></div>
                <div class="row" id="view-content"></div> -->
                @yield('content')
            </div>
            <!-- BEGIN SEARCH -->

            <!-- END SEARCH -->
            <!-- BEGIN PRELOADER -->
            <div class="loader-overlay">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>

            <script src="{{ asset('assets/global/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
            <script src="{{ asset('assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js?ver=3.0') }}"></script>
            <!-- <script  src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js') }}"></script> -->
            <!-- <script  src="{{ asset('assets/global/plugins/gsap/main-gsap.min.js') }}"></script> -->
            <!-- <script  src="{{ asset('assets/global/plugins/tether/js/tether.min.js') }}"></script> -->
            <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
            <!-- <script  src="{{ asset('assets/global/plugins/appear/jquery.appear.js') }}"></script> -->
            <!-- <script  src="{{ asset('assets/global/plugins/jquery-cookies/jquery.cookies.min.js') }}"></script>  -->
            <!-- Jquery Cookies, for theme -->
            <!-- <script  src="{{ asset('assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js') }}"></script>  -->
            <!-- simulate synchronous behavior when using AJAX -->
            <!-- <script  src="{{ asset('assets/global/plugins/bootbox/bootbox.min.js') }}"></script>  -->
            <!-- Modal with Validation -->
            <script src="{{ asset('assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
            <!-- Custom Scrollbar sidebar -->
            <!-- <script  src="{{ asset('assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>  -->
            <!-- Show Dropdown on Mouseover -->
            <!-- <script  src="{{ asset('assets/global/plugins/charts-sparkline/sparkline.min.js') }}"></script>  -->
            <!-- Charts Sparkline -->
            <!-- <script  src="{{ asset('assets/global/plugins/retina/retina.min.js') }}"></script>  -->
            <!-- Retina Display -->
            <!-- <script  src="{{ asset('assets/global/plugins/select2/dist/js/select2.full.min.js') }}"></script> -->
            <!-- Select Inputs -->
            <!-- <script  src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}"></script> -->
            <!-- Checkbox & Radio Inputs -->
            <!-- <script  src="{{ asset('assets/global/plugins/backstretch/backstretch.min.js') }}"></script>  -->
            <!-- Background Image -->
            <!-- <script  src="{{ asset('assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>  -->
            <!-- Animated Progress Bar -->

            <!-- <script  src="{{ asset('assets/global/js/builder.js') }}"></script> -->
            <!-- Theme Builder -->
            <script src="{{ asset('assets/global/js/sidebar_hover.js') }}"></script>
            <!-- Sidebar on Hover -->
            <script src="{{ asset('assets/global/js/application.js') }}"></script>
            <!-- Main Application Script -->
            <!-- <script  src="{{ asset('assets/global/js/plugins.js') }}"></script>  -->
            <!-- Main Plugin Initialization Script -->
            <!-- <script  src="{{ asset('assets/global/js/widgets/notes.js') }}"></script>  -->
            <!-- Notes Widget -->
            <!-- <script  src="{{ asset('assets/global/js/quickview.js') }}"></script>  -->
            <!-- Chat Script -->
            <!-- <script  src="{{ asset('assets/global/js/pages/search.js') }}"></script>  -->
            <!-- Search Script -->
            <!-- BEGIN PAGE SCRIPT -->
            <script src="{{ asset('assets/global/plugins/noty/jquery.noty.packaged.min.js') }}"></script>
            <!-- Notifications -->
            <!-- <script  src="{{ asset('assets/global/plugins/bootstrap-editable/js/bootstrap-editable.min.js') }}"></script>  -->
            <!-- Inline Edition X-editable -->
            <!-- <script  src="{{ asset('assets/global/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js') }}"></script>  -->
            <!-- Context Menu -->
            <!-- <script  src="{{ asset('assets/global/plugins/multidatepicker/multidatespicker.min.js') }}"></script>  -->
            <!-- Multi dates Picker -->
            <!-- <script  src="{{ asset('assets/global/js/widgets/todo_list.js') }}"></script>
        <script  src="{{ asset('assets/global/plugins/metrojs/metrojs.min.js') }}"></script>  -->
            <!-- Flipping Panel -->
            <!-- <script  src="{{ asset('assets/global/plugins/charts-chartjs/Chart.min.js') }}"></script>  -->
            <!-- ChartJS Chart -->
            <!-- <script  src="{{ asset('assets/global/plugins/charts-highstock/js/highstock.js') }}"></script>  -->
            <!-- financial Charts -->
            <!-- <script  src="{{ asset('assets/global/plugins/charts-highstock/js/modules/exporting.js') }}"></script>  -->
            <!-- Financial Charts Export Tool -->
            <!-- <script  src="{{ asset('assets/global/plugins/maps-amcharts/ammap/ammap.js') }}"></script>  -->
            <!-- Vector Map -->
            <!-- <script  src="{{ asset('assets/global/plugins/maps-amcharts/ammap/maps/js/worldLow.js') }}"></script>  -->
            <!-- Vector World Map  -->
            <!-- <script  src="{{ asset('assets/global/plugins/maps-amcharts/ammap/themes/black.js') }}"></script>  -->
            <!-- Vector Map Black Theme -->
            <!-- <script  src="{{ asset('assets/global/plugins/skycons/skycons.min.js') }}"></script>  -->
            <!-- Animated Weather Icons -->
            <!-- <script  src="{{ asset('assets/global/plugins/simple-weather/jquery.simpleWeather.js') }}"></script> Weather Plugin -->
            <!-- <script  src="{{ asset('assets/global/js/widgets/widget_weather.js') }}"></script> -->

            <!-- END PAGE SCRIPT -->
            <!-- <script  src="{{ asset('assets/admin/md-layout1/material-design/js/material.js') }}"></script> -->
            <!-- <script  src="{{ asset('assets/admin/layout1/js/layout.js') }}"></script> -->
            <!-- BEGIN PAGE SCRIPTS -->
            <!-- <script src="{{ asset('assets/global/plugins/datatables/jquery.dataTables.min.js') }}"></script> 
    <script src="{{ asset('assets/global/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/pages/table_dynamic.js') }}"></script> -->
            <!-- END PAGE SCRIPTS -->
            <script src="{{ asset('handler.js') }}"></script>
            @stack('scripts')
            <script>
                //   $.material.init();
            </script>
</body>

</html>