 
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
            
            WfkRemisageTaskService wfkRemisageTaskService = new WfkRemisageTaskService();
            SimpleDateFormat laDate = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
            String query = "SELECT w FROM WkfRemisageTask w WHERE w.acteur.login = :login and w.statut.id = :id";
            
            List<WkfRemisageTask> listTaskRemisage = null;
           
        try {
            Map <String,Object> map = new HashMap<>();
            map.put("login",USR); 
            map.put("id", 1);
           listTaskRemisage = wfkRemisageTaskService.FindAllByCreateQuery(query, map);
           
        
        } catch (Exception e) {
            
        }
           
           int taille = listTaskRemisage.size();
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
                            <span><% try{ out.print(session.getAttribute("username").toString()); } catch (Exception e) {} %></span>
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
                    <jsp:param name="active" value="recep" />
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
                                <a href="javascript:void(0);">Gestion des remisages</a>
                            </li>
                           
                        </ul>
                    </div>
                   
                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-left -->
                <aside class="tray tray-left pn va-t tray250" data-tray-height="match">

                    <!-- quick compose message button -->
                    <div class="ph15 pv10 br-b br-light">
                        <button  type="button" class="btn btn-danger light btn-block fw600">Dossier remisage auto</button>
                    </div>

                    <!-- message menu  -->
                    <div class="p10">

                        <!-- menu links -->
                        <h4 class="ph10 mt10 mb5"> Menu </h4>
                        <ul class="nav nav-messages p5" role="menu">
                            
                            <li class="">
                                <a href="#" class="text-dark fw600 p10 animated animated-short fadeInUp">
                                    <span class="fa fa-folder-open pr5"></span> Dossier(s) remisage(s)
                                    <span class="pull-right lh20 h-20 label label-warning label-sm"><%= taille %></span>
                                </a>
                            </li>
                           
                        </ul>

                        <!-- menu tags -->
                        <h4 class="ph10 mv15"> Etat dossier </h4>
                        <hr class="mn br-light">
                        <ul class="nav nav-messages p5" role="menu">
                            <li class="">
                                <a href="#" class="text-dark fw600 p8 animated animated-short fadeInUp">
                                    En cours
                                    <span class="fa fa-circle text-warning fs14 pull-right lh20"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="text-dark fw600 p8 animated animated-short fadeInUp">
                                    Terminé
                                    <span class="fa fa-circle text-system fs14 pull-right lh20"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="text-dark fw600 p8 animated animated-short fadeInUp">
                                    Annulé
                                    <span class="fa fa-circle text-primary fs14 pull-right lh20"></span>
                                </a>
                            </li>
                            
                        </ul>

                    </div>

                </aside>
                <!-- end: .tray-left -->

                <!-- begin: .tray-center -->
                <div class="tray tray-center pn va-t bg-light">

                    <!-- message toolbar header -->
                    <div class="pv10 pl15 bg-white pr10 br-b">
                        <div class="row table-layout">

                            <!-- toolbar left btn group -->
                            <div class="hidden-xs hidden-sm col-md-3 va-m pln">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default light" onclick="location.reload(); "><i class="fa fa-refresh"></i>
                                    </button>
                                   
                                </div>
                            </div>

                            <!-- toolbar right btn group -->
                            <div class="col-xs-12 col-md-9 text-right prn">
                                
                            </div>

                        </div>
                    </div>

                    <!-- message listings table -->
                    <table id="message-table" class="table admin-form theme-warning tc-checkbox-1">
                        <thead>
                            <tr class="">
                                <th class="text-center hidden-xs">N° Dossier</th>
                               
                                <th>Emetteur</th>
                                <th class="hidden-xs">Statut</th>
                                <th>Véhicule concerné</th>
                                <th class="hidden-xs"></th>
                                <th class="text-center">Date création</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <% for(WkfRemisageTask r : listTaskRemisage){ %>
                            <tr class="message-unread">
                                <td class="hidden-xs" attr-dossier="<%= r.getId() %>">
                                    <%
                                    try {
            out.print(r.getDossier().getId());
        } catch (Exception e) {
        }
                                    %>
                                </td>
                                
                                <td class="">
                                    <%
                                    try {
            out.print(r.getDossier().getEmploye().getNom()+" "+r.getDossier().getEmploye().getPrenom());
        } catch (Exception e) {
        }
                                    %>
                                </td>
                                <td class="hidden-xs" attr-dossier="<%= r.getId() %>">
                                    <%if(r.getStatut().getId()==1){ %>
                                    <span class="badge badge-warning mr10 fs11"> en cours </span>
                                   <% } %>
                                   <%if(r.getStatut().getId()==2){ %>
                                    <span class="badge badge-danger mr10 fs11"> en cours </span>
                                   <% } %>
                                   <%if(r.getStatut().getId()==3){ %>
                                    <span class="badge badge-success mr10 fs11"> en cours </span>
                                   <% } %>
                                    
                                </td>
                                <td class="" attr-dossier="<%= r.getId() %>"><%
                                    try {
            out.print(r.getDossier().getVehicule().getImmatriculation()+" - "+r.getDossier().getVehicule().getCarrosserie().getModele().getMarque().getLibelle()+" "+r.getDossier().getVehicule().getCarrosserie().getModele().getLibelle());
        } catch (Exception e) {
        }
                                    %></td>
                                <td class="hidden-xs" attr-dossier="<%= r.getId() %>"><i class="fa fa-paperclip fs15 text-muted va-b"></i>
                                </td>
                                <td class="text-right fw600" attr-dossier="<%= r.getId() %>">
                                     <%
                                    try {
                                        
                                        if(r.getDateCreation()!=null){
                                            
                                            out.print(laDate.format(r.getDateCreation()));
                                        }
            
        } catch (Exception e) {
        }
                                    %>
                                </td>
                                <td>
                                  <a href="default/remisage/detail?arg0=<%= URLEncoder.encode(EncryptDecryptStringWithDES.encrypt(r.getDossier().getId().toString()), "UTF-8")%>&arg1=<%= URLEncoder.encode(EncryptDecryptStringWithDES.encrypt(r.getId().toString()), "UTF-8")%>" class="btn btn-xs btn-dark">
                                                    <span class="fa fa-eye"></span>
                                  </a>
                                </td>
                            </tr>
                            <% } %>
                        </tbody>
                    </table>

                </div>
                <!-- end: .tray-center -->

            </section>
            <!-- End: Content -->

        </section>

      

    </div>
    <!-- End: Main -->

    
    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="../../../../vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../../../../vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="../../../../assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Admin Dock -->
    <script type="text/javascript" src="../../../../assets/admin-tools/admin-plugins/admin-dock/dockmodal.js"></script>

    <!-- Summernote JS -->
    <script type="text/javascript" src="../../../../vendor/editors/summernote/summernote.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="../../../../assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="../../../../assets/js/main.js"></script>
    <script type="text/javascript" src="../../../../assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS    
            Demo.init();

            

            

            // Init Summernote
            $('.summernote-quick').summernote({
                height: 275, //set editable area's height
                focus: false, //set focus editable area after Initialize summernote
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', ]],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                ]
            });



        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
