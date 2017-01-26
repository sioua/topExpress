 
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
        <link rel="stylesheet" type="text/css" href="../../../../vendor/plugins/magnific/magnific-popup.css">
 
        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/skin/default_skin/css/theme.css">

        <!-- Admin Panels CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-forms/css/admin-forms.css">

        <!-- Admin Modals CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-plugins/admin-modal/adminmodal.css">

        <link rel="stylesheet" href="../../../../vendor/plugins/bootstrap-datepicker-14/css/bootstrap-datepicker.min.css">

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
                    <jsp:param name="menu" value="entretien" />
                    <jsp:param name="active" value="list-ent" />
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
                            
                            <li class="active">
                                <a href="javascript:void(0);">Gestions des entretiens</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <a href="../entretien/create" class="btn btn-danger btn-sm fw600 ml10 btn-gradient btn-rounded"><span class="fa fa-plus pr5"></span> Enregistrer un entretien</a>
                         
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
                                <span class="panel-title"><span class="fa fa-car pr5"></span> Liste des véhicules à l'entretien</span>

                            </div>
                            <div class="panel-body p20 pb10">

                                <div class="tab-content pn br-n admin-form">

                                    <div id="tab1_1" class="tab-pane active">

                                        <form action="manager/entretien/create" method="post">


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="pull-right">
                                                                <button class="btn btn-warning btn-xs">&nbsp;</button>&nbsp;Revision
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <button class="btn btn-success btn-xs">&nbsp;</button>&nbsp;Visite technique
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pull-left">
                                                                <button class="btn btn-danger btn-xs">&nbsp;</button>&nbsp;Réparation
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pull-left">
                                                                <button class="btn btn-info btn-xs">&nbsp;</button>&nbsp;Autres
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                             

                                                            <label>   </label> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-top: 10px;">

                                                    <div class="panel" id="spy4">

                                                        <div class="panel-body pn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mbn" id="datatable2">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                #
                                                                            </th>
                                                                            <th>Véhicule</th>
                                                                            <th>Type d'entretien</th>
                                                                            <th>Garage</th>
                                                                            <th>Date d'entrée réelle</th>
                                                                            <th>Date de sortie réelle</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                         
                                                                        <tr class="text-center">    
                                                                            <td>
                                                                                 
                                                                                <button class="btn btn-success btn-xs"></button>

                                                                                
                                                                                <button class="btn btn-warning btn-xs"></button>

                                                                                 
                                                                                <button class="btn btn-danger btn-xs"></button>
 
                                                                                <button class="btn btn-info btn-xs"></button>
 
                                                                            </td>
                                                                            <td>

                                                                                 

                                                                            </td>
                                                                            <td> 

                                                                            </td>
                                                                            <td>
                                                                               
                                                                            </td>
                                                                            <td>
                                                                                 
                                                                            </td>    
                                                                            <td>
                                                                                 
                                                                            </td>
                                                                            <td>
                                                                                
                                                                                <button type="button" class="btn btn-xs btn-default active-animation" ref-form="#modal-form-entretien" data-effect="mfp-sign"><i class="fa fa-edit"></i>
                                                                                </button>
                                                                                
                                                                                <button type="button" class="btn btn-xs btn-default active-animation"  ref-form="#modal-form-terminer" data-effect="mfp-sign"><i class="fa fa-power-off"></i>
                                                                                </button>
                                                                                 
                                                                            </td>
                                                                        </tr> 
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </form>
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

                            <h4 class="mt5 mbn text-muted fw500"> Rechercher un entretien</h4>
                            <h6 style="color:#000;" class="mbn mtn">Permet de retrouver les entrétiens clôturés</h6>
                            <hr class="short">

                            <h6 class="fw400">Immatriculation</h6>
                            <div class="section mb10">
                                <label for="customer-id" class="field prepend-icon">
                                    <input type="text" name="customer-id" id="customer-id" class="gui-input" placeholder="">
                                    <label for="customer-id" class="field-icon"><i class="fa fa-car"></i>
                                    </label>
                                </label>
                            </div>


                            <h6 class="fw400">Statut</h6>
                            <div class="section mb15">
                                <label class="field select">
                                    <select id="customer-location" name="customer-location">
                                        <option value="0" selected="selected"></option>
                                        <option value="1">ANNULE</option>
                                        <option value="2">TERMINE</option>
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div>



                            <h6 class="fw400">Periode d'entrée du véhicule</h6>
                            <div class="section row">
                                <div class="col-md-6">
                                    <label for="date_d" class="field prepend-icon">
                                        <input type="text" id="date_debut" name="date_debut" class="gui-input datepicker1 from_date br-dark" contenteditable="false" placeholder="">
                                        <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label for="date_f" class="field prepend-icon">
                                        <input type="text" id="date_fin" name="date_fin" class="gui-input datepicker1 from_date br-dark" contenteditable="false" placeholder="">
                                        <label class="field-icon"><i class="fa fa-calendar-o"></i>
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
 
            <div class="row">


                <div id="modal-form-entretien" class=" popup-basic admin-form mfp-with-anim mfp-hide" style="width:550px; max-width: none;">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"><i class="fa fa-edit"></i>Modification de l'entretien</span>
                        </div>
                        <!-- end .panel-heading section -->

                        <form method="post" action="manager/entretien/list.php" id="comment" enctype="multipart/form-data">
                            <div class="panel-body p25">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vehicule *</label>
                                            <input id="vehicule" name="vehicule" type="text" class="form-control required br-dark" readonly="true">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kilométrage</label>
                                            <input id="kilo" name="kilo" type="text" class="form-control required br-dark">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Garage</label>
                                            <select class="form-control" id="garage" name="garage"> 
                                                    <option value=""></option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type d'entretien</label>
                                            <select class="form-control" id="type_entretien" name="type_entretien">
                                                 
                                                    <option value=""> </option>
                                                 
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Date d'entrée prevue *</label>

                                            <label for="date_ms" class="field prepend-icon">
                                                <input type="text" id="date_entree_r" name="date_entree_p" class="gui-input datepicker1 from_date br-dark" contenteditable="false" placeholder="">
                                                <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date de sortie prevue *</label>

                                            <label for="date_ms" class="field prepend-icon">
                                                <input type="text" id="date_sortie_r" name="date_sortie_p" class="gui-input datepicker1 to_date br-dark" contenteditable="false" placeholder="">
                                                <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                

                                

                            </div>
                            <!-- end section row section -->


                    </div>
                    <!-- end .form-body section -->

                    <div class="panel-footer">
                        <button type="submit" class="btn btn-sm btn-dark">Modifier</button>
                    </div>
                    <!-- end .form-footer section -->



                    <input name="id_entretien" id="id_entretien" value="" type="hidden" />
                    <input type="hidden" name="action" value="entretien" />
                    <input type="hidden" name="section" value="entretien" />
                    <input type="hidden" name="operation" value="edit" />
                    </form>
                </div>   

            </div>
                            
                 
                
            <div class="row">
                                    

                <div id="modal-form-terminer" class=" popup-basic admin-form mfp-with-anim mfp-hide" style="width:550px; max-width: none;">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"><i class="fa fa-edit"></i>Terminer l'entretien</span>
                        </div>
                        <!-- end .panel-heading section -->

                        <form method="post" action="manager/entretien/list.php" id="comment" enctype="multipart/form-data">
                            <div class="panel-body p25">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vehicule *</label>
                                            <input id="id_vehicule" name="id_vehicule" type="text" class="form-control required br-dark" readonly="true">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Garage</label>
                                            <input id="leGarage" name="leGarage" type="text" class="form-control required br-dark" readonly="true">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Date d'entrée réelle *</label>

                                            <label for="date_ms" class="field prepend-icon">
                                                <input type="text" id="date_entree_r" name="date_entree_r" class="gui-input datepicker1 from_date br-dark" contenteditable="false" placeholder="">
                                                <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date de sortie réelle *</label>

                                            <label for="date_ms" class="field prepend-icon">
                                                <input type="text" id="date_sortie_r" name="date_sortie_r" class="gui-input datepicker1 to_date br-dark"contenteditable="false" placeholder="">
                                                <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Coût de l'entretien (HT)</label>
                                            <input id="cout" name="cout" type="text" class="form-control required br-dark" onchange="montant(this);">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Montant TVA</label>
                                            <input id="cout-ttc" readonly="true" name="cout-ttc" type="text" class="form-control required br-dark">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end section row section -->


                    </div>
                    <!-- end .form-body section -->

                    <div class="panel-footer">
                        <button type="submit" class="btn btn-sm btn-dark">Terminer</button>
                    </div>
                    <!-- end .form-footer section -->



                    <input name="entretien_id" id="entretien_id" value="" type="hidden" />
                    <input type="hidden" name="action" value="entretien" />
                    <input type="hidden" name="section" value="entretien" />
                    <input type="hidden" name="operation" value="fin" />
                    </form>
                </div>  

            </div>

        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <script type="text/javascript" src="../../../../vendor/jquery/jquery-1.11.1.min.js"></script>

        <script type="text/javascript" src="../../../../vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../../../../assets/js/bootstrap/bootstrap.min.js"></script>

        <!-- FileUpload JS -->
        <script type="text/javascript" src="../../../../vendor/plugins/fileupload/fileupload.js"></script>
        <script type="text/javascript" src="../../../../assets/js/bootstrap/holder.min.js"></script>

        <!-- Tagmanager JS -->
        <script type="text/javascript" src="../../../../vendor/plugins/tagsinput/tagsinput.min.js"></script>


        <script type="text/javascript" src="../../../../vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

        <!-- Datatables Tabletools addon -->
        <script type="text/javascript" src="../../../../vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>


        <!-- Datatables Bootstrap Modifications  -->
        <script type="text/javascript" src="../../../../vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="../../../../vendor/plugins/datatables/extensions/Editor/js/editor.bootstrap.js"></script>

        <script type="text/javascript" src="../../../../vendor/plugins/magnific/jquery.magnific-popup.js"></script>

        <script type="text/javascript" src="../../../../vendor/plugins/bootstrap-datepicker-14/js/bootstrap-datepicker2.js"></script>


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

                // grant file-upload preview onclick functionality
                $('.fileupload-preview').on('click', function () {
                    $('.btn-file > input').click();
                });

                // select dropdowns - placeholder like creation
                var selectList = $('.admin-form select');
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

                $(function () {
                    var datepicker = $.fn.datepicker.noConflict();
                    $.fn.bootstrapDP = datepicker;
                    $(".datepicker1").bootstrapDP({format: "dd/mm/yyyy"});



                    $.getScript("../../../../vendor/plugins/bootstrap-datepicker-14/js/bootstrap-datepicker2.js", function () {

                        var startDate = new Date('01/01/2012');
                        var FromEndDate = new Date();
                        var ToEndDate = new Date();

                        ToEndDate.setDate(ToEndDate.getDate() + 365);

                        $('.from_date').datepicker({
                            weekStart: 1,
                            startDate: '01/01/2012',
                            endDate: FromEndDate,
                            autoclose: true,
                            format: "dd/mm/yyyy"
                        })
                                .on('changeDate', function (selected) {
                                    startDate = new Date(selected.date.valueOf());
                                    startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                                    $('.to_date').datepicker('setStartDate', startDate);
                                });
                        $('.to_date')
                                .datepicker({
                                    weekStart: 1,
                                    startDate: startDate,
                                    endDate: ToEndDate,
                                    autoclose: true,
                                    format: "dd/mm/yyyy"
                                })
                                .on('changeDate', function (selected) {
                                    FromEndDate = new Date(selected.date.valueOf());
                                    FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
                                    $('.from_date').datepicker('setEndDate', FromEndDate);
                                });


                    });


                });

                // Form Skin Switcher
                $('.active-animation').on('click', function (ex) {

                    ex.preventDefault();
                    var $activeModal = $(this).attr('ref-form');
                    var $id = $(this).attr('ref-id');
                    var $veh = $(this).attr('ref-veh');
                    var $gar = $(this).attr('ref-gar');
                    var $type = $(this).attr('ref-type');
                    var $kilo = $(this).attr('ref-kilo');
                    $.magnificPopup.open({
                        removalDelay: 500, //delay removal by X to allow out-animation,
                        items: {
                            src: $activeModal
                        },
                        // overflowY: 'hidden', // 
                        callbacks: {
                            beforeOpen: function (e) {
                                var Animation = $('.active-animation').attr('data-effect');
                                this.st.mainClass = Animation;
                                $("#id_entretien").val($id);
                                $("#vehicule").val($veh);
                                $("#entretien_id").val($id);
                                $("#garage").val($gar);
                                $("#type_entretien").val($type);
                                $("#kilo").val($kilo);
                                
                                $('#garage option[value="'+$gar+'"]').prop('selected', true);
                                $('#type_entretien option[value="'+$type+'"]').prop('selected', true);
                                
                                $('#modal-form-terminer #leGarage').val($gar);
                                $('#modal-form-terminer #id_vehicule').val($veh);

                            }
                        },
                        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                    });

                });


                $('#datatable2').dataTable({
                    "aoColumnDefs": [{
                            'bSortable': false,
                            'aTargets': [-1]
                        }],
                    "oLanguage": {
                        "oPaginate": {
                            "sPrevious": "",
                            "sNext": ""
                        }
                    },
                    "iDisplayLength": 5,
                    "aLengthMenu": [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, "All"]
                    ],
                    "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
                    "oTableTools": {
                        "sSwfPath": "../../../../vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                    }
                });

            });
            
             function montant(mttc){
                document.getElementById('cout-ttc').value = ((mttc.value*18)/100);
            }
        </script>

         

        <!-- Jquery Validate -->
        <script src="../../../../vendor/plugins/validate/jquery.validate.min.js"></script>


        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
