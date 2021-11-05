<?php 
namespace src\view\user;
require_once 'view/_main.php'; ?>

<div class="container">
	<h4>Hoja de Vida</h4>
	<br>
	<div class="row">
		<div class="col-xs-12">
			<ul class="nav nav-tabs">
				<!-- Pestaña Inicio-->
				<li class="active" id="tab-datos-personales"><a href="#home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span> Datos Personales</a></li>
				<li class="" id="tab-info-educacion"><a href="#info-educacion" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-info-sign"></span> Formación Educación</a></li>
				<li class="" id="tab-experiencia-laboral"><a href="#info-experiencia" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-info-sign"></span> Experiencia Laboral</a></li>
				<li class="" id="tab-referencias"><a href="#info-referencia" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user"></span> Referencias</a></li>
			</ul><!-- Pestañas Fin-->
			<form action="" method="POST" name="form_emp" id="form_emp" autocomplete="off">
				<div class="tab-content">
					<!-- Contenidos inicio -->
					<!--==================================================================================-->
					<div class="tab-pane active" id="home">
						<!-- Contenido sobre Informacion Esencial Inicio-->
						<div class="container well col-xs-12">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="nombre" class="control-label">Nombres</label>
										<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
										<input type="text" class="form-control" name="dpNombre" id="dpNombre" placeholder="Nombre*" required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="nombre" class="control-label">Apellidos</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span></span>
											<input type="text" class="form-control" name="dpApellido" id="dpApellido" placeholder="Apellidos" required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="nombre" class="control-label">Correo Electrónico</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span></span>
											<input type="email" class="form-control" name="dpEmail" id="dpEmail" placeholder="luis@gmail.com" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<div class="form-group">
											<label for="form-group" class="control-label">Tipo Documento</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-pawn"></i></span>
												<select name="dpTipoid" id="dpTipoid" class="form-control">
													<option value="" selected disabled>Seleccionar</option>
													<option value="Cédula">Cédula</option>
                         							<option value="Nit">Nit</option>
                          							<option value="Cédula Extranjería">Cédula Extranjería</option>
												</select>
											</div>
										</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Número de Documento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-pawn"></i></span></span>
											<input type="number" class="form-control" name="dpNumid" id="dpNumid" placeholder="8400000" required>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="ciudad">Teléfono  fijo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
											<input type="tel" class="form-control" name="dpTel" id="dpTel" placeholder="Teléfono  Fijo" />
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="ciudad">Teléfono  Celular</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
											<input type="tel" class="form-control" name="dpCel" id="dpCel" placeholder="Teléfono  Celular" />
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Fecha de Nacimiento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="mdi-communication-business"></i></span></span>
											<input type="date" class="form-control" name="dpFecha" id="dpFecha" required>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">País de Nacimiento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span></span>
											<input type="text" class="form-control" name="dpPais" id="dpPais" placeholder="Colombia" required>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Departamento de Nacimiento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span></span>
											<input type="text" class="form-control" name="dpDepartamento" id="dpDepartamento"  placeholder="Antioquia" required>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Ciudad de Nacimiento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span></span>
											<input type="text" class="form-control" name="dpCiudad" id="dpCiudad" placeholder="Medellin" required>
										</div>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Tipo de Genero</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span></span>
												<select name="dpGenero" id="dpGenero" class="form-control">
														<option value="Seleccionar" selected disabled>Seleccionar</option>
														<option value="Femenino">Femenino</option>
														<option value="Masculino">Masculino</option>
														<option value="Otro">Otro</option>
												</select>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Estado Civil</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span></span>
											<select name="dpEstCivil" id="dpEstCivil" class="form-control" required>
														<option value="Seleccionar" selected disabled>Seleccionar</option>
														<option value="Soltero">Soltero</option>
														<option value="Casado">Casado</option>
														<option value="Ulibre">Únion Libre</option>
												</select>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Ocupación o Profesión</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span></span>
											<input type="text" class="form-control" name="dpProfesion" id="dpProfesion"  placeholder="Técnico" required />
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Tipo de Población</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span></span>
											<select name="dpTipoPobla" id="dpTipoPobla" class="form-control">
														<option value="Seleccionar" selected disabled>Seleccionar</option>
														<option value="Noaplica">No Aplica</option>
														<option value="Minetnica">Mionoría étnica</option>
														<option value="disfisica">Discapacidad física</option>
														<option value="Discognitiva">Discapacidad cognitiva</option>
														<option value="Madrecaflia">Madre cabeza de familia</option>
														<option value="Desforzoso">Desplazamiento forzoso</option>
														<option value="Dissensorial">Discapacidad sensorial</option>
														<option value="comlgtbi">Comunidad LGTBIQ+</option>
												</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">			
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Departamento de Residencia</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span></span>
											<input type="text" class="form-control" name="dpDepaResiden" id="dpDepaResiden" placeholder="Depertamento" required>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="nombre" class="control-label">Ciudad o Municipio de Residencia</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span></span>
											<input type="text" class="form-control" name="dpCiuResiden" id="dpCiuResiden" placeholder="Ciudad Residencia" required>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="ciudad">Disponibilidad Cambio de Residencia</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
											<input type="text" class="form-control" name="dpCambioResiden" id="dpCambioResiden" placeholder="Si/No" />
										</div>
									</div>
								</div><div class="col-xs-3">
									<div class="form-group">
										<label for="estado">Dirección de Residencia</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="dpDireccion" id="dpDireccion" placeholder="calle 1 b 23-10" required />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-xs-3">
									<div class="form-group">
										<label for="ciudad">Aspiración Salarial</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
											<input type="number" class="form-control" name="dpAspSalarial" id="dpAspSalarial" placeholder="1500000" />
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="estado">Años Experiencia</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-o"></i></span>
											<input type="number" class="form-control" name="dpExperiencia" id="dpExperiencia" placeholder="años o meses" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-2">
									<div class="form-group">
										<label for="estado">Descripción de tu perfil</label>
										<div class="input-group">
											<textarea name="dpDescPerfil" id="dpDescPerfil" cols="100" rows="5" placeholder="Cuentanos tu perfil!!"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
							 <input type="button" id="siguiente1" class="btn btn-info btnNext" value="Siguiente">

							</div>
							<div class="form-group">
								<span class="help-block">Todos los campos son requeridos</span>
							</div>
						</div>
					</div><!-- Contenido sobre Informacion Esencial Inicio-->
					<!--==================================================================================-->
					<div class="tab-pane" id="info-educacion">
						<!-- Contenido sobre informacion basica Inicio-->
						<div class="container well col-xs-12">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="estado">Estudio</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-o"></i></span>
											<input type="text" class="form-control" name="estado" id="estado" placeholder="Estudio" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="ciudad">Titulo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Titulo" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Universidad ó Institución</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Universidad ó Institución" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="estado">Fecha inicio</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-o"></i></span>
											<input type="date" class="form-control" name="estado" id="estado" placeholder="06-07-1990" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="ciudad">¿Estudia Actualmente?</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="si" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Fecha Final</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
											<input type="date" class="form-control" name="ciudad" id="ciudad" placeholder="06-07-1994" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="estado">País</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="estado" id="estado" placeholder="colombia" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="ciudad">Departamento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="cartagena">
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Ciudad</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="bolivar">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Profesion</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="contador" >
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="direccion">Idiomas</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
											<input class="form-control" type="text" name="direccion" id="direccion" placeholder="español" required >
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="numero">Nivel</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
											<input class="form-control" type="text" name="numero" id="numero" placeholder="tecnico" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Nombre de Institución</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Universidad ó Institución" >
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="direccion">Año de Estudio</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
											<input class="form-control" type="text" name="direccion" id="direccion" placeholder="1990" required>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="button" id="siguiente1" class="btn btn-info btnNext" value="Siguiente">
								<input type="button" id="siguiente1" class="btn btn-info btnPrevious" value="Regresar">
							</div>

							<div class="form-group">
								<span class="help-block">Todos los campos son requeridos</span>
							</div>
						</div>
					</div><!-- Contenido sobre informacion basica Fin-->
					<!--Contenido sobre la informacion experiencia-->
					<div class="tab-pane" id="info-experiencia">
						<!-- Contenido sobre informacion experiencia Inicio-->
						<div class="container well col-xs-12">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="estado">Estudio</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="estado" id="estado" placeholder="Estudio" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="ciudad">Titulo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Titulo" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Universidad ó Institución</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Universidad ó Institución" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="estado">Nombre de la Empresa</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="date" class="form-control" name="estado" id="estado" placeholder="petrozulia" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="ciudad">Perfil</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Adsminitrador" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Cargo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Auxuliar" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="estado">Ocupacion</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="estado" id="estado" placeholder="Estudiante" >
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="ciudad">País</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Colombia" >
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Departamento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Guajira" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Municipio</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Riohacha" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="direccion">Fecha de ingreso</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
											<input class="form-control" type="date" name="direccion" id="direccion" required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="numero">Fecha de retiro</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
											<input class="form-control" type="date" name="numero" id="numero" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Motivo de Retiro</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
											<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Motivo" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="direccion">¿Labora Actualmente?</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
											<input class="form-control" type="text" name="direccion" id="direccion"  placeholder="no" required>
										</div>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="form-group">
										<label for="direccion">Total Tiempo experiencia Laboral</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
											<input class="form-control" type="text" name="direccion" id="direccion"  placeholder="años o meses " required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label for="estado">Descripción de tu experiencia</label>
										<div class="input-group">
											<textarea name="" id="" cols="100" rows="5" placeholder="Cuentanos tu perfil!!"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="button" id="siguiente1" class="btn btn-info btnNext" value="Siguiente">
								<input type="button" id="siguiente1" class="btn btn-info btnPrevious" value="Regresar">
							</div>

							<div class="form-group">
								<span class="help-block">Todos los campos son requeridos</span>
							</div>
						</div>
					</div><!-- Contenido sobre informacion basica Fin-->
					<!--==================================================================================-->
					<div class="tab-pane" id="info-referencia">
						<!-- Contenido sobre informacion responsable Inicio-->
						<div class="container well col-xs-12">
							<h3>Referencia Personal</h3>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="nombre_r">Nombre</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input class="form-control" type="text" name="nombre_r" id="nombre_r"  placeholder="Maria Gutierrez"required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="puesto_r">Ocupacion</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
											<input class="form-control" type="text" name="puesto_r" id="puesto_r" placeholder="Administradora"required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="puesto_r">Teléfono </label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
											<input class="form-control" type="text" name="puesto_r" id="puesto_r" placeholder="Teléfono " required>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label for="correo_r">E-mail</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
											<input class="form-control" type="email" name="correo_r" id="correo_r" placeholder="maria@gmail.com"  required>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="numero_r">Numero celular</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
											<input class="form-control" type="text" name="numero_r" id="numero_r" placeholder="30077777" required>
										</div>
									</div>
								</div>
							</div>
							<h3>Referencia Laboral</h3>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="nombre_r">Nombre de la Empresa</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input class="form-control" type="text" name="nombre_r" id="nombre_r"  placeholder="EDS_Progreso"required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="puesto_r">Jefe Inmediato</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
											<input class="form-control" type="text" name="puesto_r" id="puesto_r" placeholder="Alfonso Molina " required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="puesto_r">Cargo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
											<input class="form-control" type="text" name="puesto_r" id="puesto_r"placeholder="Gerente" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label for="correo_r">E-mail</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
											<input class="form-control" type="email" name="correo_r" id="correo_r" placeholder="edsprogfreso22@gmail.com" required>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="numero_r">Numero celular</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
											<input class="form-control" type="text" name="numero_r" id="numero_r" placeholder="300777777" required>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="form-group">
								<input type="button" id="siguiente1" class="btn btn-info btnPrevious" value="Regresar">
								<button type="reset" class="btn btn-info">Limpiar</button>
								<button id="boton_ingreso_empresa" type="submit" class="btn btn-info">Guardar</button>
							</div>
							<div class="form-group">
								<span class="help-block">Todos los campos son requeridos</span>
							</div>
						</div>
					</div><!-- Contenido sobre informacion responsable Fin-->

				</div><!-- Contenido Fin -->
			</form>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#siguiente1').click(function() {
			/*$("#home").hide();
			$('#tab-info-esencial').removeClass('active').addClass('');
			$("#info-basica").show();
			$('#tab-info-basica').removeClass('').addClass('active');
		});
	});*/
</script>
<?php require_once 'view/_footer.php'; ?>