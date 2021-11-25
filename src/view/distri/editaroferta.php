<?php

namespace src\view\distri;

require_once 'view/_main.php'; ?>

<!-- Page Title start -->
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">Actualizar Oferta</h1>
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

                        <!-- Job Information -->
                        <h5>Información de la oferta</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="formrow">
                                    <label for="tituloOferta">Titulo de la Oferta</label>
                                    <input type="text" name="jobtitle" class="form-control" placeholder="vacante">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow">
                                    <label for="cargo">Cargo</label>
                                    <input type="text" name="cargoOfertas" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="Profesion">Profesión</label>
                                    <select class="form-control" name="indus">
                                        <option>Ingenieria</option>
                                        <option>Compras/</option>
                                        <option>Transporte</option>
                                        <option>Hoteleria</option>
                                        <option>Medicina</option>
                                        <option>Docencia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="Salario/ingreso">Salario o Ingreso</label>
                                    <select class="form-control" name="salario">
                                        <option>Salario mensual</option>
                                        <option>$500 - $999</option>
                                        <option>$999 - $1499</option>
                                        <option>$1500 - $1999</option>
                                        <option>$2000 - $3000</option>
                                        <option>por encima de $3000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="Tipo de Documento">Tipo de Documento Empleador</label>
                                    <select class="form-control" name="tipodc_oferta">
                                        <option>Cédula</option>
                                        <option>Nit</option>
                                        <option>Cédula de Extranjéria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="Numero de Inetificación"># de Documento Empleador</label>
                                    <input type="number" name="numid_oferta" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="Razon Social">Razon Socicial Empleador</label>
                                    <input type="text" name="Rsocial_oferta" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="Numero de Inetificación">Sector Economico Empleador</label>
                                    <input type="number" name="numid_oferta" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="nivelEstudios">Nivel de Estudios Requeridos</label>
                                    <input type="text" name="Niveletudio" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="tituloOferta">Tiempo de Experiencia</label>
                                    <input type="number" name="timeExperiencia" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow">
                                    <label for="cantOfertas">Cantidad de Ofertas</label>
                                    <input type="number" name="cantOfertas" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label for="departamento">Departamento</label>
                                    <select class="form-control" name="depa_oferta">
                                        <option>Guajira</option>
                                        <option>Bolivar</option>
                                        <option>Atlántico</option>
                                        <option>Antioquia</option>
                                        <option>Santander</option>
                                        <option>Tolima</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label for="municipio">Municipio</label>
                                    <select class="form-control" name="ciudad_oferta">
                                        <option>Riohacha</option>
                                        <option>Cartegena</option>
                                        <option>Barrabquilla</option>
                                        <option>Medellín</option>
                                        <option>Bucaramganga</option>
                                        <option>Ibagué</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="formrow">
                                    <label for="fechaPublicacion">Fecha de Publicación </label>
                                    <input type="date" name="fechap_oferta" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="formrow">
                                    <label for="fechaVencimiento">Fecha de Vencimiento</label>
                                    <input type="date" name="fechav_oferta" class="form-control" placeholder="0">
                                </div>
                            </div>

                            <!--<div class="col-md-12">
                <div class="formrow">
                	<ul class="row featchoose">
                    	<li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="radio" name=""> Your radio Label</li>
                        <li class="col-md-4"><input type="radio" name=""> Your radio Label</li>
                        <li class="col-md-4"><input type="radio" name=""> Your radio Label</li>
                    </ul>
                </div>
              </div>-->

                            <div class="col-md-12">
                                <div class="formrow">
                                    <label for="descripcion">Descripción de la Oferta</label>
                                    <textarea class="form-control" name="descri_oferta"
                                        placeholder="Descripción detallada de la oferta..."></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn" value="Actualizar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'view/_footer.php'; ?>