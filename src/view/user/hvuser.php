<?php

namespace src\view\user;




$dpDescripcion = '';
$userExperienciaDescripcion = '';

require_once 'view/_main.php'; ?>



<link rel="stylesheet" href="<?php echo constant('JS')?>richtexteditor/rte_theme_default.css" />

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
										<label for="ciudad">Teléfono fijo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
											<input type="tel" class="form-control" name="dpTel" id="dpTel" placeholder="Teléfono  Fijo" />
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="ciudad">Teléfono Celular</label>
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
											<input type="text" class="form-control" name="dpDepartamento" id="dpDepartamento" placeholder="Antioquia" required>
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
											<input type="text" class="form-control" name="dpProfesion" id="dpProfesion" placeholder="Técnico" required />
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
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="estado">Dirección de Residencia</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="dpDireccionResi" id="dpDireccionResi" placeholder="calle 1 b 23-10" required />
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
								<div class="col-xs-12">
									<div class="form-group">
										<br>
										<label for="descripcion">Descripción de perfil</label>
										<br><br>
										<div class="input-group">
											<textarea name="dpDescripcion" id="dpDescripcion" cols="120" rows="5" placeholder="Cuentanos tu perfil !!"></textarea>
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
					</div>
					<!-- FORMACION Y EDUCACION -->
					<!--==================================================================================-->
					<div class="tab-pane" id="info-educacion">
						<!-- Contenido sobre informacion basica Inicio-->
						<div class="container well col-xs-12">
							<div class="row">
								<div class="col-xs-3">
									<div class="form-group">
										<label for="estado">Nivel de Estudio</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-o"></i></span>
											<select name="hvf_NivEstudio" id="hvf_NivEstudio" class="form-control">
												<option value="Seleccionar" selected disabled>Seleccionar</option>
												<option value="Bprimaria">Básica Primaria</option>
												<option value="Bagraduado">Bachiller Graduado</option>
												<option value="Baincompleto">Bachiller Incompleto</option>
												<option value="Esuniversitario">Estudiante Universitario</option>
												<option value="Tecnico">Técnico</option>
												<option value="Tecnologo">Tecnólogo</option>
												<option value="Profesional">Profesional</option>
												<option value="Proespecialista">Profesional con Especialización</option>
												<option value="Promaestria">Profesional con Maestría</option>
												<option value="prodoctorado">Profesional con Doctorado</option>
												<option value="otro">Otro</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="ciudad">Título</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
											<input type="text" class="form-control" name="hvf_Titulo" id="hvf_Titulo" placeholder="Titulo" />
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="direccion">Estudio Informal</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
											<input class="form-control" type="text" name="hvf_EstInformal" id="hvf_EstInformal" placeholder="Curso o taller" required>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="form-group" class="control-label">Universidad ó Institución</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
											<input type="text" class="form-control" name="hvf_Universidad" id="hvf_Universidad" placeholder="Universidad ó Institución" />
										</div>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-xs-2">
									<div class="form-group">
										<label for="ciudad">¿Estudia Actualmente?</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<select name="hvf_EstudiaActual" id="hvf_EstudiaActual" class="form-control">
												<option value="Seleccionar" selected disabled>Seleccionar</option>
												<option value="estudiasi">Si</option>
												<option value="estudiano">No</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="form-group" class="control-label">Fecha Inicio</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
											<input type="date" class="form-control" name="hvf_FechaInicio" id="hvf_FechaInicio" placeholder="06-07-1990" />
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="form-group" class="control-label">Fecha Final</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
											<input type="date" class="form-control" name="hvf_FechaFinal" id="hvf_FechaFinal" placeholder="06-07-1994" />
										</div>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="form-group">
										<label for="direccion">Idiomas</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
											<input class="form-control" type="text" name="hvf_Idiomas" id="hvf_Idiomas" placeholder="español" required>
										</div>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="form-group">
										<label for="numero">Nivel</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
											<select name="hvf_NivelIngles" id="hvf_NivelIngles" class="form-control">
												<option value="Seleccionar" selected disabled>Seleccionar</option>
												<option value="nivbasico">Básico</option>
												<option value="nivintermedio">Intermedio</option>
												<option value="niavanzado">Avanzado</option>
											</select>
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
											<input type="text" class="form-control" name="hvf_Pais" id="hvf_Pais" placeholder="colombia" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="ciudad">Departamento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="hvf_departamento" id="hvf_departamento" placeholder="cartagena">
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Ciudad</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" class="form-control" name="hvf_Ciudad" id="hvf_Ciudad" placeholder="bolivar">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<input type="button" id="siguiente1" class="btn btn-info btnPrevious" value="Regresar">
								<input type="button" id="siguiente1" class="btn btn-info btnNext" value="Siguiente">
							</div>

							<div class="form-group">
								<span class="help-block">Todos los campos son requeridos</span>
							</div>
						</div>
					</div>
					
					<!-- EXPERIENCIA LABORAL -->
					<!--==================================================================================-->
					
					<div class="tab-pane" id="info-experiencia">
						<!-- Contenido sobre informacion experiencia Inicio-->
						<div class="container well col-xs-12">
							<div class="row">
								<div class="col-xs-8">
									<div class="form-group">
										<div class="input-group">
											<h5>¿Cuenta con Experiencia Laboral?
												<input type="checkbox" name="hvex_TieneExpe" id="hvex_TieneExpe"/>
											</h5>
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
											<input type="text" class="form-control" name="hvex_NomEmpresa" id="hvex_NomEmpresa" placeholder="Nombre Empresa" />
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="ciudad">Actividad de la Empresa</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="hvex_ActiEmpresa" id="hvex_ActiEmpresa" placeholder="Actividad Empresa" />
										</div>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="form-group">
										<label for="form-group" class="control-label">Nombre del Cargo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="hvex_NomCargo" id="hvex_NomCargo" placeholder="Cargo" />
										</div>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-xs-3">
									<div class="form-group">
										<label for="form-group" class="control-label">Perfil</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="hvex_Perfil" id="hvex_Perfil" placeholder="Perfil" />
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="estado">Ocupación</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="hvex_Ocupacion" id="hvex_Ocupacion" placeholder="petrozulia" />
										</div>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="form-group">
										<label for="ciudad">País</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="hvex_Pais" id="hvex_Pais" placeholder="Adsminitrador" />
										</div>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="form-group">
										<label for="form-group" class="control-label">Departamento</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="hvex_Departamento" id="hvex_Departamento" placeholder="Auxuliar" />
										</div>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="form-group">
										<label for="estado">Municipio</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-refresh"></i></span>
											<input type="text" class="form-control" name="hvex_Municipio" id="hvex_Municipio" placeholder="Estudiante">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<div class="form-group">
										<label for="direccion">¿Labora Actualmente?</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
											<select name="hvex_laboraActual" id="hvex_laboraActual" class="form-control">
												<option value="Seleccionar" selected disabled>Seleccionar</option>
												<option value="laborasi">Si</option>
												<option value="laborano">No</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="ciudad">Fecha de ingreso</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="date" class="form-control" name="hvex_FechaIngreso" id="hvex_FechaIngreso">
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="form-group" class="control-label">Fecha de retiro</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="date" class="form-control" name="hvex_FechaRetiro" id="hvex_FechaRetiro" />
										</div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="direccion">Total Tiempo experiencia Laboral</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
											<input class="form-control" type="number" name="hvex_ExperienLaboral" id="hvex_ExperienLaboral" placeholder="años o meses " required>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label for="estado">Descripción de las funciones realizadas</label>
										<div class="input-group">
											<textarea name="hvex_DescriFunciones" id="hvex_DescriFunciones" cols="100" rows="5" placeholder="Cuentanos..."></textarea>
										</div>
									</div>
								</div>
							</div>
							
							
							<!-- <div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<br>
										<label for="descripcion">Descripción de las funciones realizadas</label>
										<br><br>
										<div class="input-group">
											<textarea name="userExperienciaDescripcion" id="userExperienciaDescripcion" cols="120" rows="5" placeholder="Cuentanos ..."></textarea>
										</div>
										
									</div>
								</div>
							</div> -->
							
							
							<div class="form-group">
								<input type="button" id="siguiente1" class="btn btn-info btnPrevious" value="Regresar">
								<input type="button" id="siguiente1" class="btn btn-info btnNext" value="Siguiente">
							</div>

							<div class="form-group">
								<span class="help-block">Todos los campos son requeridos</span>
							</div>
						</div>
					</div>
	
					<!-- REFERENCIAS -->
					<!--==================================================================================-->

					<div class="tab-pane" id="info-referencia">
						<!-- Contenido sobre informacion responsable Inicio-->
						<div class="container well col-xs-12">
							<h3>Referencia Personal</h3>
							<br>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="nombre referencia personal">Nombre Completo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input class="form-control" type="text" name="hvref_Nombre" id="hvref_Nombre" placeholder="Maria Gutierrez" required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="Ocupacion referencia personal">Ocupación</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
											<input class="form-control" type="text" name="hvref_Ocupacion" id="hvref_Ocupacion" placeholder="Administradora" required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="Telefono referebcia personal">Teléfono</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
											<input class="form-control" type="tel" name="hvref_Telefono" id="hvref_Telefono" placeholder="Teléfono " required>
										</div>
									</div>
								</div>
							</div>
							<br>

							<h3>Referencia Laboral</h3>
							<br>
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<label for="Nombre de la Empresa">Nombre de la Empresa</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input class="form-control" type="text" name="hvref_Empresa" id="hvref_Empresa" placeholder="EDS_Progreso" required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="Nombre de el Jefe Inmediato">Nombre de el Jefe Inmediato</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
											<input class="form-control" type="text" name="hvref_JefeInmed" id="hvref_JefeInmed" placeholder="Alfonso Molina " required>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label for="Nombre del Cargo">Nombre del Cargo</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
											<input class="form-control" type="text" name="hvref_Cargo" id="hvref_Cargo" placeholder="Gerente" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label for="email referencia laboral">E-mail</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
											<input class="form-control" type="email" name="hvref_correo" id="hvref_correo" placeholder="edsprogfreso22@gmail.com" required>
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="telefono referencia laboral">Teléfono</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
											<input class="form-control" type="tel" name="hvref_telefono" id="hvref_telefono" placeholder="300777777" required>
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
<?php require_once 'view/_footer.php'; ?>
<script type="text/javascript" src="<?php echo constant('JS')?>richtexteditor/rte.js"></script>
<!--  <script src="./js/next.js"></script> -->
<script>
	var editor1 = new RichTextEditor("#dpDescripcion");

	editor1.setHTMLCode("<?php echo $dpDescripcion; ?>");

	function btngetPlainText() {
		alert(editor1.getPlainText())
	}
</script>

<script>
	RTE_DefaultConfig.url_base = 'richtexteditor'
</script>
<script type="text/javascript" src='<?php echo constant('JS')?>richtexteditor/plugins/all_plugins.js'></script>
<script src="<?php echo constant('JS')?>res/patch.js"></script>
