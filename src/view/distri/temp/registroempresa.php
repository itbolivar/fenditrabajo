<?php require_once 'view/_main.php';?>

<!-- Header end --> <!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Registro de Empresas</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Inicio</a> / <span></span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel">

                    <!-- Personal Information -->
                    <h5>INFORMACION DE ESTACION DE SERVICIO EDS</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="formrow">
                          <input type="text" name="name" class="form-control" placeholder="Nombre De EDS">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="formrow">
                          <input type="text" surnames="surnames" class="form-control" placeholder="NIT">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="formrow">
                          <input type="text" documenttype="documenttype" class="form-control" placeholder="Direccion">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="formrow">
                          <input type="text" documentnumber="documentnumber" class="form-control" placeholder="Ciudad">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="formrow">
                          <input type="text" name="email" class="form-control" placeholder="Mumicipio">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="formrow">
                          <input type="text" name="date" class="form-control" placeholder="Contacto">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="formrow">
                          <input type="text" name="gender" class="form-control" placeholder="celualar ">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="formrow">
                          <input type="text" name="civilstatus" class="form-control" placeholder="E-maill">
                        </div>
                      </div>
                    </div>
                                  
                    <!-- Social -->
                    <h5>INFORMACION DEL RESPRESNTANTE LEGAL </h5>
                    <div class="row">
                    <div class="col-md-4">
                      <div class="formrow">
                        <input type="text" name="name" class="form-control" placeholder="Nombre Representante">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="formrow">
                        <input type="text" class="form-control" placeholder="Cedula">
                      </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="formrow">
                      		<input type="text" class="form-control" placeholder="Cargo:">
                    	</div>
                    </div>
                    <div class="col-md-4">
                        <div class="formrow">
                         	<input type="text" name="name" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="formrow">
                      		<input type="text" class="form-control" placeholder="Celular">
                    	</div>
                    </div>  
                    </div> 
                            
                    <!-- Social -->
      				<h5>INFORMACION DEL ADMINISTADOR  </h5>
                 	 <div class="row">
                          <div class="col-md-4">
                           <div class="formrow">
                            	<input type="text" name="name" class="form-control" placeholder="Nombre">
                           </div>
                          </div>
                          <div class="col-md-4">
                          	<div class="formrow">
                            	<input type="text" class="form-control" placeholder="Cedula">
                          	</div>
                          </div>
                          <div class="col-md-4">
                            <div class="formrow">
                              	<input type="text" class="form-control" placeholder="Cargo:">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="formrow">
                              	<input type="text" name="name" class="form-control" placeholder="E-mail">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="formrow">
                              	<input type="text" class="form-control" placeholder="Celular">
                            </div>  
                          </div> 
                            <br>
                            <input type="submit" class="btn" value="Registar-Datos">
                      </div>
           </div>
         </div>
       </div>
    </div>
 </div>
</div>
<br/><br/><br/><br/><br/>
<?php require_once 'view/_footer.php';?>