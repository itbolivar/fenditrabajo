<?php require_once 'view/_main.php';?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Ofertas Publicadas</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">inicio</a> / <a href="listaofertas.html">trabajos</a> / <span>nombre trabajo</span></div>
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
        <div class="col-md-3"><a href="#." class="btn"><i class="fa fa-file-text" aria-hidden="true"></i> Lista de Ofertas</a></div>
        <div class="col-md-9">
          <div class="searchform">
            <div class="row">
              <div class="col-md-4 col-sm-3">
                <input type="text" class="form-control" placeholder="ofertas" />
              </div>
              <div class="col-md-2 col-sm-2">
                <select class="form-control">
                  <option>Area</option>
                </select>
              </div>
              <div class="col-md-2 col-sm-2">
                <select class="form-control">
                <option value="" selected disabled>ciudad</option>
				<option value="Guania">Guainia</option>
                <option value="vaupes">Vaupes</option>
                <option value="Guajira">Guajira</option>
                <option value="barranquilla">Barranquilla</option>
                <option value="cartagena">Cartagena</option>
                <option value="santamarta">Santamarta</option>
                <option value="medellin">Medellin</option>
                <option value="bucaramagana">Bucaramanga</option>
                <option value="bogota">Bogota</option>
                <option value="tolima">Tolima</option>
                <option value="monteria">Monteria</option>
                <option value="Amazonas">Amanonas</option>
											
																				
				</option>
                </select>
              </div>
              <div class="col-md-3 col-sm-3">
                <select class="form-control">
                  <option>Fecha de Publicacion</option>
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
      <div class="col-md-3 col-sm-6">
        <!-- Side Bar start -->
        <div class="sidebar">
          <!-- Jobs By Title -->
          <div class="widget">
            <h4 class="widget-title">Ofertas por EDS</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="webdesigner" />
                <label for="webdesigner"></label>
                Islero<span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="3dgraphic" />
                <label for="3dgraphic"></label>
                Vendedor de combustible<span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="graphic" />
                <label for="graphic"></label>
                Bombero de EDS <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="electronicTech" />
                <label for="electronicTech"></label>
                Auxiliar Administrativa  <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="webgraphic" />
                <label for="webgraphic"></label>
                Administrador de EDS <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="brandmanager" />
                <label for="brandmanager"></label>
                 Jefe de Patio<span>33</span> </li>
            </ul>
            <!-- title end -->
            <a href="#.">Mas</a> </div>

          <!-- Jobs By City -->
          <div class="widget">
            <h4 class="widget-title">Ciudades</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="newyork" />
                <label for="newyork"></label>
                Guajira <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="losangles" />
                <label for="losangles"></label>
                Baranquilla <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="chicago" />
                <label for="chicago"></label>
                Cartegena <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="houston" />
                <label for="houston"></label>
                Medellín <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="sandiego" />
                <label for="sandiego"></label>
                Bucaramanga <span>555</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="sanjose" />
                <label for="sanjose"></label>
                tolima <span>44</span> </li>
            </ul>
            <a href="#.">Mas</a> </div>
          <!-- Jobs By City end-->

          <!-- Jobs By Experience -->
          <div class="widget">
            <h4 class="widget-title">Dispinibilidad laboral</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="permanent" />
                <label for="permanent"></label>
                Tiempo<span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="contract" />
                <label for="contract"></label>
                tiempo completo <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="parttime" />
                <label for="parttime"></label>
                tiempo parcial  <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="internship" />
                <label for="internship"></label>
                indefinido <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="freelance" />
                <label for="freelance"></label>
                 <span></span> </li>
            </ul>
            <a href="#.">Mas</a> </div>
          <!-- Jobs By Experience end -->

          <!-- Jobs By Industry -->
          <div class="widget">
            <h4 class="widget-title">categorias</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="infotech" />
                <label for="infotech"></label>
                Profecional <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="advertise" />
                <label for="advertise"></label>
                tecnico <span>45</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="services" />
                <label for="services"></label>
                tecnologo <span>44</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="health" />
                <label for="health"></label>
                tecnico laboral <span>88</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="mediacomm" />
                <label for="mediacomm"></label>
                auxiliares <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="fashion" />
                <label for="fashion"></label>
                auxiliares <span>11</span> </li>
            </ul>
            <a href="#.">Mas</a> </div>
          <!-- Jobs By Industry end -->

          <!-- Top Companies -->
          <div class="widget">
            <h4 class="widget-title">Top EDS</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="Envato" />
                <label for="Envato"></label>
                Nombre <span>1</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Themefores" />
                <label for="Themefores"></label>
                Nombre <span>2</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="GraphicRiver" />
                <label for="GraphicRiver"></label>
                Nombre <span>3</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Codecanyon" />
                <label for="Codecanyon"></label>
                Nombre <span>4</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="AudioJungle" />
                <label for="AudioJungle"></label>
                Nombre <span>5</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Videohive" />
                <label for="Videohive"></label>
                Nombre <span>6</span> </li>
            </ul>
            <a href="#.">Mas</a> </div>
          <!-- Top Companies end -->

          <!-- Salary -->
          <div class="widget">
            <h4 class="widget-title">Rango Salario</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="price1" />
                <label for="price1"></label>
                500000 to $100000 <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price2" />
                <label for="price2"></label>
                $1500000 to $2000000 <span>41</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price3" />
                <label for="price3"></label>
                $199 to $499 <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price4" />
                <label for="price4"></label>
                $499 to $999 <span>66</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price5" />
                <label for="price5"></label>
                $999 to $4999 <span>159</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price6" />
                <label for="price6"></label>
                Above $4999 <span>865</span> </li>
            </ul>
            <a href="#.">Mas</a> </div>
          <!-- Salary end -->

          <!-- button -->
          <div class="searchnt">
            <button class="btn"><i class="fa fa-search" aria-hidden="true"></i> Buscar oferta</button>
          </div>
          <!-- button end-->
        </div>
        <!-- Side Bar end -->
      </div>
      <div class="col-md-3 col-sm-6 pull-right">
        <!-- Social Icons -->
        <div class="sidebar">
          <h4 class="widget-title">siguenos</h4>
          <div class="social"> <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="http://www.facebook.com" target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://www.pinterest.com" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> </div>
          <!-- Social Icons end -->
        </div>

        <!-- Sponsord By -->
        <div class="sidebar">
          <h4 class="widget-title">publicidad</h4>
          <div class="gad"><img src="../assets/img/convenios/logof.png" alt="publicidad" />
          </div>
          <br>
          <div class="gad"><img src="../assets/img/googlead.jpg" alt="publicidad" />
          </div>
          <div class="gad"><img src="../assets/img/convenios/fm.png" alt="publicidad" /></div>
          <div class="gad"><img src="../assets/img/googlead2.jpg" alt="publicidad" /></div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <!-- Search List -->
        <ul class="searchList">
          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                    <p> Fecha de cierre: 11/08/2021</p>
                  <div class="clearfix">Estado
                    <label class="seleccionado">Finalizada</label> 
                    
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="preseleccion.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                  <p> Fecha de ciere: 11/10/2021</p>
                  <div class="clearfix">Estado
                    <label class="seleccionado">Proceso</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="preseleccion.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                    <p> Fecha de cierre: 10/06/2021</p>
                  <div class="clearfix">Estado
                    <label class="seleccionado">proceso</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="preseleccion.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                  <div class="clearfix">Estado
                    <label class="freelance">Finalizada</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="preseleccion.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                   <p> Fecha de cierre: 10/06/2021</p>
                   <div class="clearfix">Estado
                    <label class="seleccionado">Pendiente</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="preseleccion.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                  <p> Fecha de cierre: 10/06/2021</p>
                  <div class="clearfix">Estado
                    <label class="seleccionado">Pendiente</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="preseleccion.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                  <div class="clearfix">Estado
                    <label class="seleccionado">Finalizada</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="preseleccion.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                  <p> Fecha de cierre: 10/06/2021</p>
                  <div class="clearfix">Estado
                    <label class="seleccionado">Finalizada</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#.">Adminitrador de Estacion de Servicio</a></h3>
                  <p> Fecha de Publicacion: 10/06/2021</p>
                   <p> Fecha de cierre: 10/06/2021</p>
                  <div class="clearfix">Estado
                    <label class="seleccionado">Finalizada</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Detalles</a></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
          </li>
          <!-- job end -->

          <!-- job start -->
          <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobimg"><img src="../assets/img/jobs/jobimg.jpg" alt="Job Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">oferta</a></h3>
                  <div class="companyName"><a href="#.">nombre de la empresa</a></div>
                  <div class="location"><label class="partTime">tiempo</label>   - <span>ciudad</span></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="detalleempleo.php">Aplicar</a></div>
              </div>
            </div>
            <p> sugerencia para poder aplicar a la oferta.</p>
          </li>
          <!-- job end -->

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
                <li><a href="#.">3</a></li>
                <li><a href="#.">4</a></li>
                <li><a href="#.">5</a></li>
                <li><a href="#.">6</a></li>
                <li><a href="#.">7</a></li>
                <li><a href="#.">8</a></li>
                <li><a href="#.">9</a></li>
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
