<?php 
namespace src\view\distri;
require_once 'view/_main.php'; ?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Crear Oferta</h1>
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
            <h5>Informacion del Trabajo</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="vacante">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
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
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                    <option>Salario mensual</option>
                    <option>$500 - $999</option>
                    <option>$999 - $1499</option>
                    <option>$1500 - $1999</option>
                    <option>$2000 - $3000</option>
                    <option>por encima de $3000</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="ciudades">
                    <option>Riohacha</option>
                    <option>Cartegena</option>
                    <option>Barrabquilla</option>
                    <option>Medellin</option>
                    <option>Bucaramganga</option>
                    <option>Ibague</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="empstatus">
                    <option>contrato indefinido</option>
                    <option>tiempo completo</option>
                    <option>medio tiempo</option>
                    <option></option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="emptype">
                    <option>tecnico sistemas</option>
                    <option>jefe de patior</option>
                    <option>Junior Designer</option>
                    <option>Senior Developer</option>
                    <option>Mid Level Designer</option>
                    <option>Frontend Developer</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="nationality">
                    <option>Nacionalidad</option>
                    <option>Colombia</option>
                    <option>Venezuela</option>
                    <option>Peru</option>
                  </select>
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
                  <textarea class="form-control" name="jobdetail" placeholder="Descripcion del Empleo"></textarea>
                </div>
              </div>
            </div>
            <br>
            <input type="submit" class="btn" value="Guardar">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once 'view/_footer.php'; ?>
