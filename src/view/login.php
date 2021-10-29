<?php 

require_once '../../src/config.inc.php';
require_once constant('PATHSRC').'include.php';

$login = new loginSession();
$uSesion = user_session::getInstance();

if(isset($_POST['candidatoLogin']))
{
    if($_POST['password'] != ''){
        $login->postUsuarioEmpresaFrontEnd();
        //echo "OK USUARIO o CANDIDATO";
        
        
    }else{
        echo "No se acepta campos vacios USUARIO Password";
    }
}
else
{
    if(isset($_POST['eds_empleadorLogin']))
    {
       if($_POST['emp_password'] != ''){
        session_start();
        $login->postUsuarioEmpresaFrontEnd();
         //echo "OK EDS u OFERENTE";
            /*$_SESSION["id"]     = $id_u;
            $_SESSION["user_codsicom"]  =  (isset($_POST['user_codsicom2']))  ? $_POST['user_codsicom2'] : ''; */
            $uSesion->getCurrentIdSession($login->getID());
            $uSesion->getCurrentIdSession((isset($_POST['user_codsicom2']))  ? $_POST['user_codsicom2'] : '');
        }else{
            echo "No se acepta campos vacios EDS Password";
        }
    }
    else
    {
 
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
<link href="<?php echo $css_dir?>owl.carousel.css" 	rel="stylesheet">

<!-- Bootstrap -->
<link href="<?php echo $css_dir?>bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="<?php echo $css_dir?>font-awesome.css" 	rel="stylesheet">

<!-- Custom Style -->
<link href="<?php echo $css_dir?>main.css" 			rel="stylesheet">

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
              <div class="col-md-2 col-sm-2 col-xs-10"> <a href="<?php echo $PORTAL_URL?>" class="logo">
              <img src="<?php echo $img_dir?>logo.png" alt="" /></a>
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
                      <li><a href="<?php echo $PORTAL_URL?>">Inicio</span></a>
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
    	        <h1 class="page-heading">Ingresar</h1>
    	      </div>
    	      <div class="col-md-6 col-sm-6">
    	        <div class="breadCrumb"><a href="<?php echo $PORTAL_URL?>">Inicio</a> / <span>nombre trabajo</span></div>
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
        	            	<img src="<?php echo $img_dir?>logo.png" class="logo" width="50%" height="50%"  alt="" />
        					<h5>Inicio de sesion</h5>
        				</div>
        				
                        <div class="userbtns">
                            <ul class="nav nav-tabs">
                              	<li class="active"><a data-toggle="tab" href="#candidato">Persona</a></li>
                  				<li><a data-toggle="tab" href="#eds_empleador">Empresa</a></li>
                            </ul>
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
                                          	<input type="password" name="emp_password"  id="emp_password" class="form-control" placeholder="Contraseña">
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
        	          		¿Nuevo Usuario? <a href="registro.php">Registrate aquí</a>
        	        </div>
        	      </div>
        	    </div>
        	  </div>
    	</div>
	
        <!--Footer-->
        <div class="footerWrap">
          <div class="container">
              <!--About Us-->
                <div class="ft-logo"><img src="<?php echo $img_dir?>logo.png" alt="texto adicional"></div>
                <!-- Social Icons -->
                <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true">
                </i></a>
                </div>
                <div class="copyright">
                 &copy; Copyright <strong> <span>Fenditrabajo Nacional</span> 2021</strong>. Todos los derechos reservados. <br/>
                 <p class="text-center">Desarrollado por Mesa IT.</p>
               </div>
                <!-- Social Icons end -->
              <!--About us End-->
            </div>
          </div>
        <!--Footer end-->

<!-- Bootstrap's JavaScript -->
<script src="<?php echo $js_dir?>jquery-2.1.4.min.js"></script>
<script src="<?php echo $js_dir?>bootstrap.min.js"></script>

<!-- Owl carousel -->
<script src="<?php echo $js_dir?>owl.carousel.js"></script>

<!-- Custom js -->
<script src="<?php echo $js_dir?>script.js"></script>
</body>
</html>
<?php 
    }
}
?>