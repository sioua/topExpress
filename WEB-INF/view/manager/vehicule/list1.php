 
<!DOCTYPE html>
<html>

    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>Parc auto</title>
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
                        Parc auto
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
                    <jsp:param name="active" value="list-veh" />
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
                                <a href="javascript:void(0);">Liste des véhicules</a>
                            </li>
                             
                        </ul>
                    </div>
                    <div class="topbar-right">
                         
                        <a href="manager/vehicule/save" class="btn btn-danger btn-sm fw600 ml10 btn-gradient btn-rounded"><span class="fa fa-plus pr5"></span> Ajouter véhicule</a>
                    </div>

                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <!-- Begin: Content -->
                <section id="content" class="table-layout animated fadeIn">

                    <!-- begin: .tray-center -->
                    <div class="tray tray-center p25 va-t posr">
                        <div class="panel p10 bg-dark">
                            <div class="row">
                                <div class="col-md-3">
                                    <table>
                                        <tr>
                                            <td>DMS : </td>
                                            <td>&nbsp;Date de Mise en Service</td>
                                        </tr>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- recent orders table -->
                        <div class="panel">

                            <div class="panel-body pn">
                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="text-center">Immat</th>
                                            <th class="text-center">Photo</th>
                                            <th class="text-center">Marque</th>
                                            <th class="text-center">Modèle</th>
                                            <th class="text-center">Gamme</th>
                                            <th class="text-center">Usage</th>
                                            <th class="text-center">DMS</th>
                                            <th class="text-center">Employé</th>
                                            <th class="text-center">Service</th>
                                            <th class="text-center">Departement</th>
                                            <th class="text-center">Direction</th>
                                            <th class="text-right">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                         

                                        <tr>
                                            <td class="text-center"><strong>immatriculation</strong></td>
                                            <td class="w50 text-center">
                                                 
                                                <img class="" style="border:2px solid #C4C4C4; height: 60px; width: 90px;" title="vehicule" src="/hmedia-pictures-ak-xat1/images/small/ .png">
                                                

                                            </td>
                                            <td class="text-center">
                                                 
                                            </td>
                                            <td class="text-center">
                                                 
                                            </td>
                                            
                                            <td class="text-center">
                                                 
                                            </td>
                                            
                                            <td class="text-center">
                                                 
                                            </td>
                                            <td class="text-center">
                                                
                                            </td>
                                            <td class="text-center">
                                               
                                                
                                            </td>
                                            <td class="text-center">
                                                
                                            </td>
                                            <td class="text-center">
                                                
                                            </td>
                                            <td class="text-center">
                                                
                                            </td>
                                            <td class="text-right">
                                                <a href="manager/vehicule/edit?arg= " class="btn btn-xs btn-dark">
                                                    <span class="fa fa-edit"></span>
                                                </a>&nbsp;<a href="manager/vehicule/detail?arg= " class="btn btn-xs btn-dark">
                                                    <span class="fa fa-eye"></span>
                                            </td>
                                        </tr>
 
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- end: .tray-center -->

                    
                    
                    
                    
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
                    "iDisplayLength": 25,
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
        </script>


        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
