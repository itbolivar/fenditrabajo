<?php

namespace src\view\view;

require_once '../config.inc.php';
//require_once constant('PATHSRC').'libraryFendi.php';

header("Expires: Tue, 01 Jan 1900 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


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

  <title>Fenditrabajo</title>
  <!-- Fav Icon -->
  <link rel="shortcut icon" href="<?php echo constant('IMG') ?>favicon/favicon.ico">


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Slider -->
  <link href="<?php echo constant('CSS') ?>revolution-slider/css/settings.css" rel="stylesheet">

  <!-- Owl carousel -->
  <link href="<?php echo constant('CSS') ?>owl.carousel.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="<?php echo constant('CSS') ?>font-awesome.css" rel="stylesheet">

  <!-- Custom Style -->
  <link href="<?php echo constant('CSS') ?>main.css" rel="stylesheet">


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
        <div class="col-md-2 col-sm-2 col-xs-10">
          <a href="<?php echo $PORTAL_URL ?>" class="logo">
            <img src="<?php echo $img_dir ?>logo.png" alt="" />
          </a>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span> </button>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-10 col-sm-12 col-xs-12">
          <!-- Nav start -->
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-collapse collapse" id="nav-main">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo $PORTAL_URL ?>">Inicio</a></li>
                <li><a href="">Institucional</a>
                  <ul class="dropdown-menu">
                    <li><a href="qsomos.php">Quienes Somos</a>
                    <li>
                    <li><a href="contactenos.php">Contactenos</a></li>
                    <li><a href="">Reglamento</a>
                    <li>
                    <li><a href="tratamientodatos.php">Aviso legal y Privacidad</a>
                    <li>
                  </ul>
                </li>
                <li><a href="">Talleres</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Apectos Juridicos en el proceso de Selscion</a>
                    <li>
                    <li><a href="#">Clave del proceso de seleccion</a></li>
                    <li><a href="#">¿Qué debe contener un perfil laboral?</a>
                    <li>
                    <li><a href="#">Proceso de selección de personal</a>
                    <li>
                  </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Iniciar Sesion</a>
                  <ul class="dropdown-menu">
                    <li><a href="loginEmpresa.php">Empresa</a>
                    <li>
                    <li><a href="loginUser.php">Persona</a></li>
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
    </div>
    <!-- row end -->
  </div>
  <!-- Header container end -->
  </div>
  <!-- Header end -->