
<!DOCTYPE html>

<html>

    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>Top Express</title>
        <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
        <meta name="description" content="AdminDesigns - SHARED ON GFXFree.Net">
        <meta name="author" content="AdminDesigns">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font CSS (Via CDN) -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="../../../assets/skin/default_skin/css/theme.css">

        <!-- Admin Panels CSS -->
        <link rel="stylesheet" type="text/css" href="../../../assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href="../../../assets/admin-tools/admin-forms/css/admin-forms.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../../assets/img/favicon.ico">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="dashboard-page sb-l-o sb-r-c">



        <!-- Start: Main -->
        <div id="main">

            <!-- Start: Header -->
            <header class="navbar navbar-fixed-top bg-light">
                <div class="navbar-branding">
                    <a class="navbar-brand" href="dashboard.html">
                        <img src="../../../assets/img/logos/logo.gifOLD"/>
                    </a>
                    <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                    <ul class="nav navbar-nav pull-right hidden">
                        <li>
                            <a href="#" class="sidebar-menu-toggle">
                                <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="sidebar-menu-toggle" href="#">
                            <span class="octicon octicon-ruby fs18"></span>
                        </a>
                    </li>
                    <li>
                        <a class="topbar-menu-toggle" href="#">
                            <span class="glyphicons glyphicons-magic fs16"></span>
                        </a>
                    </li>
                    <li>
                        <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
                    </li>
                    <li class="dropdown hidden">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicons glyphicons-settings fs14"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="fa fa-times-circle-o pr5 text-primary"></span> Reset LocalStorage </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="fa fa-slideshare pr5 text-info"></span> Force Global Logout </a>
                            </li>
                            <li class="divider mv5"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="fa fa-tasks pr5 text-danger"></span> Run Cron Job </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="fa fa-wrench pr5 text-warning"></span> Maintenance Mode </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a class="request-fullscreen toggle-active" href="#">
                            <span class="octicon octicon-screen-full fs18"></span>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                            <span>Sidik OUATTARA</span>
                            <span class="caret caret-tp hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">

                            <li class="br-t of-h">
                                <jsp:include page="../../imports/main/logout.html" ></jsp:include>


                                </li>
                            </ul>
                        </li>
                    </ul>

                </header>
                <!-- End: Header -->

                <!-- Start: Sidebar -->
                <aside id="sidebar_left" class="nano nano-primary">
                    <div class="nano-content">

                        <!-- Start: Sidebar Header -->
                        <header class="sidebar-header">
                            <div class="user-menu">
                                <div class="row text-center mbn">
                                    <div class="col-xs-4">
                                        <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Accueil">
                                            <span class="glyphicons glyphicons-home"></span>
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                            <span class="glyphicons glyphicons-inbox"></span>
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                            <span class="glyphicons glyphicons-bell"></span>
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                            <span class="glyphicons glyphicons-imac"></span>
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                            <span class="glyphicons glyphicons-settings"></span>
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                            <span class="glyphicons glyphicons-restart"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- End: Sidebar Header -->

                        <!-- sidebar menu -->

                    <jsp:include page="../../imports/main/menu.html" >
                        <jsp:param name="menu" value="home" />
                        <jsp:param name="active" value="home" />
                    </jsp:include>

                    <?php include("menu.php"); ?>

                    <div class="sidebar-toggle-mini">
                        <a href="#">
                            <span class="fa fa-sign-out"></span>
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">

                <!-- Start: Topbar-Dropdown -->
                <div id="topbar-dropmenu">
                    <div class="topbar-menu row">
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-success">
                                <span class="metro-icon glyphicons glyphicons-inbox"></span>
                                <p class="metro-title">Messages</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-info">
                                <span class="metro-icon glyphicons glyphicons-parents"></span>
                                <p class="metro-title">Users</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-alert">
                                <span class="metro-icon glyphicons glyphicons-headset"></span>
                                <p class="metro-title">Support</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-primary">
                                <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                                <p class="metro-title">Settings</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-warning">
                                <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                                <p class="metro-title">Videos</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-system">
                                <span class="metro-icon glyphicons glyphicons-picture"></span>
                                <p class="metro-title">Pictures</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End: Topbar-Dropdown -->

                <!-- Start: Topbar -->
                <header id="topbar">
                    <div class="topbar-left">
                        <ol class="breadcrumb">
                            <li class="crumb-icon">
                                <a href="javascript:void(0);">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li class="crumb-link">
                                <a href="javascript:void(0);">Bienvenue sur l'application de gestion du Top Express</a>
                            </li>
                        </ol>
                    </div>

                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="animated fadeIn">

                    <!-- Dashboard Tiles -->
                    <div class="row mb10">
                        <div class="col-md-3">
                            <div class="panel bg-alert light of-h mb10">
                                <div class="pn pl20 p5">
                                    <div class="icon-bg"> <i class="fa fa-car"></i> </div>
                                    <h2 class="mt15 lh15"> <a style="color:#fff;" href="manager/vehicule/list.php"><b class="vh-0">49</b></a> </h2>
                                    <h5 class="text-muted">Cars</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel bg-info light of-h mb10">
                                <div class="pn pl20 p5">
                                    <div class="icon-bg"> <i class="fa fa-cab"></i> </div>
                                    <h2 class="mt15 lh15"> <a style="color:#fff;" href="#"><b class="vh-1">125</b></a> </h2>
                                    <h5 class="text-muted">Mini cars</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel bg-danger light of-h mb10">
                                <div class="pn pl20 p5">
                                    <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                    <h2 class="mt15 lh15"><a style="color:#fff;" href="#"> <b class="vh-2">13</b> </a></h2>
                                    <h5 class="text-muted">Chauffeurs</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel bg-warning light of-h mb10">
                                <div class="pn pl20 p5">
                                    <div class="icon-bg"> <i class="fa fa-envelope"></i> </div>
                                    <h2 class="mt15 lh15"><a style="color:#fff;" href="#"> <b class="vh-3">34</b></a> </h2>
                                    <h5 class="text-muted">Passagers</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-8" id="p30">
                            <div class="panel">

                                <div class="panel-body pn">
                                    <div id="ecommerce_chart1" style="height: 328px;"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="panel sort-disable">

                                <div class="panel-body of-a">
                                    <div class="row">

                                        <div style=" margin: 0 auto; text-align: center;">
                                                <text x="187" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:18px;fill:#333333;width:310px;" y="25">
                                                <tspan>Top depense entretien</tspan>
                                                </text>
                                                </div>

                                        <div class="col-md-12 pln br-r mvn15">

                                            <h5 class="mt15 mbn ph10 pb5 br-b fw700">V�hicules concern�s <a href="../accueil/topEntretien"><small class="pull-right fw700 text-primary">Voir d�tail [+] </small></a> </h5>
                                            <table id="tCher" class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>Source</th>
                                                        <th>Count</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>

                                        </div>


                                    </div>

                                </div>
                            </div>





                        </div>

                    </div>


                    <!-- Admin-panels -->
                    <div class="admin-panels fade-onload sb-l-o-full">

                        <!-- full width widgets -->
                        <div class="row">





                            <!-- Three panes -->
                            <div class="col-md-12 admin-grid">
                                <div class="panel sort-disable" id="p0">
                                    <div class="panel-heading">
                                        <span class="panel-title">Statistiques</span>
                                    </div>
                                    <div class="panel-body mnw700 of-a">
                                        <div class="row">

                                            <!-- Chart Column -->
                                            <div class="col-md-4 pln br-r mvn15">

                                                <div id="dir_chart" style="height: 300px;"></div>


                                            </div>

                                            <!-- Multi Text Column -->
                                            <div class="col-md-4 br-r">
                                                <div style=" margin: 0 auto; text-align: center;">
                                                <text x="187" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:18px;fill:#333333;width:310px;" y="25">
                                                <tspan>Top kilom�trage</tspan>
                                                </text>
                                                </div>

                                                <table id="tKm" class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                                    <thead>
                                                        <tr class="hidden">
                                                            <th>Source</th>
                                                            <th>Count</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>

                                            </div>

                                            <!-- Flag/Icon Column -->
                                            <div class="col-md-4" style="height: 278px; overflow-y: auto;">
                                                <div style="text-align: center;">
                                                <text x="187" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:18px;fill:#333333;width:310px;" y="25">
                                                <tspan>Nombre de v�hicules par marque</tspan>
                                                </text>
                                                </div>
                                                <table class="table mbn" id="tMark">
                                                    <thead>
                                                        <tr class="hidden">
                                                            <th>#</th>
                                                            <th>Nombre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>

                                            <!-- Icon Column -->
                                            <div class="col-md-4 hidden">
                                                <h5 class="mt5 ph10 pb5 br-b fw700">Content Viewed <small class="pull-right fw700 text-primary">Refresh </small> </h5>
                                                <table class="table mbn">
                                                    <thead>
                                                        <tr class="hidden">
                                                            <th class="mw30">#</th>
                                                            <th>First Name</th>
                                                            <th>Revenue</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="fs17 text-center w30">
                                                                <span class="fa fa-desktop text-warning"></span>
                                                            </td>
                                                            <td class="va-m fw600 text-muted">Television</td>
                                                            <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$855,913</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fs17 text-center">
                                                                <span class="fa fa-microphone text-primary"></span>
                                                            </td>
                                                            <td class="va-m fw600 text-muted">Radio</td>
                                                            <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-down text-danger pr10"></i>$349,712</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fs17 text-center">
                                                                <span class="fa fa-newspaper-o text-info"></span>
                                                            </td>
                                                            <td class="va-m fw600 text-muted">Newspaper</td>
                                                            <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$1,259,742</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fs17 text-center">
                                                                <span class="fa fa-facebook text-alert"></span>
                                                            </td>
                                                            <td class="va-m fw600 text-muted">Social Media</td>
                                                            <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$3,512,672</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fs17 text-center">
                                                                <span class="fa fa-bank text-alert"></span>
                                                            </td>
                                                            <td class="va-m fw600 text-muted">Investments</td>
                                                            <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$3,512,672</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: .col-md-12.admin-grid -->

                        </div>
                        <!-- end: .row -->

                        <!-- partial width widgets -->
                        <div class="row">

                            <div class="col-md-6 col-lg-5 admin-grid">

                                <!-- Circle Stats -->
                                <div class="panel" id="p5">
                                    <div class="panel-heading">
                                        <span class="panel-title">V�hicules</span>
                                    </div>
                                    <div class="panel-body">
                                        <div class="mb20 text-right">
                                            <span class="fs11 text-muted ml10"><i class="fa fa-circle text-primary fs12 pr5"></i> Car plan</span>
                                            <span class="fs11 text-muted ml10"><i class="fa fa-circle text-info fs12 pr5"></i> Pools</span>
                                            <span class="fs11 text-muted ml10"><i class="fa fa-circle text-warning fs12 pr5"></i> Missions</span>
                                        </div>
                                        <div class="row">

                                            <div class="col-xs-4">
                                                <div class="info-circle" id="c1" value="20" data-circle-color="info"></div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="info-circle" id="c2" value="80" data-circle-color="info"></div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="info-circle" id="c3" value="0" data-circle-color="info"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Column Graph -->



                            </div>
                            <!-- end: .col-md-5-->

                            <div class="col-md-6 col-lg-4 admin-grid">

                                <!-- Pie Chart -->
                                <div class="panel" id="p10">
                                    <div class="panel-heading">
                                        <span class="panel-title">V�hicules</span>
                                    </div>
                                    <div class="panel-body pn">
                                        <div id="high-pie" style="width: 100%; height: 200px; margin: 0 auto"></div>
                                    </div>
                                </div>



                            </div>
                            <!-- end: .col-md-4-->

                            <div class="col-md-6 col-lg-3 admin-grid">

                                <!-- Dot List -->
                                <div class="panel" id="p15">
                                    <div class="panel-heading">
                                        <span class="panel-title"><i class="fa fa-pencil hidden"></i> V�hicules</span>
                                    </div>
                                    <div class="panel-menu admin-form pn">
                                        <!-- Panel Break Smart Widget -->
                                        <div class="smart-widget sm-right smr-50">
                                            <label class="field">
                                                <input type="text" name="sub" id="sub" class="gui-input br-n" placeholder="Rechercher">
                                            </label>
                                            <button type="submit" class="button br-n br-l"> <i class="fa fa-plus"></i> </button>
                                        </div>
                                    </div>
                                    <div class="panel-body pn">
                                        <table class="table mbn tc-med-1 tc-bold-last">
                                            <thead>
                                                <tr class="hidden">
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fa fa-circle text-warning fs14 mr10"></span>Car plan</td>
                                                    <td>20%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fa fa-circle text-info fs14 mr10"></span>Pool</td>
                                                    <td>80%</td>
                                                </tr>
                                                <tr>
                                                    <td class="va-m fw600 text-muted">
                                                        <span class="fa fa-circle text-primary fs14 mr10"></span>Mission</td>
                                                    <td>0%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                            <!-- end: .col-md-3-->

                        </div>
                        <!-- end: .row -->

                    </div>

                </section>
                <!-- End: Content -->


            </section>
            <!-- End: Content-Wrapper -->



        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <script type="text/javascript" src="../../../vendor/jquery/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../../../vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../../../assets/js/bootstrap/bootstrap.min.js"></script>

        <!-- Chart Plugins -->
        <script type="text/javascript" src="../../../vendor/plugins/highcharts/highcharts.js"></script>
        <script type="text/javascript" src="../../../vendor/plugins/circles/circles.js"></script>
        <script type="text/javascript" src="../../../vendor/plugins/raphael/raphael.js"></script>

        <!-- Holder js  -->
        <script type="text/javascript" src="../../../assets/js/bootstrap/holder.min.js"></script>

        <!-- Theme Javascript -->
        <script type="text/javascript" src="../../../assets/js/utility/utility.js"></script>
        <script type="text/javascript" src="../../../assets/js/main.js"></script>
        <script type="text/javascript" src="../../../assets/js/demo.js"></script>

        <!-- Admin Panels  -->
        <script type="text/javascript" src="../../../assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
        <script type="text/javascript" src="../../../assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" src="../../../assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

        <!-- Page Javascript -->
        <script type="text/javascript" src="../../../assets/js/pages/widgets.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";

                // Init Theme Core
                Core.init({
                    sbm: "sb-l-c",
                });

                // Init Demo JS
                Demo.init();

                getExpenseEntretienByYear();

                getNumberCar();

                getNumberByMark();

                getTopVehiculeCher();

                getTopVehiculeKilo();

                getStatVehiculeDirection();



                // Chart color groups
                var sparkColors = {
                    "primary": [bgPrimary, bgPrimaryLr, bgPrimaryDr],
                    "info": [bgInfo, bgInfoLr, bgInfoDr],
                    "warning": [bgWarning, bgWarningLr, bgWarningDr],
                    "success": [bgSuccess, bgSuccessLr, bgSuccessDr],
                    "alert": [bgAlert, bgAlertLr, bgAlertDr]
                };






                // Init Widget Demo JS
                // demoHighCharts.init();

                // Because we are using Admin Panels we use the OnFinish
                // callback to activate the demoWidgets. It's smoother if
                // we let the panels be moved and organized before
                // filling them with content from various plugins

                // Init plugins used on this page
                // HighCharts, JvectorMap, Admin Panels

                // Init Admin Panels on widgets inside the ".admin-panels" container
                $('.admin-panels').adminpanel({
                    grid: '.admin-grid',
                    draggable: true,
                    preserveGrid: true,
                    mobile: false,
                    callback: function () {
                        bootbox.confirm('<h3>A Custom Callback!</h3>', function () {
                        });
                    },
                    onFinish: function () {
                        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                        // Init the rest of the plugins now that the panels
                        // have had a chance to be moved and organized.
                        // It's less taxing to organize empty panels
                        demoHighCharts.init();


                        // We also refresh any "in-view" waypoints to ensure
                        // the correct position is being calculated after the
                        // Admin Panels plugin moved everything
                        Waypoint.refreshAll();

                    },
                    onSave: function () {
                        $(window).trigger('resize');
                    }
                });



            });




            function getStatVehiculeDirection() {
                $.ajax({
                    url: 'accueil',
                    type: 'POST',
                    dataType: 'json',
                    data: {"action": "dashboard", "operation": "vehiculeByDirection"},
                    beforeSend: function () {

                        //document.getElementById('loading'+t).style.display = 'block';

                    },
                    success: function (data) {

                        // Chart colors
                        var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert,
                            bgDanger, bgSuccess, bgSystem, bgDark
                        ];
                        if (data.isValid) {

                            var y = Object.keys(data.dir).map(function (k) {
                                return data.dir[k].dir;
                            });
                            var total = Object.keys(data.dir).map(function (k) {
                                return parseInt(data.dir[k].total);
                            });
                            var pool = Object.keys(data.dir).map(function (k) {
                                return parseInt(data.dir[k].pool);
                            });
                            var plan = Object.keys(data.dir).map(function (k) {
                                return parseInt(data.dir[k].plan);
                            });



                            $('#dir_chart').highcharts({
                                colors: highColors,
                                chart: {
                                    type: 'bar'
                                },
                                title: {
                                    text: 'Nombre de v�hicules par Direction'
                                },
                                subtitle: {
                                    text: '(car plan, pool, mission)'
                                },
                                xAxis: {
                                    categories: ['DRSI', 'DR', 'DS', 'DSI'],
                                    title: {
                                        text: null
                                    }
                                },
                                yAxis: {
                                    min: 0,
                                    title: {
                                        text: 'Nombre v�hicule',
                                        align: 'high'
                                    },
                                    labels: {
                                        overflow: 'justify'
                                    }
                                },
                                plotOptions: {
                                    bar: {
                                        dataLabels: {
                                            enabled: true
                                        }
                                    }
                                },
                                legend: {
                                    layout: 'vertical',
                                    align: 'right',
                                    verticalAlign: 'top',
                                    x: -20,
                                    y: 40,
                                    floating: true,
                                    borderWidth: 1,
                                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                    shadow: true
                                },
                                credits: {
                                    enabled: false
                                },
                                series: [{
                                        name: 'Pool',
                                        data: pool
                                    }, {
                                        name: 'Car plan',
                                        data: plan
                                    }, {
                                        name: 'Total',
                                        data: total
                                    }]
                            });


                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    },
                    error: function (jqXHR, exception) {
                        if (jqXHR.status === 0) {
                            alert('Pas de connection. \n V�rifiez le r�seau.');
                        } else if (jqXHR.status == 404) {
                            alert('La ressource demand�e est introuvable');
                        } else if (jqXHR.status == 500) {
                            alert('Impossible de joindre le serveur.');
                        } else if (exception === 'parsererror') {
                            alert('Echec lors du parse du r�sultat.');
                        } else if (exception === 'timeout') {
                            alert('Time out error.');
                        } else if (exception === 'abort') {
                            alert('Echec de la requ�te.');
                        } else {
                            alert('Erreur non intercept�e.\n' + jqXHR.responseText);
                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    }
                });
                return false; // Pour emp�cher le submit vers la page 'action'
            }


            function getExpenseEntretienByYear() {
                $.ajax({
                    url: 'accueil',
                    type: 'POST',
                    dataType: 'json',
                    data: {"action": "dashboard", "operation": "entretienByYear"},
                    beforeSend: function () {

                        //document.getElementById('loading'+t).style.display = 'block';

                    },
                    success: function (data) {

                        // Chart colors
                        var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert,
                            bgDanger, bgSuccess, bgSystem, bgDark
                        ];
                        if (data.isValid) {

                            var y = Object.keys(data.expense).map(function (k) {
                                return data.expense[k].id;
                            });
                            var xdata = Object.keys(data.expense).map(function (k) {
                                return parseInt(data.expense[k].libelle);
                            });

                            // Chart data
                            //[0, 9411860, 24827680, 62022678, 114658362, 330537205, 461685900, 271416380]
                            var seriesData = [{
                                    name: 'Entretien',
                                    data: xdata
                                }
                            ];

                            var ecomChart = $('#ecommerce_chart1');

                            if (ecomChart.length) {
                                ecomChart.highcharts({
                                    credits: false,
                                    colors: highColors,
                                    title: {
                                    text: 'D�pense annuelle en entretien de v�hicules '
                                },
                                    chart: {
                                        backgroundColor: 'transparent',
                                        className: 'br-r',
                                        type: 'line',
                                        zoomType: 'x',
                                        panning: true,
                                        panKey: 'shift',
                                        marginTop: 45,
                                        marginRight: 1,
                                    },
                                    xAxis: {
                                        gridLineColor: '#EEE',
                                        lineColor: '#EEE',
                                        tickColor: '#EEE',
                                        categories: y
                                    },
                                    yAxis: {
                                        min: 0,
                                        gridLineColor: '#EEE',
                                        title: {
                                            text: null,
                                        }
                                    },
                                    plotOptions: {
                                        spline: {
                                            lineWidth: 3,
                                        },
                                        area: {
                                            fillOpacity: 0.2
                                        }
                                    },
                                    legend: {
                                        enabled: true,
                                        floating: false,
                                        align: 'right',
                                        verticalAlign: 'top',
                                        // y: '-160px'
                                    },
                                    series: seriesData
                                });
                            }
                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    },
                    error: function (jqXHR, exception) {
                        if (jqXHR.status === 0) {
                            alert('Pas de connection. \n V�rifiez le r�seau.');
                        } else if (jqXHR.status == 404) {
                            alert('La ressource demand�e est introuvable');
                        } else if (jqXHR.status == 500) {
                            alert('Impossible de joindre le serveur.');
                        } else if (exception === 'parsererror') {
                            alert('Echec lors du parse du r�sultat.');
                        } else if (exception === 'timeout') {
                            alert('Time out error.');
                        } else if (exception === 'abort') {
                            alert('Echec de la requ�te.');
                        } else {
                            alert('Erreur non intercept�e.\n' + jqXHR.responseText);
                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    }
                });
                return false; // Pour emp�cher le submit vers la page 'action'
            }




            function getNumberCar() {
                $.ajax({
                    url: 'accueil',
                    type: 'POST',
                    dataType: 'json',
                    data: {"action": "dashboard", "operation": "countVehiculeByType"},
                    beforeSend: function () {

                        //document.getElementById('loading'+t).style.display = 'block';

                    },
                    success: function (data) {

                        if (data.isValid) {

                            $(".vh-0").text(data.s);

                            for (var i = 0, len = data.listModel.length; i < len; ++i) {
                                $(".vh-" + data.listModel[i].id).text(data.listModel[i].libelle);
                            }

                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    },
                    error: function (jqXHR, exception) {
                        if (jqXHR.status === 0) {
                            alert('Pas de connection. \n V�rifiez le r�seau.');
                        } else if (jqXHR.status == 404) {
                            alert('La ressource demand�e est introuvable');
                        } else if (jqXHR.status == 500) {
                            alert('Impossible de joindre le serveur.');
                        } else if (exception === 'parsererror') {
                            alert('Echec lors du parse du r�sultat.');
                        } else if (exception === 'timeout') {
                            alert('Time out error.');
                        } else if (exception === 'abort') {
                            alert('Echec de la requ�te.');
                        } else {
                            alert('Erreur non intercept�e.\n' + jqXHR.responseText);
                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    }
                });
                return false; // Pour emp�cher le submit vers la page 'action'
            }




            function getNumberByMark() {
                $.ajax({
                    url: 'accueil',
                    type: 'POST',
                    dataType: 'json',
                    data: {"action": "dashboard", "operation": "countVehiculeByMarque"},
                    beforeSend: function () {

                        //document.getElementById('loading'+t).style.display = 'block';

                    },
                    success: function (data) {

                        if (data.isValid) {

                            var $newRowContent = '';

                            for (var i = 0, len = data.listModel.length; i < len; ++i) {

                                $("#tMark").find('tbody')
                                        .append($('<tr>')
                                                .append($('<td>')
                                                        .addClass('va-m fw600 text-muted')
                                                        .text(data.listModel[i].id)
                                                        )
                                                .append($('<td>')
                                                        .addClass('fs15 fw700 text-right')
                                                        .text(data.listModel[i].libelle)
                                                        )
                                                );
                            }




                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    },
                    error: function (jqXHR, exception) {
                        if (jqXHR.status === 0) {
                            alert('Pas de connection. \n V�rifiez le r�seau.');
                        } else if (jqXHR.status == 404) {
                            alert('La ressource demand�e est introuvable');
                        } else if (jqXHR.status == 500) {
                            alert('Impossible de joindre le serveur.');
                        } else if (exception === 'parsererror') {
                            alert('Echec lors du parse du r�sultat.');
                        } else if (exception === 'timeout') {
                            alert('Time out error.');
                        } else if (exception === 'abort') {
                            alert('Echec de la requ�te.');
                        } else {
                            alert('Erreur non intercept�e.\n' + jqXHR.responseText);
                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    }
                });
                return false; // Pour emp�cher le submit vers la page 'action'
            }



            function getTopVehiculeCher() {
                $.ajax({
                    url: 'accueil',
                    type: 'POST',
                    dataType: 'json',
                    data: {"action": "dashboard", "operation": "topVehiculeCher"},
                    beforeSend: function () {

                        //document.getElementById('loading'+t).style.display = 'block';

                    },
                    success: function (data) {

                        if (data.isValid) {

                            var $newRowContent = '';

                            for (var i = 0, len = data.listModel.length; i < len; ++i) {

                                $("#tCher").find('tbody')
                                        .append($('<tr>')
                                                .append($('<td>').append($('<i>').addClass('fa fa-circle text-warning fs8 pr15'))

                                                        .text(data.listModel[i].id)
                                                        )
                                                .append($('<td>')
                                                        .text(data.listModel[i].libelle)
                                                        )
                                                );
                            }




                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    },
                    error: function (jqXHR, exception) {
                        if (jqXHR.status === 0) {
                            alert('Pas de connection. \n V�rifiez le r�seau.');
                        } else if (jqXHR.status == 404) {
                            alert('La ressource demand�e est introuvable');
                        } else if (jqXHR.status == 500) {
                            alert('Impossible de joindre le serveur.');
                        } else if (exception === 'parsererror') {
                            alert('Echec lors du parse du r�sultat.');
                        } else if (exception === 'timeout') {
                            alert('Time out error.');
                        } else if (exception === 'abort') {
                            alert('Echec de la requ�te.');
                        } else {
                            alert('Erreur non intercept�e.\n' + jqXHR.responseText);
                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    }
                });
                return false; // Pour emp�cher le submit vers la page 'action'
            }



            function getTopVehiculeKilo() {
                $.ajax({
                    url: 'accueil',
                    type: 'POST',
                    dataType: 'json',
                    data: {"action": "dashboard", "operation": "topVehiculeKilo"},
                    beforeSend: function () {

                        //document.getElementById('loading'+t).style.display = 'block';

                    },
                    success: function (data) {

                        if (data.isValid) {

                            var $newRowContent = '';

                            for (var i = 0, len = data.listModel.length; i < len; ++i) {

                                $("#tKm").find('tbody')
                                        .append($('<tr>')
                                                .append($('<td>').append($('<i>').addClass('fa fa-circle text-warning fs8 pr15'))

                                                        .text(data.listModel[i].id)
                                                        )
                                                .append($('<td>')
                                                        .text(data.listModel[i].libelle)
                                                        )
                                                );
                            }




                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    },
                    error: function (jqXHR, exception) {
                        if (jqXHR.status === 0) {
                            alert('Pas de connection. \n V�rifiez le r�seau.');
                        } else if (jqXHR.status == 404) {
                            alert('La ressource demand�e est introuvable');
                        } else if (jqXHR.status == 500) {
                            alert('Impossible de joindre le serveur.');
                        } else if (exception === 'parsererror') {
                            alert('Echec lors du parse du r�sultat.');
                        } else if (exception === 'timeout') {
                            alert('Time out error.');
                        } else if (exception === 'abort') {
                            alert('Echec de la requ�te.');
                        } else {
                            alert('Erreur non intercept�e.\n' + jqXHR.responseText);
                        }

                        //document.getElementById('loading'+t).style.display = 'none';
                    }
                });
                return false; // Pour emp�cher le submit vers la page 'action'
            }

        </script>

        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
