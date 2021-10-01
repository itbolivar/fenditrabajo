<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config.inc.php');

//$eds ="info@ejemplo.com"
$eds = "Eds The OilExample"

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EDS - Fenditrabajo</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Slider -->
<link href="../assets/js/revolution-slider/css/settings.css" rel="stylesheet">

<!-- Owl carousel -->
<link href="../assets/css/owl.carousel.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="../assets/css/font-awesome.css" rel="stylesheet">

<!-- Custom Style -->
<link href="../assets/css/main.css" rel="stylesheet">

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
      <img src="../assets/img/logo.png" alt="" /></a>
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
              <li><a href="perfilempresa.php">Perfil</a>
              		<ul class="dropdown-menu">
              			<li><a href="#">Buscar</a></li>
              			<li><a href="#">Agregar</a></li>
              			<li><a href="#">Editar</a></li>
              		</ul>
              </li>
              <li><a href="preseleccion.php">Lista Candidatos</a>
              		<ul class="dropdown-menu">
              			<li><a href="detallecandidato.php">Detalles de Candidatos</a></li>
              			<li><a href="#">Agregar</a></li>
              			<li><a href="#">Editar</a></li>
              		</ul>
              </li>
              <li><a href="#">Ofertas</a>
              		<ul class="dropdown-menu">
              			<li><a href="crearoferta.php">Crear Oferta</a></li>
              		</ul>
              </li>

			  <li><a href="index.php"> <span class="glyphicon glyphicon-log-out"></span> <?php echo $eds; ?></a>
              	<ul class="dropdown-menu">
			      	<li><a href="#">Perfil</a></li>
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