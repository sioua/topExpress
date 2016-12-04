 
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
        <link rel="stylesheet" type="text/css" href="../../../../assets/skin/default_skin/css/theme.css">

        <!-- Datatables CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

         <link rel="stylesheet" type="text/css" href="../../../../vendor/plugins/magnific/magnific-popup.css">


        <!-- Admin Panels CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-forms/css/admin-forms.css">
        
         <!-- Admin Modals CSS -->
        <link rel="stylesheet" type="text/css" href="../../../../assets/admin-tools/admin-plugins/admin-modal/adminmodal.css">


        <!-- Favicon -->
        <link rel="shortcut icon" href="../../../../assets/img/favicon.ico">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="dashboard-page sb-l-o sb-r-c">

        <%
            ResultSet rs = null;
            NumberFormat formatterMontant = new DecimalFormat("###,###.##");
            try {

                Database db = new Database();
                rs = db.dbQuery(SqlQuery.qAllEntretienCher);

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

                    <!-- sidebar menu -->

                    <jsp:include page="../../../imports/main/menu.html" >
                        <jsp:param name="menu" value="home" />
                        <jsp:param name="active" value="home" />
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
                        <ol class="breadcrumb">
                            <%-- <li class="crumb-active">
                                 <a href="dashboard.html">Dashboard</a>
                             </li>--%>
                            <li class="crumb-icon">
                                <a href="javascript:void(0);">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li class="crumb-link">
                                <a href="javascript:void(0);">Bienvenue sur l'application de gestion du Top Express</a>
                            </li>
                            <%-- <li class="crumb-trail"></li>--%>
                        </ol>
                    </div>

                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="animated fadeIn">


                    <div class="tray tray-center p25 va-t posr">



                        <div class="panel">


                            <div class="panel-body pn">



                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="text-center">Immatriculation</th>
                                            <th class="text-center">Montant depensé</th>
                                            <th class="text-center">Marque</th>
                                            <th class="text-center">Modèle</th>
                                            <th class="text-center">Gamme</th>
                                            <th class="text-center">Usage</th>
                                            <th class="text-center">DMS</th>
                                             <%--<th class="text-center">Employé</th>
                                           <th class="text-center">Service</th>
                                            <th class="text-center">Departement</th>
                                            <th class="text-center">Direction</th>
                                            <th class="text-right">Action</th>--%>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <%  while (rs.next()) { %>

                                        <tr>
                                            <td class="text-center">
                                                <strong>
                                                    <% try {%>
                                                    <%= rs.getString("immat")%>
                                                    <%} catch (Exception e) {
                                                    } %>
                                                </strong>
                                            </td>
                                            <td class="text-center">
                                                <% try { %>

                                                <% if (rs.getString("depense") != null) { %>
                                                <% int s = new Integer(rs.getString("depense")); %>
                                                <% if (s < 5000000) {%>
                                                <a href="javascript:void(0)" class="bg-success p5 active-animation" ref-ms="<%= rs.getString("dms") %>" ref-veh="<%= rs.getString("marque") %> <%= rs.getString("modele") %> <%= rs.getString("gamme") %>" ref-immat="<%= rs.getString("immat") %>" ref-id="<%= rs.getString("id") %>" ref-form="#modal-form-entretien" data-effect="mfp-sign" ><span><%= formatterMontant.format(s)%></span></a>
                                                        <% } else if (s >= 5000000 && s < 10000000) {%>
                                                <a href="javascript:void(0)" class="bg-warning p5 active-animation" ref-ms="<%= rs.getString("dms") %>" ref-veh="<%= rs.getString("marque") %> <%= rs.getString("modele") %> <%= rs.getString("gamme") %>" ref-immat="<%= rs.getString("immat") %>" ref-id="<%= rs.getString("id") %>" ref-form="#modal-form-entretien" data-effect="mfp-sign"><span><%= formatterMontant.format(s)%></span></a>
                                                <% } else if (s >= 10000000) {%>
                                                <a href="javascript:void(0)" class="bg-danger p5 active-animation" ref-ms="<%= rs.getString("dms") %>" ref-veh="<%= rs.getString("marque") %> <%= rs.getString("modele") %> <%= rs.getString("gamme") %>" ref-immat="<%= rs.getString("immat") %>" ref-id="<%= rs.getString("id") %>" ref-form="#modal-form-entretien" data-effect="mfp-sign"><span><%= formatterMontant.format(s)%></span></a>
                                                <% } %>
                                                <% } %>
                                                <%} catch (Exception e) {
                                                } %>
                                            </td>
                                            <td>
                                                <% try {%>
                                                <%= rs.getString("marque")%>
                                                <%} catch (Exception e) {
                                                } %>
                                            </td>
                                            <td>
                                                <% try {%>
                                                <%= rs.getString("modele")%>
                                                <%} catch (Exception e) {
                                                } %>
                                            </td>
                                            <td>
                                                <% try {%>
                                                <%= rs.getString("gamme")%>
                                                <%} catch (Exception e) {
                                                } %>
                                            </td>
                                            <td>
                                                <% try {%>
                                                <%= rs.getString("utilisation")%>
                                                <%} catch (Exception e) {
                                                } %>
                                            </td>
                                            <td>
                                                <% try {%>
                                                <%= rs.getString("dms")%>
                                                <%} catch (Exception e) {
                                                } %>
                                            </td>
                                            
                                            
                                        </tr>
                                        <% } %>

                                    </tbody>

                                </table>

                            </div>



                            <%-- Zone popup --%> 
                            <div class="row">

                                <div id="modal-form-entretien" class=" popup-basic admin-form mfp-with-anim mfp-hide" style="width:80%; height: 450px; max-width: none;">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title"><i class="fa fa-list"></i>Détail depense entretien</span>
                                        </div>

                                        <div class="panel-body p5">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="" style="position: relative; height: 16px;">
                                                        <div id="loading" class="cload" style="position:absolute; right: 2px; top:-7px;">
                                                            <img src="../../../../assets/img/loading/1.gif" alt="loading" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="bg-dark p5 w450">
                                                    <h3 id="immat" class="pn mn"></h3>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h5 id="veh"></h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h6>Date mise en service : <strong id="ms"></strong></h6>
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pull-right bg-danger p5">
                                                        <p><strong>Montant total depense (fcfa)</strong></p>
                                                        <h2 class="mn pn" id="total"></h2>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                                        <div class="row">
                                                            &nbsp;   
                                                        </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    
                                                     <table class="table" id="tDetail">
                                        <thead>
                                            <tr class="warning">
                                                <th>Garage</th>
                                                <th>Date d'entrée</th>
                                                <th>Date de sortie</th>
                                                <th>Kilométrage</th>
                                                <th>Type entretien</th>
                                                <th>montant TVA</th>
                                                <th>montant HT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            
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



                </section>
                <!-- End: Content -->


            </section>
            <!-- End: Content-Wrapper -->



        </div>
        <!-- End: Main -->


        <%
            } catch (Exception e) {
            } finally {
                try {
                    rs.getStatement().close();
                } catch (Exception e) {
                }
            }
        %>
        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <script type="text/javascript" src="../../../../vendor/jquery/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../../../../vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../../../../assets/js/bootstrap/bootstrap.min.js"></script>


        <script type="text/javascript" src="../../../../vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

        <!-- Datatables Tabletools addon -->
        <script type="text/javascript" src="../../../../vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>


        <!-- Datatables Bootstrap Modifications  -->
        <script type="text/javascript" src="../../../../vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="../../../../vendor/plugins/datatables/extensions/Editor/js/editor.bootstrap.js"></script>


        <script type="text/javascript" src="../../../../vendor/plugins/magnific/jquery.magnific-popup.js"></script>

        
        <!-- Holder js  -->
        <script type="text/javascript" src="../../../../assets/js/bootstrap/holder.min.js"></script>

        <!-- Theme Javascript -->
        <script type="text/javascript" src="../../../../assets/js/utility/utility.js"></script>
        <script type="text/javascript" src="../../../../assets/js/main.js"></script>
        <script type="text/javascript" src="../../../../assets/js/demo.js"></script>


        <!-- Page Javascript -->
        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";

                // Init Theme Core     
                Core.init({
                    sbm: "sb-l-c",
                });

                // Init Demo JS
                Demo.init();

                document.getElementById('loading').style.display = 'none';

                $('.active-animation').on('click', function (ex) {
                
                ex.preventDefault();
                
                var $activeModal = $(this).attr('ref-form');
                var $id =$(this).attr('ref-id');
                var $ms =$(this).attr('ref-ms');
                var $veh =$(this).attr('ref-veh');
                var $immat =$(this).attr('ref-immat');
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
                            $("#tDetail tbody").empty();
                            $("#ms").html($ms);
                            $("#veh").html($veh);
                            $("#immat").html($immat);
                            $('#total').html("0");
                            getDetailVehicule($id);
                            
                            
                        }
                    },
                    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                });

            });


                // getDetailTopVehiculeCher();



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
                    "bSort": false,
                    "iDisplayLength": -1,
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




            function getDetailVehicule(id) {
                $.ajax({
                    url: 'topEntretien',
                    type: 'POST',
                    dataType: 'json',
                    data: {"id":id,"action": "dashboard", "operation": "detailUnEntretien"},
                    beforeSend: function () {

                       document.getElementById('loading').style.display = 'block';

                    },
                    success: function (data) {

                        if (data.isValid) {

                           $('#total').html(data.total);
                            
                            for (var i = 0, len = data.list.length; i < len; ++i) {

                                $("#tDetail").find('tbody')
                                        .append($('<tr>')
                                                .append($('<td>')
                                                        .text(data.list[i].garage)
                                                        )
                                                .append($('<td>')
                                                        .text(data.list[i].der)
                                                        )
                                                .append($('<td>')
                                                        .text(data.list[i].dsr)
                                                        )
                                                .append($('<td>')
                                                        .text(data.list[i].km)
                                                        )
                                                .append($('<td>')
                                                        .text(data.list[i].entretien)
                                                        )
                                                .append($('<td>').append($('<strong>').text(data.list[i].montant_htv))
                                                       
                                                        )
                                                .append($('<td>').append($('<strong>').text(data.list[i].montant_tva))
                                                        
                                                        )
                                                        
                                                );
                            }




                        }

                        document.getElementById('loading').style.display = 'none';
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

                        //document.getElementById('loading'+t).style.display = 'none';
                    }
                });
                return false; // Pour empêcher le submit vers la page 'action'
            }

        </script>

        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
