 
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

        <%--<link href="../../../../assets/skin/default_skin/css/jquery.steps.css" rel="stylesheet">--%>
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

    <%
        
        EmployeService employeService = new EmployeService();
        ParamTypeMotifService paramTypeMotifService = new ParamTypeMotifService();
        OrgEmploye unEmploye = null;  
        List<ParamTypeMotif> listTypeMotif = null;
        try {
            Map <String,Object> map = new HashMap<>();
            map.put("login",USR); 
            unEmploye = employeService.FindByNamedQuery("OrgEmploye.findByLogin", map);
            listTypeMotif = paramTypeMotifService.FindAll();
            
            /*
            if(unEmploye){
                
            }*/
        
        } catch (Exception e) {
            
        }
     
     %>
      

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
                <%--<form class="navbar-form navbar-left navbar-search ml5" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search..." value="Search...">
                    </div>
                </form>--%>
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <%--<img src="../../../../assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">--%>
                            <span><% try{ out.print(session.getAttribute("username").toString()); } catch (Exception e) {} %> </span>
                            <span class="caret caret-tp hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">

                            <li class="br-t of-h">
                                <jsp:include page="../../../imports/main/logout.html" ></jsp:include>
                
                <?php include("../menu.php"); ?>
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
                    
                      
                    <jsp:include page="../../../imports/main/menu_default.html" >
                    <jsp:param name="menu" value="home" />
                    <jsp:param name="active" value="create" />
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
                                <a href="javascript:void(0);">Gestion de remisage</a>
                            </li>

                        </ul>
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
                                <span class="panel-title"><span class="fa fa-car pr5"></span> Gestion des Remisages</span>

                            </div>
                            <div class="panel-body p20 pb10">

                                <div class="tab-content pn br-n admin-form">

                                    <div id="tab1_1" class="tab-pane active">

                                        <form action="default/remisage/create" method="post" onsubmit="return confirm('Merci de confirmer la validation du remisage.');">


                                            <h5 class="text-danger m1">Enregistrer un véhicule pour entretien</h5>
                                            <h6 style="margin: 0; padding:0;">Les champs précédés du caractère astérisque (*) sont obligatoires</h6>


                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 10px;">


                                                    <div class="row">



                                                        <div class="col-md-6">
                                                            <div class="" style="position: relative; height: 16px;">
                                                                <div id="loading" class="cload" style="position:absolute; right: 2px; top:15px;">
                                                                    <img src="../../../../assets/img/loading/1.gif" alt="loading" />
                                                                </div>
                                                            </div>
                                                            <div class="row" style="background-color: #EBE8E8;">
                                                                <div class="col-md-12">
                                                                    <h6 class="mb1" style="color:#000;">Rechercher un véhicule</h6>
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

                                                            <div class="row" style="background-color: #D4D1D1;">

                                                                <div class="col-md-12">
                                                                    <h6 class="mb1" style="color:#000;">Organisation entreprise</h6>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Manager (N+1) </label>
                                                                        <input  type="text" class="form-control required" disabled value="<% try{out.print(unEmploye.getService().getChef().getNom()+" "+unEmploye.getService().getChef().getPrenom());} catch (Exception e) {} %>">

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Manager senior (N+2) </label>
                                                                        <input type="text" class="form-control required" disabled value="<% try{out.print(unEmploye.getService().getDepartement().getChef().getNom()+" "+unEmploye.getService().getDepartement().getChef().getPrenom());} catch (Exception e) {} %>">

                                                                    </div>
                                                                </div>


                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Directeur </label>
                                                                        <input type="text" class="form-control required" disabled value="<% try{out.print(unEmploye.getService().getDepartement().getDirection().getChef().getNom()+" "+unEmploye.getService().getDepartement().getDirection().getChef().getPrenom());} catch (Exception e) {} %>">

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Trajet de l'agent *</label>
                                                                <input id="trajet" name="trajet" type="text" class="form-control required br-dark">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Zone d'intervention *</label>
                                                                <input id="zone_inter" name="zone_inter" type="text" class="form-control required br-dark">
                                                            </div>

                                                            
                                                            <div class="form-group">
                                                                <label>Selectionnez le motif de remisage *</label>
                                                                <select name="type_motif" id="type_motif" data-placeholder="" class="chosen-select form-control br-dark" tabindex="2">
                                                                    <option></option>
                                                                    <% for(ParamTypeMotif p : listTypeMotif){ %>
                                                                    <option value="<%= p.getId()  %>"><%= p.getLibelle() %></option>
                                                                    <% } %>
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label>Détail du motif du remisage (travaux à réaliser) *</label>
                                                                <textarea name="motif"  class="form-control required br-dark" style="height: 75px;"></textarea>
                                                            </div>

                                                            <div class="row">
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="radio-custom mb5">
                                                                        <input type="radio" value="1" id="radioExample3" name="type_remisage" checked="true">
                                                                        <label for="radioExample3">Périodique</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="radio-custom mb5">
                                                                        <input type="radio" id="radioExample4" value="2" name="type_remisage">
                                                                        <label for="radioExample4">Permanent</label>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                            <br/>

                                                            <div class="row" id="barre-periode">

                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label>Date debut *</label>

                                                                        <label for="date_debut" class="field prepend-icon">
                                                                            <input type="text" id="date_debut" name="date_debut" class="gui-input datepicker1 from_date br-dark" contenteditable="false" placeholder="">
                                                                            <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                                            </label>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Date fin *</label>

                                                                        <label for="date_ms" class="field prepend-icon">
                                                                            <input type="text" id="date_fin" name="date_fin" class="gui-input datepicker1 to_date br-dark"contenteditable="false" placeholder="">
                                                                            <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                                            </label>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                            </div>




                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Valider la fiche de remisage</strong></button>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <input type="hidden" name="idVehicule" id="idVehicule" value="" />
                                            <input type="hidden" name="action" value="remisage" />
                                            <input type="hidden" name="operation" value="generateFiche" />

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
                         <form method="post">
                        <div class="p20 admin-form">

                            <h4 class="mt1 fw500"> Rechercher un dossier de remisage</h4>

                            <hr class="short">

                            <h6 class="fw400 text-dark">N° Dossier</h6>
                            <div class="section mb15">
                                <input type="text" name="dossier" id="dossier" class="gui-input br-dark" value="">

                            </div>


                            <h6 class="fw400  text-dark">Statut du dossier</h6>
                            <div class="section mb15">
                                <label class="field select">
                                    <select id="statut-dossier" name="statut-dossier" class="br-dark">
                                        
                                        <option value="1">En cours</option>
                                        <option value="2">Annulé</option>
                                        <option value="2">Refusé</option>
                                        <option value="2">Terminé</option>
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div>

                            <h6 class="fw400 text-dark">Période d'enregistrement</h6>
                            <div class="section row">
                                <div class="col-md-6">
                                    <label for="date1" class="field prepend-icon">
                                        <input type="text" name="date1" id="date1" class="gui-input datepicker1 from_date br-dark" placeholder="">
                                        <label for="date1" class="field-icon"><i class="fa fa-calendar"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label for="date2" class="field prepend-icon">
                                        <input type="text" name="date2" id="date2" class="gui-input datepicker1 to_date br-dark" placeholder="">
                                        <label for="date2" class="field-icon"><i class="fa fa-calendar"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <hr class="short">

                            <div class="section row">
                                <div class="col-sm-12">
                                    <button class="btn btn-dark btn-sm ph25" type="button">Rechercher</button>
                                    
                                </div>
                                
                            </div>

                        </div>
                            <input type="hidden" name="action" value="" />
                            <input type="hidden" name="operation" value="" />
                        </form>    

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
                    
                    
                    document.getElementById('loading').style.display = 'none';

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

                });

                function handleChange(e) {

                    if (e.value === "1") {
                        document.getElementById('barre-periode').style.display = 'block';
                    } else if (e.value === "2") {
                        document.getElementById('barre-periode').style.display = 'none';
                    }
                }


                function funcGetVehicule(v) {

                    if (v !== "") {

                        $.ajax({
                            url: 'create',
                            type: 'POST',
                            dataType: 'json',
                            data: {"immat": v, "action": "remisage", "operation": "findVehiculeAjx"},
                            beforeSend: function () {
                                document.getElementById('loading').style.display = 'block';
                                $('#marque').val('');
                                $('#modele').val('');

                            },
                            success: function (data) {
                                document.getElementById('loading').style.display = 'none';
                                if (data.isValid) {

                                    var $noteStyle = '';
                                    var $msg = '';

                                    if (data.result === "-1") {
                                        $msg = "Véhicule non trouvé";
                                        $noteStyle = "danger";
                                    } else if (data.result === "0") {
                                        $msg = "Véhicule non disponible";
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

                                document.getElementById('loading').style.display = 'none';
                            }
                        });
                        return false; // Pour empêcher le submit vers la page 'action'

                    }
                }
                                                                        
                                                                         
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
        </script>

        <!-- Jquery Validate -->
        <script src="../../../../vendor/plugins/validate/jquery.validate.min.js"></script>






        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
