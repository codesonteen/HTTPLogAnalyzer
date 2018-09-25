<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Web Server Log Analytic</title>

    <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/') }}/assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="{{ url('/') }}/assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ url('/') }}/assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->

    @yield('head')
</head>
<body>
<!-- Page Container -->
<!--
    Available Classes:

    'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
-->
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Overlay Scroll Container -->
        <div id="side-overlay-scroll">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times"></i>
                </button>
                <span>
                            <img class="img-avatar img-avatar32" src="{{ url('/') }}/assets/img/avatars/avatar10.jpg" alt="">
                            <span class="font-w600 push-10-l">Donald Barnes</span>
                        </span>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content remove-padding-t">

            </div>
            <!-- END Side Content -->
        </div>
        <!-- END Side Overlay Scroll Container -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content bg-white-op">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                    <div class="btn-group pull-right">
                        <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                            <i class="si si-drop"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                            <li>
                                <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="{{ url('/') }}/assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="{{ url('/') }}/assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="{{ url('/') }}/assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="{{ url('/') }}/assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="{{ url('/') }}/assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="h5 text-white" href="index.html">
                        <i class="fa fa-circle-o-notch text-primary"></i> &nbsp;<span class="h4 font-w600 sidebar-mini-hide">Web Analytic</span>
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content side-content-full">
                    <ul class="nav-main">
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Server Analytic Tools</span></li>
                        <li>
                            <a class="active" href="{{ url('/nginx') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Nginx</span></a>
                            <a class="active" href="{{ url('/apache2') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Apache 2</span></a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                        <img src="{{ url('/') }}/assets/img/avatars/avatar10.jpg" alt="Avatar">
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a tabindex="-1" href="base_pages_login.html">
                                <i class="si si-logout pull-right"></i>Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>

            <li class="visible-xs">
                <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </li>
            <!-- Top Menu -->
            @yield('top-menu')

        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content content-fluid">
           @yield('content')
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
        <div class="pull-left">
            <!--<a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.4</a> &copy; <span class="js-year-copy">2015</span>-->
        </div>
        <div class="pull-right">
            <!--Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>-->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Custom CSS for display log events -->
<style type="text/css">
    dl{
        margin: 0;
    }
    dt, dd{
        display: inline;
        line-height: 28px;
        word-wrap: break-word;
    }

    dt{
        background: #e0e0e0;
        font-weight: 600;
        border-radius: 3px;
        padding: 1px 5px;
    }
    dd{
        margin-right: 6px;
    }
</style>

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="{{ url('/') }}/assets/js/core/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/core/bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/js/core/jquery.slimscroll.min.js"></script>
<script src="{{ url('/') }}/assets/js/core/jquery.scrollLock.min.js"></script>
<script src="{{ url('/') }}/assets/js/core/jquery.appear.min.js"></script>
<script src="{{ url('/') }}/assets/js/core/jquery.countTo.min.js"></script>
<script src="{{ url('/') }}/assets/js/core/jquery.placeholder.min.js"></script>
<script src="{{ url('/') }}/assets/js/core/js.cookie.min.js"></script>
<script src="{{ url('/') }}/assets/js/app.js"></script>

<!-- Page Plugins -->
<script src="{{ url('/') }}/assets/js/plugins/chartjsv2/Chart.min.js"></script>

<!-- Page JS Code -->
<!--<script src="{{ url('/') }}/assets/js/pages/base_pages_dashboard_v3.js"></script>-->
<script>
    jQuery(function () {
        // Init page helpers (CountTo plugin)
        App.initHelpers('appear-countTo');
    });
</script>

<!-- Page Script -->
@yield('script')

</body>
</html>