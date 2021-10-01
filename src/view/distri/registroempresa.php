<?php include_once 'view/_main.php';
/*require_once CONTROLLER.'empresaController.php';
require_once CONTROLLER.'codsicomController.php';*/

//include         '../../../src/config.inc.php';
require_once    '../../../src/controller/empresaController.php';
require_once    '../../../src/controller/codsicomController.php';


$emp        = new src\controller\empresaController();
$codsicom   = new src\controller\codsicomController();
$id_empresa = '';
$dataemp    = '';

if(isset($_SESSION['id_usuaroempresa']))
{
    $id_usuario                 = $_SESSION["id_usuaroempresa"];
    $user_codsicom              = $_SESSION["user_codsicom"];
    $id_empresa                 = $emp->getUsuarioEmpresa($id_usuario);

    echo "id_usuario ------> ".$id_usuario."<br/>";
    echo "user_codsicom --->".$user_codsicom."<br/>";
    echo "id_empresa ------>".$id_empresa."<br/>";

    $datacodsicom           = $codsicom->codsicom_check($user_codsicom);
    foreach ($datacodsicom as $cod_sicom)
    {
        //$codsicom_nombre    = $cod_sicom['cod_sicom'];
        $codsicom_nombre    = $cod_sicom['nombre'];
    }

    $dataemp = $emp->selectIDEmpresa($id_empresa) ;
    foreach ($dataemp as $demp)
    {
        $emp_idempresa      = $demp['id_empresa'];
        $emp_razonsocial    = $demp['nomRazonSocial'];
        $emp_nit_empresa    = $demp['nit'];
        $emp_email          = $demp['email'];
        $emp_depa           = $demp['departamento'];
        $emp_ciudad         = $demp['ciudad'];
        $tel_empresa        = $demp['telefono'];
        $cel_empresa        = $demp['celular'];
        $dir_empresa        = $demp['direccion'];
        $emp_descripcion    = $demp['descripcion'];
    }

    $datRepLegal = $emp->selectRepLegal($id_empresa) ;
    foreach ($datRepLegal as $drl)
    {
        //$emp_idempresa      = $drl['id_empresa'];
        $rep_nom            = $drl['nombre'];
        $rep_tipoid         = $drl['tipoId'];
        $rep_numid          = $drl['numId'];
        $rep_cargo          = $drl['cargo'];
        $rep_email          = $drl['email'];
        $rep_tel            = $drl['telefono'];
        $rep_cel            = $drl['celular'];
        /*$dir_empresa      = $drl['arl'];
        $emp_descripcion    = $drl['nivelriesgo'];
        $emp_idempresa      = $drl['numTrabajadores'];*/
    }

    $datAdministador = $emp->selectAdminsitrador($id_empresa) ;
    foreach ($datAdministador as $dadmin)
    {
        //$admin_id             = $dadmin['id_infoadmin'];
        $admin_nom              = $dadmin['nombre'];
        $admin_tipoid           = $dadmin['tipoId'];
        $admin_num              = $dadmin['numId'];
        $admin_email            = $dadmin['cargo'];
        $admin_cargo            = $dadmin['email'];
        $admin_cel              = $dadmin['celular'];
        $admin_tel              = $dadmin['telefono'];
        $admin_arl              = $dadmin['arl'];
        $admin_riesgo           = $dadmin['nivelriesgo'];
        $admin_numtabajador     = $dadmin['numTrabajadores'];
    }

    //Rep LEgal
    // id_replegal, nombre, tipoId, numId, cargo, email, telefono, celular

    // Adminsitrador
    // id_infoadmin, nombre, tipoId, numId, cargo, email, telefono, celular, arl, nivelriesgo, numTrabajadores

}
else
{
    if(isset($_POST['submit']))
    {
        $res = $emp->agregarRegistroEDS();
        
    }

}
?>
<link rel="stylesheet" href="<?php echo $js_dir;?>res/style.css" />
<link rel="stylesheet" href="<?php echo $js_dir;?>richtexteditor/rte_theme_default.css" />

<div class="container">
		<h4>Registro de Empresa</h4>
		<br>
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs">
				<!-- Pestaña Inicio-->
					<li class="active" id="tab-eds"><a href="#eds" role="tab" data-toggle="tab">
    					<span class="glyphicon glyphicon-tint"></span> Información EDS</a>
					</li>
					<li class="" id="tab-representante-legal" ><a href="#representante-legal" role="tab" data-toggle="tab">
						<span class="glyphicon glyphicon-bookmark"></span> Información Representate legal</a>
					</li>
					<li class="" id="tab-administrador" ><a href="#adminsitrador" role="tab" data-toggle="tab">
						<span class="glyphicon glyphicon-user"></span> Informacion Adminitrador</a>
					</li>
				</ul>
				<!-- Pestañas Fin-->

				<form action="registroempresa.php" method="POST" name="form_emp" id="form_emp" autocomplete="off">
					<div class="tab-content">
					<!-- Contenidos inicio -->
						<!--====================================================================================== -->
						<div class="tab-pane active" id="eds"><!-- Contenido sobre Informacion Registro de Empresa -->
							<div class="container well col-xs-12">
								<div class="row">
                                    <div class="col-xs-3">
                                	<div class="form-group">
                                		<label class="control-label">Nombre de la EDS:</label>
                                		<div class="input-group">
                                			<span class="input-group-addon"><i class="glyphicon glyphicon-object-align-bottom"></i></span></span>
                                			<input type="text" class="form-control" name="codsicom_nombre" id="codsicom_nombre" value="<?php echo $codsicom_nombre;?>" disabled>
                                		</div>
                                	</div>
                                    </div>
                                    <div class="col-xs-3">
                                    <div class="form-group">
                                        <label class="control-label">Codigo Sicom:</label>
                                            <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
                                            <input type="number" class="form-control" name="codsicom_sicom" id="codsicom_sicom" value="<?php echo $user_codsicom;?>" disabled>
                                        </div>
                                    </div>
                                    </div>

                  					<div class="col-xs-3">
										<div class="form-group">
											<label class="control-label">Razon social:</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
												<input type="text" class="form-control" name="emp_razonsocial" id="emp_razonsocial" value="<?php echo $emp_razonsocial;?>" placeholder="Compañia Ejemplo S.A.S" required>
											</div>
										</div>
									</div>
                                    <div class="col-xs-3">
                                    <div class="form-group">
                                      <label class="control-label">Nit:</label>
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                        <input type="number" class="form-control" name="emp_nit_empresa" id="emp_nit_empresa" value="<?php echo $emp_nit_empresa; ?>" placeholder="8001972684" required>
                                      </div>
                                    </div>
                                    </div>

									<!--<div class="col-xs-6">
                                          <input name="file-input" id="file-input" type="file" />
                                          <br/>
                                          <img id="imgSalida" width="25%" height="50%" src="" />
                                    </div>-->
								                     </div>

								                     <div class="row">

                                    <div class="col-xs-3">
                                    	<div class="form-group">
                                    		<label for="password" class="control-label">Departamento:</label>
                                    		<div class="input-group">
                                    			<span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                                    			<input type="text" class="form-control" name="emp_depa" id="emp_depa" value="<?php echo $emp_depa;?>" placeholder="Cundinamarca" required>
                                    		</div>
                                    	</div>
                                    </div>
                                    <div class="col-xs-3">
                                    <div class="form-group">
                                      <label class="control-label">Ciudad:</label>
                                      <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-refresh"></span></span>
                                        <input type="text" class="form-control" name="emp_ciudad" id="emp_ciudad" value="<?php echo $emp_ciudad; ?>" placeholder="Bogota" required>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="col-xs-3">
                                    <div class="form-group">
                                      <label class="control-label">Telefono Fijo: </label>
                                      <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                        <input type="number" class="form-control" name="tel_empresa" id="tel_empresa"  value="<?php echo $tel_empresa; ?>" placeholder="0357276266" required>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="col-xs-3">
                                    <div class="form-group">
                                      <label class="control-label">Celular</label>
                                      <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                        <input type="number" class="form-control" name="cel_empresa" id="cel_empresa" value="<?php echo $cel_empresa; ?>" placeholder="3141234567" required>
                                      </div>
                                    </div>
                                    </div>
			                    </div>

			                   	<div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                        	<label class="control-label">E-mail</label>
                                        	<div class="input-group">
                                        		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        		<input type="email" class="form-control" name="emp_email" id="emp_email" value="<?php echo $emp_email; ?>" placeholder="ejemplo@ejemplo.com"  required>
                                        	</div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    	<div class="form-group">
                                    		<label class="control-label">Direccion</label>
                                    		<div class="input-group">
                                        		<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                                        		<input type="text" class="form-control" name="dir_empresa" id="dir_empresa" value="<?php echo $dir_empresa; ?>" placeholder="Cll 30 #78-128 Trans 11" required>
                                    		</div>
                                    	</div>
                                    </div>
                          		</div>

                                <div class="row">
                                	<div class="col-xs-12">
                                		<div class="form-group">
                                			<label for="descripcion">Descripción de la Empresa</label><br>
                                  			<br>
                                			<!-- <div class="input-group">
                                    			<textarea name="emp_descripcion" id="emp_descripcion" cols="110"
                                    				rows="20" placeholder="bereve reseña de la empresa!!">
                                    				<?php echo $emp_descripcion; ?>
                                    				</textarea>
                                			</div>  -->

                                			<div class="input-group">
                                			<div name="emp_descripcion" id="emp_descripcion"></div>
                                            
                                			</div>


                                		</div>
                                	</div>
                                </div>

								 <div class="form-group ">
									<a class="btn btn-primary btnNext" >Siguiente</a>
								</div>
								<div class="form-group">
									<span class="help-block">Todos los campos son requeridos</span>
								</div>
							</div>
						</div>
						<!--====================================================================================== -->

                        <!--======================================================================================-->
						<div class="tab-pane" id="representante-legal"> <!-- Informacion sobre representante legal-->
							<div class="container well col-xs-12">
								<div class="form-group form-inline"></div>
								<div class="row">
									<div class="col-xs-4">
										<div class="form-group">
											<label for="nombre">Nombre</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input type="text" class="form-control" name="rep_nom" id="rep_nom" value="<?php echo $rep_nom; ?>" placeholder="Jhon Doe" required/>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label for="form-group" class="control-label">Tipo</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-pawn"></i></span>
												<select name="rep_tipoid" id="rep_tipoid" class="form-control" value="<?php echo $rep_tipoid; ?>" required>
													<option value="" selected disabled>Seleccionar</option>
													<option value="Cedula">cédula</option>
                                                    <option value="Nit">nit</option>
                                                    <option value="Cedula de Extranjeria">Cédula de Extranjéria</option>
													</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label for="numeroid">Numero de Documento</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-pawn"></i></span>
												<input type="number" class="form-control" name="rep_numid" id="rep_numid" value="<?php echo $rep_numid; ?>" placeholder="123456789"/>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="direccion">Cargo</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
												<input class="form-control" type="text" name="rep_cargo" id="rep_cargo" placeholder="Administrador EDS" value="<?php echo $rep_cargo; ?>" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="numero">E-mail</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
												<input class="form-control" type="email" name="rep_email" id="rep_email" placeholder="ejemplo@ejemplo.com" value="<?php echo $rep_email; ?>"required>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="razon_social">Telefono Fijo</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
												<input class="form-control" type="number" name="rep_tel" id="rep_tel" placeholder="123456789" value="<?php echo $rep_tel; ?>" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="giro">celular</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
												<input class="form-control" type="number" name="rep_cel" id="rep_cel" placeholder="3001234567" value="<?php echo $rep_cel; ?>" required>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									 <a class="btn btn-primary btnPrevious" >Regresar</a>
                   					 <a class="btn btn-primary btnNext" >Siguiente</a>
								</div>

								<div class="form-group">
									<span class="help-block">Todos los campos son requeridos</span>
								</div>
							</div>
						</div>
					    <!--======================================================================================-->

						<!--======================================================================================-->
						<div class="tab-pane" id="adminsitrador">	    <!-- Informacion sobre Adminitrador -->
							<div class="container well col-xs-12">
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="nombre_r">Nombre</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input class="form-control" type="text" name="admin_nom" id="admin_nom" placeholder="Jhon Doe" value="<?php echo $admin_nom; ?>" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<input name="file-input" id="file-input" type="file" />
                                        <br/>
                    					<img id="imgSalida" width="25%" height="50%" src="" />
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="form-group" class="control-label">Tipo</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-pawn"></i></span>
												<select name="admin_tipoid" id="admin_tipoid" class="form-control" value="<?php echo $admin_tipoid; ?>" required>
													<option value="" selected disabled>Seleccionar</option>
													<option value="Cedula">Cédula</option>
                                                      <option value="Nit">Nit</option>
                                                      <option value="Cedula de Extranjeria">Cédula de Extrajéria</option>
												</select>
											</div>
										</div>


									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="numero_r">Numero de Documento</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-pawn"></span></span>
												<input class="form-control" type="number" name="admin_num" id="admin_num" placeholder="123456789" value="<?php echo $admin_num; ?>" required>
											</div>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="correo_r">Correo electronico</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
												<input class="form-control" type="email" name="admin_email" id="admin_email" placeholder="ejemplo@ejemplo.com" value="<?php echo $admin_email; ?>" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="numero_r">Cargo</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
												<input class="form-control" type="text" name="admin_cargo" id="admin_cargo" placeholder="Administrador" value="<?php echo $admin_cargo; ?>" required>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="correo_r">Celular</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
												<input class="form-control" type="number" name="admin_cel" id="admin_cel" placeholder="3005566666"  value="<?php echo $admin_cel; ?>" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="numero_r">Telefono Fijo</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
												<input class="form-control" type="number" name="admin_tel" id="admin_tel" placeholder="123456789" value="<?php echo $admin_tel; ?>" required>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="correo_r">ARL</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-refresh"></span></span>
												<input class="form-control" type="text" name="admin_arl" id="admin_arl" placeholder="ARL EDS ASEGURADORA" value="<?php echo $admin_arl; ?>" required>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="numero_r">Nivel de Riesgo</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-refresh"></span></span>
												<input class="form-control" type="text" name="admin_riesgo" id="admin_riesgo" placeholder="Escribir el Nivel de Riesgo" value="<?php echo $admin_riesgo; ?>" required>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="correo_r">Numero Actual de trabajadores y Contratistas</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-refresh"></span></span>
												<input class="form-control" type="number" name="admin_numtabajador" id="admin_numtabajador" placeholder="4" value="<?php echo $admin_numtabajador;?>" required>
											</div>
										</div>
									</div>
								</div>
								<!-- Contenido sobre informacion responsable Fin -->
								<br>
								<div class="form-group">
                  					<button type="reset" 	class="btn btn-primary btnPrevious">Regresar</button>
									<button type="reset" 	class="btn btn-warning">limpiar</button>
						    		<button type="submit" 	class="btn btn-info" name="submit" id="submit" value="Guardar">Guardar</button>
								</div>
								<div class="form-group">
									<span class="help-block">Todos los campos son requeridos</span>
								</div>
							</div>
						</div>
                        <!--======================================================================================-->
					</div><!-- Contenido Fin -->
				</form>
			</div>
		</div>
	</div>

<?php  require_once 'view/_footer.php';?>
<script src="js/next.js"></script>
<script type="text/javascript" 			src="<?php echo $js_dir?>richtexteditor/rte.js"></script>
  <script>
	var editor1 = new RichTextEditor("#emp_descripcion");

	editor1.setHTMLCode("<?php echo $emp_descripcion; ?>");

	function btngetPlainText() {
		alert(editor1.getPlainText())
	}

</script>

<script>RTE_DefaultConfig.url_base='richtexteditor'</script>
<script type="text/javascript" 			src='<?php echo $js_dir?>richtexteditor/plugins/all_plugins.js'></script>
<script 								src="<?php echo $js_dir?>res/patch.js"></script>
