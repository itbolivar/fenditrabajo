<?php
namespace src\view\distri\view;

use src\controller\user_session;
use src\controller\modalMaster;

//require_once '../../config.inc.php';
include $_SERVER["DOCUMENT_ROOT"].'/fenditrabajo/src/libraryFendi.php';

header("Expires: Tue, 01 Jan 1900 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$modal = new modalMaster();


$uSesion = user_session::getInstance();
if (!isset($_SESSION['id_usuaroempresa'])  || !isset($_SESSION['user_codsicom'])) {
    header('location: ../status/401.html');
}


$id_usuario                 = $_SESSION["id_usuaroempresa"];
$user_codsicom              = $_SESSION["user_codsicom"];

$uSesion->setCurrentID($id_usuario);
$uSesion->setCurrentUserCodSicom($user_codsicom);


//$eds = "Eds The OilExample";



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Boorando Cache -->
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">

<title>EDS-Fenditrabajo</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="<?php echo constant('IMG')?>favicon/favicon.ico">

<!-- Slider -->
<link href="<?php echo constant('JS')?>revolution-slider/css/settings.css" rel="stylesheet">

<!-- Owl carousel -->
<link href="<?php echo constant('CSS')?>owl.carousel.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="<?php echo constant('CSS')?>bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="<?php echo constant('CSS')?>font-awesome.css" rel="stylesheet">

<!-- Custom Style -->
<link href="<?php echo constant('CSS')?>main.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Header start -->
<div class="header">

  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="index.php" class="logo">
      <img src="<?php echo constant('IMG')?>logo.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
          <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12">
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Inicio</span></a>
              <li><a href="registroempresa.php">Registro Empresa</span></a>
              <li><a href="ofertasempresa.php">Publicaciones</a>
              		<ul class="dropdown-menu">
              			<li><a href="crearoferta.php">Crear Oferta</a></li>
              		</ul>
              </li>
              <li><a href="preseleccion.php">Preseleccion</a>
              </li>

			  <li><a href="index.php"> <span class="glyphicon glyphicon-log-out"></span> <?php echo $user_codsicom; ?></a>
              	<ul class="dropdown-menu">
			      	<li><a href="perfilempresa.php">Perfil</a></li>
			      	<li><a href="#">Configuracion</a></li>
			      	<li><a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                         <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Salir</a>
                    </li>
			    </ul>
              </li>

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
