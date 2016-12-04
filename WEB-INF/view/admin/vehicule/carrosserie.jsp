 
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
            CarrosserieService carroService = new CarrosserieService();
            MarqueService marqueService = new MarqueService();
            //ModeleService modService = new ModeleService();
            List<Carrosserie> listCarro = carroService.FindAll();
            List<Marque> listModel = marqueService.FindAll();
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

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <%--<img src="../../../../assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">--%>
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

                    <jsp:include page="../../../imports/main/menu_admin.html" >
                    <jsp:param name="menu" value="home" />
                    <jsp:param name="active" value="veh" />
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
                            <%--
                            <li>
                                <a href="javascript:void(0);">Dashboard</a>
                            </li>
                            --%>
                            <li class="active">
                                <a href="javascript:void(0);">Carrossérie</a>
                            </li>
                            <%--<li>
                                <a href="../vehicule/modele">Carrosséries</a>
                            </li>
                            <li>
                                <a href="ecommerce_settings.html">Settings</a>
                            </li>--%>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <a href="../vehicule/modele" class="btn btn-danger btn-sm fw600 ml10 btn-gradient btn-rounded"><span class="fa fa-plus pr5"></span> Ajouter modèle</a>
                        <a href="../vehicule/marque" class="btn btn-danger btn-sm fw600 ml10 btn-gradient btn-rounded"><span class="fa fa-plus pr5"></span> Ajouter marque</a>
                        <%--<a href="../vehicule/save" class="btn btn-danger btn-sm fw600 ml10 btn-gradient btn-rounded"><span class="fa fa-car pr5"></span> Ajouter un véhicule</a>
                        <a href="../vehicule/list.php" class="btn btn-danger btn-sm fw600 ml10 btn-gradient btn-rounded"><span class="fa fa-list pr5"></span> Liste des véhicules</a>--%>
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
                                <span class="panel-title"><span class="fa fa-car pr5"></span> Gestion des Catégories</span>

                            </div>
                            <div class="panel-body p20 pb10">

                                <div class="tab-content pn br-n admin-form">

                                    <div id="tab1_1" class="tab-pane active">



                                        <div class="row">
                                            <div class="col-md-12" style="margin-top: 10px;">

                                                <form action="manager/vehicule/modele" method="post">

                                                    <div class="panel" id="p13" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                                        <div class="panel-heading ui-sortable-handle">
                                                            <span class="panel-title"> Ajouter une catégorie de véhicule</span>
                                                            <span class="panel-controls"><a href="#" class="panel-control-loader"></a><a href="#" class="panel-control-color"></a></span></div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h6 style="margin: 0;">Les champs précédés du caractère astérisque (*) sont obligatoires</6>
                                                                    <p>&nbsp;<p/>
                                                                    <div class="col-md-6">

                                                                        <div class="form-group">
                                                                            <label>Choix la marque *</label>
                                                                            <select name="marque" class="chosen-select form-control" onchange="setModele(this)">
                                                                                <option value=""> </option>
                                                                                <% for (Marque m : listModel) {%>
                                                                                <option value="<%= m.getId()%>"><%= m.getLibelle()%></option>
                                                                                <% } %>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Choix du modèle *</label>
                                                                            <select name="modele" id="modele" class="chosen-select form-control">
                                                                                <option value=""></option>
                                                                                <%--
                                                                                <% for(Modele m: listModel){%>
                                                                                <option value="<%= m.getId()%>"><%= m.getMarque().getLibelle() %> <%= m.getLibelle()%></option>
                                                                                <% } %>
                                                                                --%>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Nom de la catégorie *</label>
                                                                            <input id="carro" name="carro" type="text" class="form-control required">
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-12">
                                                                            <br/>
                                                                            <div class="form-group">
                                                                                <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>Enregistrer</strong></button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                            </div>



                                                            <input type="hidden" name="action" value="vehicule" />
                                                            <input type="hidden" name="section" value="carrosserie" />
                                                            <input type="hidden" name="operation" value="add" />
                                                            </form>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" style="margin-top: 10px;">

                                                <div class="panel" id="spy4">
                                                    <div class="panel-heading" style="padding:0;">
                                                        <span class="panel-title">
                                                            <span class="glyphicons glyphicons-table"></span>Liste des catégories</span>

                                                    </div>
                                                    <div class="panel-body pn">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered mbn" id="datatable2">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Marque</th>
                                                                        <th>Modèle</th>
                                                                        <th>Catégorie</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <% for (Carrosserie c : listCarro) {%>
                                                                    <tr>
                                                                        <td><%= c.getId()%></td>
                                                                        <td> <% try { if(c.getModele().getMarque()!=null){out.print(c.getModele().getMarque().getLibelle());} } catch (Exception e) { } %></td>
                                                                        <td><% try { if(c.getModele()!=null){out.print(c.getModele().getLibelle());} } catch (Exception e) { } %></td>
                                                                        <td><%= c.getLibelle()%></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-xs btn-default"><i class="fa fa-edit"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <% }%>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


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

                            <h4 class="mt5 text-muted fw500"> Rechercher un véhicule</h4>

                            <hr class="short">

                            <div class="section mb10">
                                <label for="customer-id" class="field prepend-icon">
                                    <input type="text" name="customer-id" id="customer-id" class="gui-input" placeholder="Immatriculation">
                                    <label for="customer-id" class="field-icon"><i class="fa fa-car"></i>
                                    </label>
                                </label>
                            </div>


                            <h6 class="fw400">Catégorie véhicule</h6>
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

                            <h6 class="fw400">Catégorie véhicule</h6>
                            <div class="section mb15">
                                <label class="field select">
                                    <select id="customer-company" name="customer-company">
                                        <option value="0" selected="selected">Rechercher avec le modèle</option>

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
                                    <%--<label class="field option ml15">
                                        <input type="checkbox" name="info">
                                        <span class="checkbox"></span> <span class="text-muted">Save Search</span>
                                    </label>--%>
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
        
        <script>
            var CONTEXT_MSG_ADD_CARRO = '<% if (session.getAttribute("isAddCarro") != null) {
                    out.print(session.getAttribute("isAddCarro").toString());
                    session.removeAttribute("isAddCarro");
                }%>';
        </script>

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

        <%--
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>

<script src="../../../../vendor/plugins/chosen/chosen.jquery.js"></script>
        --%>

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
            
            if (CONTEXT_MSG_ADD_CARRO !== "") {

                    var $noteStyle ='';
                    var $msg='';
                    if(CONTEXT_MSG_ADD_CARRO === "-1"){
                        $noteStyle="danger";
                        $msg="Echec de l'opération...";
                    }else if(CONTEXT_MSG_ADD_CARRO === "0"){
                        $noteStyle="warning";
                        $msg="Exception, la carrosserie existe déjà";
                    }else if(CONTEXT_MSG_ADD_CARRO === "1"){
                        $noteStyle="success";
                        $msg="carrosserie ajoutée avec succès!!!";
                    }

                    new PNotify({
                        title: 'AJOUT CARROSSERIE',
                        shadow: true,
                        text: $msg,
                        type: $noteStyle,
                        width: "290px",
                        delay: 1400
                    });

                }
            

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

            // Init tagsinput plugin
            $("input#tagsinput").tagsinput({
                tagClass: function (item) {
                    return 'label label-default';
                }
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


        function setModele(sel) {
            var $m = sel.options[sel.selectedIndex].value;
            if ($m !== "") {
                getListModele($m);
            }

        }

        function getListModele(m) {

            if (m !== "") {
                $.ajax({
                    url: 'carrosserie',
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

            }

            return false;
        }

        </script>

        <%--<script src="../../../../assets/js/jquery.steps.min.js"></script>--%>

        <!-- Jquery Validate -->
        <script src="../../../../vendor/plugins/validate/jquery.validate.min.js"></script>



        <%--
        <script>
          var config = {
            '.chosen-select'           : {},
            '.chosen-select-deselect'  : {allow_single_deselect:true},
            '.chosen-select-no-single' : {disable_search_threshold:10},
            '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
            '.chosen-select-width'     : {width:"95%"}
          }
          for (var selector in config) {
            $(selector).chosen(config[selector]);
          }
        </script>--%>




        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
