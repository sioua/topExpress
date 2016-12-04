<?php echo"<meta charset='utf-8'>"; ?>
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

        
        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/skin/default_skin/css/theme.css">

        <!-- Admin Panels CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-forms/css/admin-forms.css">

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
                                <a href="javascript:void(0);">Gestions des sinistres</a>
                            </li>

                        </ul>
                    </div>
                    <div class="topbar-right">
                        <a href="../sinistre/list.php" class="btn btn-danger btn-sm fw600 ml10 btn-gradient btn-rounded"><span class="fa fa-list-ol pr5"></span> Liste des sinistres</a>
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
                                <span class="panel-title"><span class="fa fa-car pr5"></span> Enregistrer un sinistre</span>

                            </div>
                            <div class="panel-body p20 pb10">

                                <div class="tab-content pn br-n admin-form">

                                    <div id="tab1_1" class="tab-pane active">

                                        <form action="manager/sinistre/add.php" method="post">


                                            <h5 class="text-danger m1">Enregistrer un sinistre</h5>
                                            <h6 style="margin: 0; padding:0;">Les champs précédés du caractère astérisque (*) sont obligatoires</h6>


                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 10px;">


                                                    <div class="row">

                                                        <div class="col-md-6"> 

                                                            <div class="row" style="background-color: #EBE8E8;">
                                                                <div class="col-md-12">
                                                                    <h6 class="mb1" style="color:#000;">Rechercher le véhicule</h6>
                                                                    <h6 class="m1">Veuillez entrer l'immatriculation</h6>
                                                                </div>
                                                                <div class="col-md-11 mrn prn">
                                                                    <div class="form-group">
                                                                        <input id="vehicule" name="vehicule" maxlength="12" type="text" class="form-control required">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 mln pln">
                                                                    <button type="button" class="btn btn-sm btn-dark" onclick="funcGetVehicule($('#vehicule').val());">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </div>        
                                                                <div class="col-md-12">
                                                                    <div class="row" >
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Marque </label>
                                                                                <input id="marque" name="marque" type="text" class="form-control required" disabled>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Modèle </label>
                                                                                <input id="modele" name="modele" type="text" class="form-control" disabled>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row" style="background-color: #EBE8E8; border-top:1px solid #3B3F4F;">
                                                                <div class="col-md-12">
                                                                    <h6 class="mb1" style="color:#000;">Rechercher l'employé</h6>
                                                                    <h6 class="m1">Veuillez entrer le matricule</h6>
                                                                </div>
                                                                <div class="col-md-11 mrn prn">
                                                                    <div class="form-group">
                                                                        <input id="employe" name="employe" maxlength="12" type="text" class="form-control required">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 mln pln">
                                                                    <button type="button" class="btn btn-sm btn-dark" onclick="funcGetEmployer($('#employe').val());">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </div>        
                                                                <div class="col-md-12">
                                                                    <div class="row" >
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Nom </label>
                                                                                <input id="nom" name="nom" type="text" class="form-control required" disabled>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Prénom(s) </label>
                                                                                <input id="prenom" name="prenom" type="text" class="form-control" disabled>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                            <div class="row" style="background-color: #EBE8E8;">
                                                                    <p></p>
                                                                </div>
                                                            <div class="row">
                                                                <h6>Constat ?</h6>
                                                                <div class="col-md-6">
                                                                    <div class="radio-custom mb5">
                                                                        <input type="radio" id="radioExample4" value="2" name="constat" onchange="handleChange(this);">
                                                                        <label for="radioExample4">NON</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="radio-custom mb5">
                                                                        <input type="radio" value="1" id="radioExample3" name="constat" checked="true" onchange="handleChange(this);">
                                                                        <label for="radioExample3">OUI</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                 

                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>Cause *</label>
                                                                <textarea id="cause" name="cause" class="form-control required br-dark" style="height: 78px;"></textarea>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    
                                                                    <div class="form-group">
                                                                <label>Lieu du sinistre *</label>
                                                                <input id="lieu" name="lieu" type="text" class="form-control required br-dark">
                                                            </div>
                                                                   
                                                                    
                                                                </div>
                                                                <div class="col-md-6">
                                                                    
                                                                     <div class="form-group">
                                                                <label>Gravité *</label>
                                                                <select name="gravite" class="chosen-select form-control br-dark">
                                                                    <option value=""> </option>
                                                                     
                                                                </select>
                                                            </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                <label>Date de sortie du bon d'engagement *</label>
                                                                
                                                                <label for="dateBon" class="field prepend-icon">
                                                                        <input type="text" id="dateBon" name="dateBon" class="gui-input datepicker1 br-dark" placeholder="">
                                                                        <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                                        </label>
                                                                    </label>
                                                                
                                                                        
                                                           </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                <label>Date de transmission du dossier à la DJR *</label>
                                                                 
                                                                <label for="dateTran" class="field prepend-icon">
                                                                        <input type="text" id="dateTran" name="dateTran" class="gui-input datepicker1 br-dark" placeholder="">
                                                                        <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                                        </label>
                                                                    </label>
                                                            </div>
                                                                    </div>
                                                                    
                                                                </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Date de delivrance du bon de sortie *</label>
                                                                        <label for="dateDelivrance" class="field prepend-icon">
                                                                        <input type="text" id="dateDelivrance" name="dateDelivrance" class="gui-input datepicker1 br-dark" placeholder="">
                                                                        <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                                        </label>
                                                                    </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Date de declaration *</label>
                                                                        
                                                                        <label for="dateDeclar" class="field prepend-icon">
                                                                        <input type="text" id="dateDeclar" name="dateDeclar" class="gui-input datepicker1 br-dark" placeholder="">
                                                                        <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                                        </label>
                                                                    </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                
                                                                
                                                            
                                                                
                                                                <div class="row" id="barre-periode">

                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label>Numero OPV *</label>

                                                                        <label for="opv" class="field prepend-icon">
                                                                            <input type="text" id="opv" name="opv" class="gui-input br-dark">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                                
                                                                
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-dark pull-right m-t-n-xs" type="submit"><strong>Enregistrer le sinistre</strong></button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" id="idVehicule" name="idVehicule" value="" />
                                                    <input type="hidden" id="idEmploye" name="idEmploye" value="" />
                                                    <input type="hidden" name="action" value="sinistre" />
                                                    <input type="hidden" name="operation" value="add" />


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
 
                    <!-- end: .tray-right -->

                </section>
                <!-- End: Content -->
                <!-- End: Content -->

            </section>
            <!-- End: Content-Wrapper -->



        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->


        <script>
            var CONTEXT_MSG_ADD_SINISTRE = '';
        </script>


        <!-- jQuery -->
        <script type="text/javascript" src="../../../../vendor/jquery/jquery-1.11.1.min.js"></script>

        <script type="text/javascript" src="../../../../vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../../../../assets/js/bootstrap/bootstrap.min.js"></script>

        <!-- FileUpload JS -->
        <script type="text/javascript" src="../../../../vendor/plugins/fileupload/fileupload.js"></script>
        <script type="text/javascript" src="../../../../assets/js/bootstrap/holder.min.js"></script>
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


                if (CONTEXT_MSG_ADD_SINISTRE !== "") {

                    var $noteStyle = '';
                    var $msg = '';
                    if (CONTEXT_MSG_ADD_SINISTRE === "-1") {
                        $noteStyle = "danger";
                        $msg = "Echec de l'opération...";
                    } else if (CONTEXT_MSG_ADD_SINISTRE === "1") {
                        $noteStyle = "success";
                        $msg = "Sinistre ajouté avec succès!!!";
                    }

                    new PNotify({
                        title: 'Enregistrement sinistre',
                        shadow: true,
                        text: $msg,
                        type: $noteStyle,
                        width: "290px",
                        delay: 1400
                    });

                }


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





            function funcGetVehicule(v) {

                if (v !== "") {

                    $.ajax({
                        url: 'add',
                        type: 'POST',
                        dataType: 'json',
                        data: {"immat": v, "action": "sinistre", "operation": "findVehiculeAjx"},
                        beforeSend: function () {

                            //document.getElementById('loading').style.display = 'block';
                            $('#marque').val('');
                            $('#modele').val('');

                        },
                        success: function (data) {

                            if (data.isValid) {

                                var $noteStyle = '';
                                var $msg = '';

                                if (data.result === "-1") {
                                    $msg = "Véhicule non trouvé";
                                    $noteStyle = "danger";
                                } else if (data.result === "0") {
                                    $msg = "Véhicule déjà en entretien";
                                    $noteStyle = "warning";

                                } else if (data.result === "1") {
                                    $('#marque').val(data.marque);
                                    $('#modele').val(data.modele);
                                    $('#idVehicule').val(data.id);
                                }

                                if (data.result === "-1" || data.result === "0") {
                                    new PNotify({
                                        title: 'Recherche véhicule',
                                        shadow: true,
                                        text: $msg,
                                        type: $noteStyle,
                                        width: "290px",
                                        delay: 1400
                                    });
                                }
                            }



                        },
                        error: function (jqXHR, exception) {
                            if (jqXHR.status === 0) {
                                alert('Pas de connection. \n Vérifiez le réseau.');
                            } else if (jqXHR.status == 404) {
                                alert('La ressource demandée est introuvable');
                            } else if (jqXHR.status == 500) {
                                alert('Impossible de joindre le serveur.');
                            } else if (exception === 'parsererror') {
                                alert('Echec lors du parse du résultat.');
                            } else if (exception === 'timeout') {
                                alert('Time out error.');
                            } else if (exception === 'abort') {
                                alert('Echec de la requête.');
                            } else {
                                alert('Erreur non interceptée.\n' + jqXHR.responseText);
                            }

                            //document.getElementById('loading').style.display = 'none';
                        }
                    });
                    return false; // Pour empêcher le submit vers la page 'action'

                }
            }

            function handleChange(e){
                
                if(e.value==="1"){
                    document.getElementById('barre-periode').style.display = 'block';
                }else if(e.value==="2"){
                    document.getElementById('barre-periode').style.display = 'none';
                }
            }


            function funcGetEmployer(v) {

                if (v !== "") {

                    $.ajax({
                        url: 'add',
                        type: 'POST',
                        dataType: 'json',
                        data: {"mat": v, "action": "sinistre", "operation": "findEmployeAjx"},
                        beforeSend: function () {

                            //document.getElementById('loading').style.display = 'block';
                            $('#nom').val('');
                            $('#prenom').val('');

                        },
                        success: function (data) {

                            if (data.isValid) {

                                var $noteStyle = '';

                                if (data.result === "0") {

                                    $noteStyle = "warning";

                                } else if (data.result === "1") {
                                    $('#nom').val(data.nom);
                                    $('#prenom').val(data.prenom);
                                    $('#idEmploye').val(data.id);
                                }

                                if (data.result === "-1" || data.result === "0") {
                                    new PNotify({
                                        title: 'Recherche employé',
                                        shadow: true,
                                        text: data.message,
                                        type: $noteStyle,
                                        width: "290px",
                                        delay: 1400
                                    });
                                }
                            }



                        },
                        error: function (jqXHR, exception) {
                            if (jqXHR.status === 0) {
                                alert('Pas de connection. \n Vérifiez le réseau.');
                            } else if (jqXHR.status == 404) {
                                alert('La ressource demandée est introuvable');
                            } else if (jqXHR.status == 500) {
                                alert('Impossible de joindre le serveur.');
                            } else if (exception === 'parsererror') {
                                alert('Echec lors du parse du résultat.');
                            } else if (exception === 'timeout') {
                                alert('Time out error.');
                            } else if (exception === 'abort') {
                                alert('Echec de la requête.');
                            } else {
                                alert('Erreur non interceptée.\n' + jqXHR.responseText);
                            }

                            //document.getElementById('loading').style.display = 'none';
                        }
                    });
                    return false; // Pour empêcher le submit vers la page 'action'

                }
            }
        </script>

         

        <!-- Jquery Validate -->
        <script src="../../../../vendor/plugins/validate/jquery.validate.min.js"></script>



         




        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
