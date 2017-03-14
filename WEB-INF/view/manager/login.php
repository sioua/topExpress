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
 
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../../../assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="../../../assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../assets/img/favicon.ico">
 
</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Main -->
    <div id="main"  >

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info" id="login1">

                    <div class="row mb15 table-layout" >

                        <div class="col-xs-2 va-m pln" style="background-color: #000;">
                            <a href="#" title="Return to Dashboard">
                                <img width="40px" height="40px" src="../../../assets/img/logos/logo.jpeg" title="TopExpress Logo">
                            </a>
                        </div>
                            <div class="col-xs-6 va-m pln" style="background-color: #000;">
                            <p style="color: #fff; font-size:18px; padding: 0; margin: 0; margin-left: -15px;">Top Express </p>
                            <p style="color: #fff; font-size:10px; margin-left: -15px;">Gestion des véhicules de transport</p>
                        </div>

                        <div class="col-xs-6 text-right va-b pr5" style="background-color: #000;">
                             
                        </div>

                    </div>

                    <div class="panel panel-info mt10 br-n">

                  

                        <!-- end .form-header section -->
                        <form method="post" action="" id="frm-login">
                            <div class="panel-body bg-light p30">
                                <div class="row">
                                    <div class="col-sm-12 pr30">

                                        <div class="section row hidden">
                                          
                                        </div>

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Nom utilisateur</label>
                                            <label for="username" class="field prepend-icon">
                                                <input type="text" name="username" id="username" class="gui-input" placeholder="Enter username">
                                                <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Mot de passe</label>
                                            <label for="password" class="field prepend-icon">
                                                <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                    
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p10 ph15"> 
                                <input type="submit" name="connect" class="button btn-danger pull-right" value="Se connecter">
                                
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div> 

</body>

</html>

<?php
require("connexion.inc.php");

error_reporting(E_ALL);


    $a=3;
    if(isset($_POST['connect'])) 
    { 
        $req=$connexion->query("select login, pwd from user");
        $res=$req->fetchall();
        foreach($res as $row)

        {
        if($a!=1){
            if(empty($_POST['username']) && empty($_POST['password']))
            {
                $a=5;
            }
            elseif($_POST['username']==$row['login'] && $_POST['password']==$row['pwd'])
            {
                $a=1;
                echo '<script type="text/javascript">
                         window.location = "home.php"
                         </script>';
            }
            else{
                $a=0;
                }
            }
        }
    }

            if($a==1)
                {
                    echo"LE USER EST CONNU  <br />"; 
                }
                
            if($a==0)
                {
                echo"LE USER N'EXISTE PAS  <br />";
                
                }
                
            if($a==5)
                {
                    echo"LES CHAMPS SONT VIDES <br />";
                }
    ?>