<?php 
namespace src\view\user;
require_once 'view/_main.php';?>

<!-- Revolution slider start -->
<section>
    <!--Search Bar start-->
    <div class="searchbar user">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 pad_busqueda ">
                    <input type="text" class="form-control" placeholder="Escriba su busqueda ... " />
                </div>
                <div class="col-md-3 col-sm-5 pad_busqueda ">
                    <select class="form-control" placeholder="Categoria">
                        <option>Asesor de servicios de combustible</option>
                        <option>Auxiliar administrativo</option>
                        <option>Auxiliar Contable</option>
                        <option>Administrador de EDS</option>
                        <option>Jefe de patio</option>
                        <option>Contador </option>
                        <option>Ingeniero en SST </option>
                        <option>Tecnólogo en SST</option>
                        <option>Técnico en SST</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-4 pad_busqueda">
                    <select class="form-control">
                        <option>Ciudad</option>
                        <option>Bogota</option>
                        <option>Medellin</option>
                        <option>Barraquilla</option>
                        <option>Cartagena</option>
                        <option>Cali</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-3 pad_busqueda">
                    <input type="submit" class="btn" value="Buscar">
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->
</section>
<!-- Latest Jobs start -->
<div class="section greybg">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <h3>Aliados <span>Estrategicos</span></h3>
        </div>
        <!-- title end -->

        <ul class="jobslist row">
            <!--Job 1-->
            <li class="col-md-4 col-sm-6">
                <div class="jobint">
                    <div class="row">
                        <img src="../assets/img/employers/logo-unidad-spe.png" alt="Job Name" />
                        <h4><a href="#.">Servicio Publico de Empleo</a></h4>
                    </div>
                </div>
            </li>
            <li class="col-md-4 col-sm-6">
                <div class="jobint1">
                    <div class="row">
                        <img src="../assets/img/employers/LogoF50.png" alt="Job Name" />
                        <h4><a href="https://fendipetroleo.com/" top="blanck">Fendipetroleo Nacional</a></h4>
                    </div>
                </div>
            </li>
            <li class="col-md-4 col-sm-6">
                <div class="jobint">
                    <div class="row">
                        <img src="../assets/img/employers/logo-unidad-spe.png" alt="Job Name" />
                        <h4><a href="https://www.serviciodeempleo.gov.co/">Servicio Publico de Empleo</a></h4>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<?php require_once 'view/_footer.php';?>