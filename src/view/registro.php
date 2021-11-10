<?php

namespace src\view;

require_once '../config.inc.php';
require_once constant('PATHSRC') . 'libraryFendi.php';
//include MODAL;
use src\controller\registroController;

$nombreEDS      = '';
$reg = new registroController();

if (isset($_POST['candidatoReg'])) {
  if ($_POST['password'] === $_POST['password2']) {
    if ($_POST['password'] != '') {
      $reg->getPOST();
      //echo "OK EDS";
    } else {
      echo "No se acepta campos vacios EDS Password";
    }
  } else {
    echo "Verificar Password USUARIO";
  }
} else {
  if (isset($_POST['eds_empleadorReg'])) {
    if ($_POST['emp_password'] === $_POST['emp_password2']) {
      if ($_POST['emp_password'] != '') {
        $reg->getPOST();
        //echo "OK EDS";
      } else {
        echo "No se acepta campos vacios EDS Password";
      }
    } else {
      echo "Verificar EDS Password";
    }
  } else {

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registro Fenditrabajo</title>
      <!-- Fav Icon -->
	  <link rel="shortcut icon" href="https://fendipetroleo.com/nuevoF/public/icon/favicon.ico">

      <!-- Owl carousel -->
      <link href="<?php echo $css_dir ?>owl.carousel.css" rel="stylesheet">

      <!-- Bootstrap -->
      <link href="<?php echo $css_dir ?>bootstrap.min.css" rel="stylesheet">

      <!-- Font Awesome -->
      <link href="<?php echo $css_dir ?>font-awesome.css" rel="stylesheet">

      <!-- Custom Style -->
      <link href="<?php echo $css_dir ?>main.css" rel="stylesheet">

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

      <!-- Page Title start -->
      <div class="pageTitle">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h1 class="page-heading">Registro</h1>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadCrumb"><a href="#.">Regresar</a> / <span>Registrar</span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Title End -->

      <div class="listpgWraper">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="userccount">
                <div class="socialLogin">
                  <img src="<?php echo $img_dir ?>logo.png" class="logo" width="50%" height="50%" alt="" />
                  <h5>Registrarse</h5>
                </div>
                <!--<div class="alert alert-success" role="alert"><strong>¡Bien hecho!</strong> Su cuenta se creó correctamente.</div>
                  <div class="alert alert-warning" role="alert"><strong>¡Advertencia!</strong> Será mejor que te revises, no te ves muy bien.</div>
                  <div class="alert alert-danger" role="alert"><strong>¡Oh cielos!</strong> Cambie algunas cosas e intente enviar de nuevo.</div>-->
                <div class="userbtns">
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#candidato">Persona</a></li>
                    <li><a data-toggle="tab" href="#eds_empleador">Empresa</a></li>
                  </ul>
                </div>
                <form action="registro.php" method="post" id="form1">
                  <div class="tab-content">

                    <div id="candidato" class="formpanel tab-pane fade in active">
                      <div class="formrow">
                        <input type="text" name="user_codsicom" id="user_codsicom" class="form-control" placeholder="Email">
                      </div>
                      <div class="formrow">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">

                      </div>
                      <div class="formrow">
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirmar contraseña">
                      </div>
                      <div class="formrow">
                        <input type="checkbox" value="agree text" name="agree" />
                        Política de datos
                      </div>

                      <!-- Codigo de parametro para capcha -->

                      <?php

                      function codigo_captcha()
                      {

                        $k = "";
                        $paramentros = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        $maximo = strlen($paramentros) - 1;

                        for ($i = 0; $i < 5; $i++) {

                          $k .= $paramentros[mt_rand(0, $maximo)];
                        }

                        return $k;
                      }

                      ?>

                      <!--   fin codigo capcha -->

                      <div class="formrow">
                        <input type="text" name="txtcopia" id="txtcopia" size="10">
                        <input type="text" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> class="captcha" size="4" readonly>
                      </div>


                      <button type="submit" class="btn" name="candidatoReg" id="candidatoReg" value="Registrar" onclick="validar();">Registrar</button>
                    </div>

                    <div id="eds_empleador" class="formpanel tab-pane fade in">
                      <div class="formrow">
                        <input type="search" maxlength="6" name="user_codsicom2" id="user_codsicom2" class="form-control" placeholder="Codigo Sicom">
                      </div>
                      <div class="formrow">
                        <div id="nombre_eds">
                          <input type="text" name="nombreEDS" id="nombreEDS" class="form-control" value="<?php echo $nombreEDS; ?>" disabled></input>
                        </div>
                      </div>
                      <div class="formrow">
                        <input type="text" name="emp_email" id="emp_email" class="form-control" placeholder="Email" onfocus="validar()">
                      </div>
                      <div class="formrow">
                        <input type="password" name="emp_password" id="emp_password" class="form-control" placeholder="Contraseña">
                      </div>
                      <div class="formrow">
                        <input type="password" name="emp_password2" id="emp_password2" class="form-control" placeholder="Confirmar contraseña">
                      </div>
                      <div class="formrow">
                        <input type="checkbox" value="agree text c" name="cagree" />
                        Política de datos
                      </div>

                      <div class="formrow">
                        <input type="text" name="txtcopia" id="txtcopia" size="10">
                        <input type="text" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> class="captcha" size="4" readonly>
                      </div>
                      <button type="submit" class="btn" name="eds_empleadorReg" id="eds_empleadorReg" value="Registrar" onclick="validarCapcha();">Registrar</button>
                    </div>
                  </div>

                </form>

                <div class="newuser"><i class="fa fa-user" aria-hidden="true">
                  </i> ¿Ya eres usuario? <a href="login.php">Inicie sesión aquí</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">
        function validar() {
          //obteniendo el valor que se puso en el campo text del formulario
          miCampoTexto = document.getElementById("nombreEDS").value;
          //la condición
          if (miCampoTexto.length > 1) {
            alert('El campo de texto esta vacio!');
            return false;
          }
          return true;
        }
      </script>

      <script src="<?php echo $js_dir; ?>main.js"></script>
      <?php require_once 'view/_footer.php'; ?>
  <?php
  }
}
  ?>