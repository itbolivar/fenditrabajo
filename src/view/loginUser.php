<?php

namespace src\view;

use src\controller\user_session;
use src\controller\loginSession;

require_once '../../src/config.inc.php';
require_once constant('PATHSRC') . 'libraryFendi.php';


$errorLog = '';

if (isset($_POST['candidatoLogin'])) {
    $login = loginSession::getInstance();
    $uSesion = user_session::getInstance();
    if ($_POST['password'] != '') {
        $uSesion->setCurrentID($login->getID());
        $uSesion->setCurrentUserCodSicom((isset($_POST['user_codsicom']))  ? $_POST['user_codsicom'] : '');
        if ($login->postUsuarioEmpresaFrontEnd() == false) {
            $errorLogin = "Usuario y Contraseña Invalidos. ";
        }
    } else {
        $errorLogin = "No se acepta campos vacios. Verifique la informacion";
    }
}

if (isset($_POST['eds_empleadorLogin'])) {
    $login = loginSession::getInstance();
    $uSesion = user_session::getInstance();
    if ($_POST['emp_password'] != '') {
        $uSesion->getCurrentIdSession($login->getID());
        $uSesion->getCurrentIdSession((isset($_POST['user_codsicom2']))  ? $_POST['user_codsicom2'] : '');
        if ($login->postUsuarioEmpresaFrontEnd() == false) {
            $errorLogin = "Codigo Sicom y Contraseña Invalidos. <br> Intente de Nuevo.";
        }
    } else {
        $errorLogin = "No se acepta campos vacios EDS Password";
    }
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio Fenditrabajo</title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="https://fendipetroleo.com/nuevoF/public/icon/favicon.ico">

    <!-- Owl carousel -->
    <link href="<?php echo $css_dir ?>owl.carousel.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- Font Awesome -->
    <link href="<?php echo $css_dir ?>font-awesome.css" rel="stylesheet">

    <!-- Custom Style -->
    <link href="<?php echo $css_dir ?>main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

    <style type="text/css">
        /*Form Panel*/
    </style>

</head>

<body>
    <!-- Header start -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-10"> <a href="<?php echo $PORTAL_URL ?>" class="logo">
                        <img src="<?php echo $img_dir ?>logo.png" alt="" /></a>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <!-- Nav start -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-collapse collapse" id="nav-main">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo $PORTAL_URL ?>">Inicio</span></a>
                            </ul>
                            <!-- Nav collapes end -->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Nav end -->
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- Header container end -->
    </div>
    <!-- Header end -->


    <div class="listpgWraper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="userccount">
                        <div class="socialLogin">
                            <img src="<?php echo $img_dir ?>logo.png" class="logo" width="50%" height="50%" alt="" />
                            <h5>Inicio de sesion</h5>
                        </div>
                        <?php
                        if (isset($errorLogin)) {
                            echo "<div class='alert alert-danger alert-dismissible' role='alert' style='text-align: center;'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span></button>
                                  $errorLogin
                                </div>";
                        }
                        ?>


                        <div class="userbtns ">
                            <h3> <i class="glyphicon glyphicon-user"></i> Persona</h3>
                        </div>

                        <form action="login.php" method="post" id="form1">
                            <div class="tab-content">
                                <!-- Login Candidato o Usuario -->
                                <div id="candidato" class="formpanel tab-pane active">
                                    <div class="formpanel">
                                        <div class="formrow">
                                            <input type="email" name="user_codsicom" id="user_codsicom" class="form-control" placeholder="Digite el email registrado">
                                        </div>
                                        <div class="formrow">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Digite la contraseña registrada">
                                        </div>
                                        <button type="submit" class="btn" name="candidatoLogin" id="candidatoLogin" value="Ingresar">Ingresar</button>
                                    </div>
                                </div>
                                <!-- login form  end-->

                                <!-- Login Emresa o Distribuidor o EDS -->
                                <div id="eds_empleador" class="formpanel tab-pane">
                                    <div class="formpanel">
                                        <div class="formrow">
                                            <input type="text" name="user_codsicom2" id="user_codsicom2" class="form-control" placeholder="Codigo Sicom">
                                        </div>
                                        <div class="formrow">
                                            <input type="password" name="emp_password" id="emp_password" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <button type="submit" class="btn" name="eds_empleadorLogin" id="eds_empleadorLogin" value="Ingresar">Ingresar</button>
                                    </div>
                                </div>
                                <!-- sign up form end-->
                            </div>
                        </form>
                    </div>

                    <div class="newuser">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        ¿Nuevo Usuario? <a href="registroUser.php">Registrate aquí</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <div class="footerWrap">
        <div class="container">
            <!--About Us-->
            <div class="ft-logo"><img src="<?php echo $img_dir ?>logo.png" alt="texto adicional"></div>
            <!-- Social Icons -->
            <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true">
                    </i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong> <span>Fenditrabajo Nacional</span> 2021</strong>. Todos los derechos reservados. <br />
                <p class="text-center">Desarrollado por Mesa IT.</p>
            </div>
            <!-- Social Icons end -->
            <!--About us End-->
        </div>
    </div>
    <!--Footer end-->

    <!-- Bootstrap's JavaScript 
<script src="<?php echo $js_dir ?>jquery-2.1.4.min.js"></script>
<script src="<?php echo $js_dir ?>bootstrap.min.js"></script> -->

    <script src="<?php echo $js_dir ?>jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Owl carousel -->
    <script src="<?php echo $js_dir ?>owl.carousel.js"></script>

    <!-- Custom js -->
    <script src="<?php echo $js_dir ?>script.js"></script>
</body>

</html>
<?php


?>