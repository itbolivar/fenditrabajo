<?php 
namespace src\view\user;
require_once 'view/_main.php';?>

<!-- Page Title start -->
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">Lista de Oferta</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="#.">inicio</a> / <a href="listaofertas.html">trabajos</a> /
                    <span>nombre trabajo</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title End -->
<div class="listpgWraper">
    <div class="container">

        <!-- Page Title start -->
        <div class="pageSearch">
            <div class="row">
                <div class="col-md-3"><a href="#." class="btn"><i class="fa fa-file-text" aria-hidden="true"></i>
                        Ultimas ofertas</a></div>
                <div class="col-md-9">
                    <div class="searchform">
                        <div class="row">
                            <div class="col-md-4 col-sm-3">
                                <input type="text" class="form-control" placeholder="ofertas de empleo" />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <select class="form-control">
                                    <option>Industrias</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <select class="form-control">
                                    <option>Ciudad</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <select class="form-control">
                                    <option>Salario</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-sm-2">
                                <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title end -->

        <!-- Search Result and sidebar start -->
        <div class="row">
            <!-- <div class="col-md-3 col-sm-6">
                <!-- Side Bar start -->
                <!-- <div class="sidebar">
                    <!-- Jobs By Title -->
                   <!--  <div class="widget"> 
                        <h4 class="widget-title">Ofertas de Empleo</h4>
                        <ul class="optionlist">
                            <li>
                                <input type="checkbox" name="checkname" id="webdesigner" />
                                <label for="webdesigner"></label>
                                Vendedor de Servicio <span>12</span>
                            </li>

                            <li>
                                <input type="checkbox" name="checkname" id="electronicTech" />
                                <label for="electronicTech"></label>
                                Promotores de Servicio <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="webgraphic" />
                                <label for="webgraphic"></label>
                                Auxiliar de Isla <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="brandmanager" />
                                <label for="brandmanager"></label>
                                Auxiliar ADminitrativo <span>33</span>
                            </li>
                        </ul>
                        <!-- title end 
                        <a href="#.">Mas</a>
                    </div>

                    <!-- Jobs By City 
                    <div class="widget">
                        <h4 class="widget-title">Ciudades</h4>
                        <ul class="optionlist">
                            <li>
                                <input type="checkbox" name="checkname" id="newyork" />
                                <label for="newyork"></label>
                                Guajira <span>12</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="losangles" />
                                <label for="losangles"></label>
                                Baranquilla <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="chicago" />
                                <label for="chicago"></label>
                                Cartegena <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="houston" />
                                <label for="houston"></label>
                                Medellín <span>12</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="sandiego" />
                                <label for="sandiego"></label>
                                Bucaramanga <span>555</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="sanjose" />
                                <label for="sanjose"></label>
                                Tolima <span>44</span>
                            </li>
                        </ul>
                        <a href="#.">Mas</a>
                    </div> -->
                    <!-- Jobs By City end-->

                    <!-- Jobs By Experience -->
                   <!-- <div class="widget">
                        <h4 class="widget-title">Experiencia</h4>
                        <ul class="optionlist">
                            <li>
                                <input type="checkbox" name="checkname" id="permanent" />
                                <label for="permanent"></label>
                                Tiempo<span>12</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="contract" />
                                <label for="contract"></label>
                                tiempo completo <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="parttime" />
                                <label for="parttime"></label>
                                tiempo parcial <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="internship" />
                                <label for="internship"></label>
                                indefinido <span>33</span>
                            </li>
                        </ul>
                        <a href="#.">Mas</a>
                    </div>
                    <!-- Jobs By Experience end -->

                    <!-- Jobs By Industry -->
                    <!--<div class="widget">
                        <h4 class="widget-title">Industriales</h4>
                        <ul class="optionlist">
                            <li>
                                <input type="checkbox" name="checkname" id="infotech" />
                                <label for="infotech"></label>
                                tecnologia informacion <span>22</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="advertise" />
                                <label for="advertise"></label>
                                Analista <span>45</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="services" />
                                <label for="services"></label>
                                Servicios <span>44</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="health" />
                                <label for="health"></label>
                                Auxiliares <span>88</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="mediacomm" />
                                <label for="mediacomm"></label>
                                comunicación <span>22</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="fashion" />
                                <label for="fashion"></label>
                                Asesores <span>11</span>
                            </li>
                        </ul>
                        <a href="#.">Mas</a>
                    </div>
                    <!-- Jobs By Industry end -->

                    <!-- Top Companies -->
                    <!--<div class="widget">
                        <h4 class="widget-title">Top Banderas Mayoristas</h4>
                        <ul class="optionlist">
                            <li>
                                <input type="checkbox" name="checkname" id="Envato" />
                                <label for="Envato"></label>
                                esso <span>12</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="Themefores" />
                                <label for="Themefores"></label>
                                petrobras <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="GraphicRiver" />
                                <label for="GraphicRiver"></label>
                                primax <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="Codecanyon" />
                                <label for="Codecanyon"></label>
                                puma <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="AudioJungle" />
                                <label for="AudioJungle"></label>
                                oil <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="Videohive" />
                                <label for="Videohive"></label>
                                petromil <span>33</span>
                            </li>
                        </ul>
                        <a href="#.">Mas</a>
                    </div>
                    <!-- Top Companies end -->

                    <!-- Salary -->
                    <!--<div class="widget">
                        <h4 class="widget-title">Rango Salario</h4>
                        <ul class="optionlist">
                            <li>
                                <input type="checkbox" name="checkname" id="price1" />
                                <label for="price1"></label>
                                500000 to $100000 <span>12</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="price2" />
                                <label for="price2"></label>
                                $1500000 to $2000000 <span>41</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="price3" />
                                <label for="price3"></label>
                                $199 to $499 <span>33</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="price4" />
                                <label for="price4"></label>
                                $499 to $999 <span>66</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="price5" />
                                <label for="price5"></label>
                                $999 to $4999 <span>159</span>
                            </li>
                            <li>
                                <input type="checkbox" name="checkname" id="price6" />
                                <label for="price6"></label>
                                Above $4999 <span>865</span>
                            </li>
                        </ul>
                        <a href="#.">Mas</a>
                    </div>
                    <!-- Salary end -->

                    <!-- button -->
                    <!-- <div class="searchnt">
                        <button class="btn"><i class="fa fa-search" aria-hidden="true"></i> Buscar oferta</button>
                    </div> -->
                    <!-- button end-->
               <!-- </div> -->
                <!-- Side Bar end -->
            </div>
            <div class="col-md-4 col-sm-6 pull-right">
                <!-- Social Icons -->
                <div class="sidebar">
                    <h4 class="widget-title">siguenos</h4>
                    <div class="social"> <a href="http://www.twitter.com" target="_blank"><i
                                class="fa fa-twitter-square" aria-hidden="true"></i></a> <a
                            href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-square"
                                aria-hidden="true"></i></a> <a href="http://www.facebook.com" target="_blank"> <i
                                class="fa fa-facebook-square" aria-hidden="true"></i></a> <a
                            href="https://www.pinterest.com" target="_blank"><i class="fa fa-pinterest-square"
                                aria-hidden="true"></i></a> <a href="https://www.youtube.com" target="_blank"><i
                                class="fa fa-youtube-square" aria-hidden="true"></i></a> <a
                            href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"
                                aria-hidden="true"></i></a> </div>
                    <!-- Social Icons end -->
                </div>

                <!-- Sponsord By -->
                <div class="sidebar">
                    <h4 class="widget-title">publicidad</h4>
                    <div class="gad"><img src="../assets/img/convenios/logof.png"" alt=" publicidad" /></div>
                    <div class="gad"><img src="../assets/img/googlead.jpg" alt="publicidad" /></div>
                    <div class="gad"><img src="../assets/img/googlead2.jpg" alt="publicidad" /></div>
                    <div class="gad"><img src="../assets/img/googlead2.jpg" alt="publicidad" /></div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <!-- Search List -->
                <ul class="searchList">
                    <!-- job start -->
                    <li>
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="jobinfo">
                                    <h3><a href="#.">Adminitrador de Estación de Servicio</a></h3>
                                    <div class="companyName"><a href="#.">Importante empresa del sector</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="location">
                                <p>Se solicita personal para trabajar en estaciones de combustible ubicadas
                                    en Corabastos y Soacha...</p>
                                  <div>Bogotá</div>
                            </div>
                            <div class="negrita" >
                            <p>Fecha de publicación: <span>21-11-2021</span></p>
                            <p>Salario: <span> A convenir. </span></p>
                        </div>
                        </div>
                </ul>

                <!-- Pagination Start -->
                <div class="pagiWrap">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="showreslt">comprendido 1-10</div>
                        </div>
                        <div class="col-md-8 col-sm-8 text-right">
                            <ul class="pagination">
                                <li class="active"><a href="#.">1</a></li>
                                <li><a href="#.">2</a></li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Pagination end -->
            </div>
        </div>
    </div>
</div>

<?php require_once 'view/_footer.php';?>