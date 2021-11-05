<?php 
namespace admin\view;
require_once '../../src/config.inc.php';
require_once constant('PATHSRC').'libraryFendi.php';

include "view/main.php"; ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <h1 align="center">BIENVENIDO</h1>
    <hr/>
    
<form method="POST" >   
<div class="container-fluid">
<div class="row justify-content-center align-items-center minh-100">

	<div class="col-3 col-md-3 mb-3">
    	<a class="btn btn-lg btn-success" href="usuarios.php">
  		<i class="fa fa-users fa-2x pull-left"></i>Adminitracion de Usuarios<br>Click Aqui !</a>
    </div> 
    <div class= "col-3 col-md-3 mb-3">
    	<a class="btn btn-lg btn-success" href="roles.php">
  		<i class="fa fa-flag fa-2x pull-left"></i>Adminitracion de Roles<br>Click Aqui !</a>
    </div>
    <div class="col-3 col-md-3 mb-3">
        <a class="btn btn-lg btn-success" href="permisos.php">
  		<i class="fa fa-id-card fa-2x pull-left"></i>Adminitracion de Permisos<br>Click Aqui !</a>
    </div>
 </div> 
<br/>
 


  <div class="row justify-content-center align-items-center minh-100">
      	<div class="col-3 col-md-3 mb-3">
         	<a class="btn btn-lg btn-success" href="empresasEDS.php">
      		<i class="fa fa-flag fa-2x pull-left"></i> Adminitracion de EDS<br>Click Aqui !</a>
        </div> 
        <div class="col-3 col-md-3 mb-3">
        	<a class="btn btn-lg btn-success" href="auditoria.php">
      		<i class="fa fa-eye fa-2x pull-left"></i>Auditoria y Reportes<br>Click Aqui !</a>
        </div> 
  </div>

</div>
</form>
<!-- End of Page Wrapper -->


<?php require_once "../assert/view/footer.php"; ?>