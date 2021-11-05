<?php namespace admin;
use src\controller\loginSession;
require_once '../src/config.inc.php';
require_once constant('PATHSRC').'libraryFendi.php';
if(isset($_POST['submit']))
{
    $login = new loginSession();
    
    if($login->login_check() >= 1 )
    {
        header("Status: 301 Moved Permanently");
        header("Location: ".constant('ADMIN_URL')."/index.php");
        
      /*  $id     =   (isset($_SESSION["id"])) ? $_SESSION["id"] : '';
        $user   =   (isset($_SESSION["email"])) ? $_SESSION["email"] : ''; */
    }
    else{
        echo "FALSE";
        /*header("Status: 301 Moved Permanently");
        header("Location: ../index.php");*/
    }
    
}else{

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CPANEL Fenditrabajo</title>

    <!-- Custom fonts for this template-->
    <link href="assert/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assert/css/sb-admin-2.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $img_dir?>favicon/favicon.ico">
    
</head>

<body class="bg-gradient-primary">

    <div class="container">

	<br/><br/><br/>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

				<form class="login-form validate-form" id="formLogin" action="index.php" method="post">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image "></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="assert/img/cpanel50.png" class="img-fluid" width="50%" height="50%"></img>
                                        <h1 class="h4 text-gray-900 mb-4">Cpanel de Fenditrabajo</h1>
                                    </div>
                                    <form id="formLogin" action="index.php" method="post" class="user">
                                        
                                        <div class="form-group">
                                            <div class="input-group">
                                            	<!--  <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                                --><input type="text" class="form-control form-control-user"
                                                    id="user_codsicom" aria-describedby="emailHelp"
                                                    placeholder="Usuario" name="user_codsicom" >
                                                    </input>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="input-group">
                                            	
                                            	<!-- <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                                --><input type="password" class="form-control form-control-user"
                                                    id="password" placeholder="Contraseña" name="password" ></input>
                                            </div>
                                        </div>
                                        
                                        <div class="input-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        
                                        <div class="container-login-form-btn">
						                    <div class="wrap-login-form-btn">
						                        <div class="login-form-bgbtn"></div>
						                        <button type="submit" name="submit" id="submit"
						                        class="btn btn-primary btn-user btn-block">Entrar</button>
						                    </div>
						                </div>
                                      </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!--   <script type="text/javascript" src="scriptConn.js"></script> -->
</body>
</html>

<?php 
}
?>