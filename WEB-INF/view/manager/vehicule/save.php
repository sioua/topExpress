<?php
	include_once '../includes/dbConnexion.php';
?> 
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

        <!-- Datatables CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

        <link href="../../../../assets/skin/default_skin/css/jquery.steps.css" rel="stylesheet">
        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/skin/default_skin/css/theme.css">

        <!-- Admin Panels CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">


        <link rel="stylesheet" href="../../../../vendor/plugins/bootstrap-datepicker-14/css/bootstrap-datepicker.min.css">


        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-forms/css/admin-forms.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../../../assets/img/favicon.ico">


        <link href="../../../../vendor/plugins/chosen/chosen.css" rel="stylesheet">
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
                        <img src="../../../../assets/img/logos/logo.gif"/>
                        Top Express
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
                                <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                                    <span class="fa fa-power-off pr5"></span> Deconnexion </a>
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
                    <jsp:include page="../../../imports/main/menu.html" >
                        <jsp:param name="menu" value="vehicule" />
                        <jsp:param name="active" value="save-veh" />
                    </jsp:include>
                 
                    <?php include("../menu.php"); ?>

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
                        <ul class="nav nav-list nav-list-topbar pull-left">
                             
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <a href="list.php" class="btn btn-danger btn-sm fw600 ml10 btn-gradient btn-rounded"><span class="fa fa-list pr5"></span> Acc�der � la liste v�hicule</a>
                    </div>

                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <!-- Begin: Content -->
                <section id="content" class="table-layout animated fadeIn">

                    <!-- begin: .tray-center -->
                    <div class="tray tray-center p25 va-t posr">

                        <!-- create new order panel -->
                        <div class="panel mb25 mt5">
                            <div class="panel-heading">
                                <span class="panel-title"><span class="fa fa-car pr5"></span> Ajouter une nouvelle voiture</span>
                                 
                            </div>
                            <div class="panel-body p20 pb10">

                                <div class="tab-content pn br-n admin-form">

                                    <div id="tab1_1" class="tab-pane active">

                                        <div class="section row mbn">


                                            <form id="form" action="saveVehicule.php" method="post" class="wizard-big">
                                                <h1>Informations g�n�rales</h1>
                                                <fieldset>
                                                    <h5 style="margin: 0;">Informations g�n�rales</h5>
                                                    <h6 style="margin: 0;">Les champs pr�c�d�s du caract�re ast�risque (*) sont obligatoires</6>

                                                        <div class="row">
                                                            <div class="col-md-6" style="margin-top: 10px;">
                                                                <div class="form-group">
                                                                    <label>Immatriculation *</label>
                                                                    <input id="immatriculation" name="immatriculation" type="text" class="form-control required">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Immatriculation pr�c�dente *</label>
                                                                    <input id="immatriculation_prec" name="immatriculation_prec" type="text" class="form-control required">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Date de 1�re mise en circulation *</label>
                                                                    <label for="date_ms" class="field prepend-icon">
                                                                        <input type="date" id="date_ms" name="date_ms" class="gui-input datepicker1" placeholder="">
                                                                        <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                                        </label>
                                                                    </label>

                                                                </div>

                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 10px;">
                                                                <div class="form-group">
                                                                    <label>Date d'achat du v�hicule </label>
                                                                    <input type="date" id="date_achat" name="date_achat" class="gui-input datepicker1" placeholder="">
                                                                </div>
																<div class="form-group">
                                                                    <label>Etat *</label>

                                                                    <select id="etat" name="etat" data-placeholder="" class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option>
                                                                        <option value="En entretien">En entretien</option>
                                                                        <option value="Op�rationnel">Op�rationnel</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </fieldset>
                                                <h1>Caract�ristiques</h1>
                                                <fieldset>
                                                    <h5 style="margin: 0;">Caract�ristiques du v�hicule</h5>
                                                    <h6 style="margin: 0;">Les champs pr�c�d�s du caract�re ast�risque (*) sont obligatoires</6>

                                                        <div class="row">
                                                            <div class="col-md-6" style="margin-top: 10px;">
                                                                <div class="form-group">
                                                                    <label>Marque *</label>
                                                                    <select id="marque" name="marque" data-placeholder="" class="chosen-select form-control" tabindex="2" onchange="setModele(this)">
																	<option value=""></option>
																	<?php
																		//S�lection de marque � partir de la base de donn�es
																		$selectMarque = $mysqli->query("SELECT * FROM marque");
																		$resultatMarque = $selectMarque->fetchall();
																		foreach($resultatMarque as $marque){
																			echo"<option value='".$marque['0']."'>".$marque['1']."</option>";
																		}
																	?>                                                                         
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mod�le *</label>

                                                                    <select id="modele" name="modele" data-placeholder="" class="chosen-select form-control" tabindex="2" onchange="setCarrosserie(this)">
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Carrosserie *</label>

                                                                    <select id="carrosserie" name="carrosserie" data-placeholder="" class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option>

                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Energie *</label>
                                                                    <select id="energie" name="energie" data-placeholder="Selectionnez la soci�t�..." class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option>
                                                                        <option value="1">Essence</option>
                                                                        <option value="2">Diesel</option>
                                                                        <option value="3">Gasoil </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 10px;">
                                                                <div class="form-group">
                                                                    <label>Puissance fiscale *</label>
                                                                    <select id="puissance_fiscale" name="puissance_fiscale" class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option>
                                                                         
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Num�ro chassis </label>
                                                                    <input id="chassis" name="chassis" type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nombre de place *</label>
																	<select id="nombre_place" name="nombre_place" class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option>
                                                                        <option value="32">32</option>
                                                                        <option value="45">45</option>
                                                                        <option value="65">65</option>
                                                                        <option value="70">70</option>
                                                                         
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Couleur *</label>
                                                                    <select id="couleur" name="couleur" data-placeholder="" class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option>
                                                                        <option value="Blanche">Blanche</option>
                                                                        <option value="Grise">Grise</option>
                                                                        <option value="Noire">Noire</option>
                                                                        <option value="Beige">Beige</option>                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </fieldset>
                                                <h1>Assignation</h1>
                                                <fieldset>

                                                    <h5 style="margin: 0;">Assignation du v�hicule</h5>
                                                    <h6 style="margin: 0;">Les champs pr�c�d�s du caract�re ast�risque (*) sont obligatoires</h6>

                                                        <div class="row">

                                                            <div class="col-md-6" style="margin-top: 10px;">


                                                                <label class="control-label mb15">Cat�gorie v�hicule</label>
                                                                <div class="form-group row">

                                                                    <div class="col-md-6">
                                                                        <div class="radio-custom mb5">
                                                                            <input type="radio" value="1" id="radioExample3" name="categorie" checked="true" onchange="handleChange(this);">
                                                                            <label for="radioExample3">CAR PLAN</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="radio-custom mb5">
                                                                            <input type="radio" id="radioExample4" value="2" name="categorie" onchange="handleChange(this);">
                                                                            <label for="radioExample4">POOL</label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="radio-custom mb5">
                                                                            <input type="radio" id="radioExample5" value="3" name="categorie" onchange="handleChange(this);">
                                                                            <label for="radioExample5">MISSION</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="radio-custom mb5">
                                                                            <input type="radio" id="radioExample6" value="4" name="categorie" onchange="handleChange(this);">
                                                                            <label for="radioExample6">INTERVENTION</label>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 10px;">
                                                                <div class="form-group">
                                                                    <label>Service</label>
                                                                    <select name="service" data-placeholder="Selectionnez le service..." class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option> 
                                                                         
                                                                    </select>

                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Site d'affectation</label>
                                                                    <select name="site" data-placeholder="" class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option> 
                                                                    </select>
                                                                </div>

                                                                <div class="form-group" id="employe">
                                                                    <label>Employ�</label>
                                                                    <select name="employe" class="chosen-select form-control" tabindex="2">
                                                                        <option value=""></option> 
                                                                    </select>

                                                                </div>

                                                            </div>
                                                        </div>
                                                </fieldset>
                                                 
                                                <input type="hidden" name="action" value="vehicule" />
                                                <input type="hidden" name="section" value="vehicule" />
                                                <input type="hidden" name="operation" value="add" />
                                            </form>
                                        </div> 

                                        <!-- end section row -->

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end: .tray-center -->

                    <!-- begin: .tray-right -->
                    <aside class="tray tray-right tray290 va-t pn" data-tray-height="match">

                        <!-- menu quick links -->
                        <div class="p20 admin-form">

                            <h4 class="mt5 text-muted fw500"> Rechercher un v�hicule</h4>

                            <hr class="short">

                            <div class="section mb10">
                                <label for="customer-id" class="field prepend-icon">
                                    <input type="text" name="customer-id" id="customer-id" class="gui-input" placeholder="Immatriculation">
                                    <label for="customer-id" class="field-icon"><i class="fa fa-car"></i>
                                    </label>
                                </label>
                            </div>


                            <h6 class="fw400">Marque v�hicule</h6>
                            <div class="section mb15">
                                <label class="field select">
                                    <select id="customer-location" name="customer-location">
                                        <option value="0" selected="selected">Rechercher avec la marque</option>
                                        <option value="1">AUDI</option>
                                        <option value="2">BMW</option>
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div>

                            <h6 class="fw400">Mod�le v�hicule</h6>
                            <div class="section mb15">
                                <label class="field select">
                                    <select id="customer-company" name="customer-company">
                                        <option value="0" selected="selected">Rechercher avec le mod�le</option>

                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div>

                            <h6 class="fw400">Date d'enregistrement</h6>
                            <div class="section row">
                                <div class="col-md-6">
                                    <label for="date1" class="field prepend-icon">
                                        <input type="text" name="date1" id="date1" class="gui-input" placeholder="01/01/14">
                                        <label for="date1" class="field-icon"><i class="fa fa-calendar"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label for="date2" class="field prepend-icon">
                                        <input type="text" name="date2" id="date2" class="gui-input" placeholder="06/01/15">
                                        <label for="date2" class="field-icon"><i class="fa fa-calendar"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <hr class="short">

                            <div class="section row">
                                <div class="col-sm-12">
                                    <button class="btn btn-default btn-sm ph25" type="button">Rechercher</button>
                                     
                                </div>
                                <div class="col-sm-7 hidden">
                                    <label class="field option mt10">
                                        <input type="checkbox" name="info" checked>
                                        <span class="checkbox"></span>Save Search
                                    </label>
                                </div>
                            </div>

                        </div>

                    </aside>
                    <!-- end: .tray-right -->

                </section>
                <!-- End: Content -->
                <!-- End: Content -->

            </section>
            <!-- End: Content-Wrapper -->



        </div>


        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <script type="text/javascript" src="../../../../vendor/jquery/jquery-1.11.1.min.js"></script>

        <script type="text/javascript" src="../../../../vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../../../../assets/js/bootstrap/bootstrap.min.js"></script>


        <script type="text/javascript" src="../../../../vendor/plugins/moment/moment.min.js"></script>
         



        <!-- Theme Javascript -->
        <script type="text/javascript" src="../../../../assets/js/utility/utility.js"></script>
        <script type="text/javascript" src="../../../../assets/js/main.js"></script>
        <script type="text/javascript" src="../../../../assets/js/demo.js"></script>
        <script type="text/javascript">
                                                                                jQuery(document).ready(function () {

                                                                                    "use strict";

                                                                                    // Init Theme Core    
                                                                                    Core.init();

                                                                                    // Init Theme Core    
                                                                                    Demo.init();

                                                                                    /*$('.datepicker1').datepicker({
                                                                                     format: "dd/mm/yyyy",
                                                                                     language: "fr"
                                                                                     });*/




                                                                                    // select dropdowns - placeholder like creation
                                                                                    /*var selectList = $('.admin-form select');
                                                                                     selectList.each(function (i, e) {
                                                                                     $(e).on('change', function () {
                                                                                     if ($(e).val() == "0")
                                                                                     $(e).addClass("empty");
                                                                                     else
                                                                                     $(e).removeClass("empty")
                                                                                     });
                                                                                     });
                                                                                     selectList.each(function (i, e) {
                                                                                     $(e).change();
                                                                                     });
                                                                                     
                                                                                     */

                                                                                    // Init tagsinput plugin
                                                                                    /*$("input#tagsinput").tagsinput({
                                                                                     tagClass: function (item) {
                                                                                     return 'label label-default';
                                                                                     }
                                                                                     });
                                                                                     */




                                                                                });
        </script>

        <script src="../../../../assets/js/jquery.steps.min.js"></script>

        <!-- Jquery Validate -->
        <script src="../../../../vendor/plugins/validate/jquery.validate.min.js"></script>


        <script>



                                                                                $(document).ready(function () {




                                                                                    $("#wizard").steps();
                                                                                    $("#form").steps({
                                                                                        bodyTag: "fieldset",
                                                                                        onStepChanging: function (event, currentIndex, newIndex)
                                                                                        {
                                                                                            // Always allow going backward even if the current step contains invalid fields!
                                                                                            if (currentIndex > newIndex)
                                                                                            {
                                                                                                return true;
                                                                                            }

                                                                                            // Forbid suppressing "Warning" step if the user is to young
                                                                                            if (newIndex === 3 && Number($("#age").val()) < 18)
                                                                                            {
                                                                                                return false;
                                                                                            }

                                                                                            var form = $(this);

                                                                                            // Clean up if user went backward before
                                                                                            if (currentIndex < newIndex)
                                                                                            {
                                                                                                // To remove error styles
                                                                                                $(".body:eq(" + newIndex + ") label.error", form).remove();
                                                                                                $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                                                                                            }

                                                                                            // Disable validation on fields that are disabled or hidden.
                                                                                            form.validate().settings.ignore = ":disabled,:hidden";

                                                                                            // Start validation; Prevent going forward if false
                                                                                            return form.valid();
                                                                                        },
                                                                                        onStepChanged: function (event, currentIndex, priorIndex)
                                                                                        {
                                                                                            // Suppress (skip) "Warning" step if the user is old enough.
                                                                                            if (currentIndex === 2 && Number($("#age").val()) >= 18)
                                                                                            {
                                                                                                $(this).steps("next");
                                                                                            }

                                                                                            // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                                                                                            if (currentIndex === 2 && priorIndex === 3)
                                                                                            {
                                                                                                $(this).steps("previous");
                                                                                            }
                                                                                        },
                                                                                        onFinishing: function (event, currentIndex)
                                                                                        {
                                                                                            var form = $(this);

                                                                                            // Disable validation on fields that are disabled.
                                                                                            // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                                                                                            form.validate().settings.ignore = ":disabled";

                                                                                            // Start validation; Prevent form submission if false
                                                                                            return form.valid();
                                                                                        },
                                                                                        onFinished: function (event, currentIndex)
                                                                                        {
                                                                                            var form = $(this);

                                                                                            // Submit form input
                                                                                            form.submit();
                                                                                        }
                                                                                    }).validate({
                                                                                        errorPlacement: function (error, element)
                                                                                        {
                                                                                            element.before(error);
                                                                                        },
                                                                                        rules: {
                                                                                            confirm: {
                                                                                                equalTo: "#password"
                                                                                            }
                                                                                        }
                                                                                    });
                                                                                });

                                                                                function handleChange(e) {

                                                                                    if (e.value === "1") {
                                                                                        document.getElementById('employe').style.display = 'block';
                                                                                    } else {
                                                                                        document.getElementById('employe').style.display = 'none';
                                                                                    }
                                                                                }

                                                                                function setModele(sel) {
                                                                                    var $m = sel.options[sel.selectedIndex].value;
                                                                                    if ($m !== "") {
                                                                                        getListModele($m);
                                                                                    }

                                                                                }

                                                                                function setCarrosserie(sel) {
                                                                                    var $m = sel.options[sel.selectedIndex].value;
                                                                                    if ($m !== "") {
                                                                                        getListCarrosserie($m);
                                                                                    }

                                                                                }

                                                                                function getListModele(m) {
                                                                                    $.ajax({
                                                                                        url: 'save',
                                                                                        type: 'POST',
                                                                                        dataType: 'json',
                                                                                        data: {"marque": m, "action": "vehicule", "section": "modele", "operation": "listModeleJx"},
                                                                                        beforeSend: function () {

                                                                                            //document.getElementById('loading').style.display = 'block';

                                                                                        },
                                                                                        success: function (data) {

                                                                                            //document.getElementById('loading').style.display = 'none';
                                                                                            var selector = document.getElementById('modele');

                                                                                            $('#modele')
                                                                                                    .find('option')
                                                                                                    .remove()
                                                                                                    .end()
                                                                                                    .append('<option value=""></option>');

                                                                                            for (var i = 0, len = data.listModelId.length; i < len; ++i) {

                                                                                                var opt = document.createElement('option');
                                                                                                opt.value = data.listModelId[i];
                                                                                                opt.innerHTML = data.listModel[i];
                                                                                                selector.appendChild(opt);
                                                                                            }

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

                                                                                            //document.getElementById('loading').style.display = 'none';
                                                                                        }
                                                                                    });
                                                                                    return false; // Pour emp�cher le submit vers la page 'action'
                                                                                }



                                                                                function getListCarrosserie(m) {
                                                                                    $.ajax({
                                                                                        url: 'save',
                                                                                        type: 'POST',
                                                                                        dataType: 'json',
                                                                                        data: {"modele": m, "action": "vehicule", "section": "carrosserie", "operation": "listCarrosserieJx"},
                                                                                        beforeSend: function () {

                                                                                            //document.getElementById('loading').style.display = 'block';

                                                                                        },
                                                                                        success: function (data) {

                                                                                            //document.getElementById('loading').style.display = 'none';
                                                                                            var selector = document.getElementById('carrosserie');
                                                                                            var selector2 = document.getElementById('couleur');

                                                                                            $('#carrosserie')
                                                                                                    .find('option')
                                                                                                    .remove()
                                                                                                    .end()
                                                                                                    .append('<option value=""></option>');


                                                                                            $('#couleur')
                                                                                                    .find('option')
                                                                                                    .remove()
                                                                                                    .end()
                                                                                                    .append('<option value=""></option>');


                                                                                            for (var i = 0, len = data.listCarrosseId.length; i < len; ++i) {

                                                                                                var opt = document.createElement('option');
                                                                                                opt.value = data.listCarrosseId[i];
                                                                                                opt.innerHTML = data.listCarrosse[i];
                                                                                                selector.appendChild(opt);
                                                                                            }

                                                                                            for (var i = 0, len = data.listColors.length; i < len; ++i) {
                                                                                                var opt = document.createElement('option');
                                                                                                opt.value = data.listColors[i].id;
                                                                                                opt.innerHTML = data.listColors[i].libelle;
                                                                                                selector2.appendChild(opt);

                                                                                            }

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

                                                                                            document.getElementById('loading').style.display = 'none';
                                                                                        }
                                                                                    });
                                                                                    return false; // Pour emp�cher le submit vers la page 'action'
                                                                                }


                                                                                $(function () {
                                                                                    var datepicker = $.fn.datepicker.noConflict();
                                                                                    $.fn.bootstrapDP = datepicker;
                                                                                    $(".datepicker1").bootstrapDP({format: "dd/mm/yyyy"});
                                                                                });
        </script>


        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
