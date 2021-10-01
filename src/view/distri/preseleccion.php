<?php require_once 'view/_main.php'; ?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Lista de candidatos</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Inicio</a> / <a href="#.">Reanudar búsqueda</a> / <span>Candidatos</span></div>
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
        <div class="col-md-3"><a href="#." class="btn"><i class="fa fa-file-text" aria-hidden="true"></i> Filtrar Candidatos</a></div>
        <div class="col-md-9">
          <div class="searchform">
            <div class="row">
              <div class="col-md-4 col-sm-3">
                <input type="text" class="form-control" placeholder="Oferta" />
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
                  <option>Años de experiencia</option>
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
      <div class="col-md-3 col-sm-12">
        <!-- Side Bar start -->
        <div class="sidebar">
          <!-- Jobs By Title -->
          <div class="widget">
            <h4 class="widget-title">Ofertas de Empleos</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="webdesigner" />
                <label for="webdesigner"></label>
                Islero <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="3dgraphic" />
                <label for="3dgraphic"></label>
                vendedor de combustible<span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="graphic" />
                <label for="graphic"></label>
                bombero de EDS <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="electronicTech" />
                <label for="electronicTech"></label>
                Auxiliar de Almacen <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="webgraphic" />
                <label for="webgraphic"></label>
                Jefe de Patio  <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="brandmanager" />
                <label for="brandmanager"></label>
                Adminitrador de EDS<span>33</span> </li>
            </ul>
            <a href="#.">Ver más</a> </div>

          <!-- Jobs By City -->
          <div class="widget">
            <h4 class="widget-title">Trabajos por ciudad</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="newyork" />
                <label for="newyork"></label>
                Medellin <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="losangles" />
                <label for="losangles"></label>
                Ibague <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="chicago" />
                <label for="chicago"></label>
                Cali <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="houston" />
                <label for="houston"></label>
                Cartagena <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="sandiego" />
                <label for="sandiego"></label>
                Bogotá <span>555</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="sanjose" />
                <label for="sanjose"></label>
                Guajira <span>44</span> </li>
            </ul>
            <a href="#.">Ver más</a> </div>

          <!-- Jobs By Experience -->
          <div class="widget">
            <h4 class="widget-title">Disponibilidad Laboral</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="permanent" />
                <label for="permanent"></label>
                 completo <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="contract" />
                <label for="contract"></label>
                medio tiempo <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="parttime" />
                <label for="parttime"></label>
                Tiempo parcial <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="internship" />
                <label for="internship"></label>
                Internado <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="freelance" />
                <label for="freelance"></label>
                jornada continua <span>10</span> </li>
            </ul>
            <a href="#.">Ver más</a> </div>

          <!-- Jobs By Industry -->
          <div class="widget">
            <h4 class="widget-title">Categoria por ofertas</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="infotech" />
                <label for="infotech"></label>
                Profesional <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="advertise" />
                <label for="advertise"></label>
                tecnico laboral <span>45</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="services" />
                <label for="services"></label>
                tecnico <span>44</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="health" />
                <label for="health"></label>
                tecnologo <span>88</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="mediacomm" />
                <label for="mediacomm"></label>
                auxiliar <span>22</span> </li>
             
            </ul>
            <a href="#.">Ver más</a> </div>

          <!-- Top Companies
          <div class="widget">
            <h4 class="widget-title">Compañias</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="Envato" />
                <label for="Envato"></label>
                Envato <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Themefores" />
                <label for="Themefores"></label>
                Themefores <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="GraphicRiver" />
                <label for="GraphicRiver"></label>
                Graphic River <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Codecanyon" />
                <label for="Codecanyon"></label>
                Codecanyon <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="AudioJungle" />
                <label for="AudioJungle"></label>
                Audio Jungle <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Videohive" />
                <label for="Videohive"></label>
                Videohive <span>33</span> </li>
            </ul>
            <a href="#.">View More</a> </div>-->

          <!-- Salary -->
          <div class="widget">
            <h4 class="widget-title">Rango salarial</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="price1" />
                <label for="price1"></label>
                0 to $100 <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price2" />
                <label for="price2"></label>
                $100 to $199 <span>41</span> </li>
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
                Por encima $4999 <span>865</span> </li>
            </ul>
            <a href="#.">Ver más</a> </div>
          <div class="searchnt">
            <button class="btn"><i class="fa fa-search" aria-hidden="true"></i> Buscar Candidatos</button>
          </div>
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
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/01.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Juan Martin Gonzales</a></h3>
                  <div class="cateinfo">Desarrolador Java</div>
                  <div class="location"> Ibague</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$5000 <span>/ mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="detallecandidato.php">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus.</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/02.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Daniela Rubio</a></h3>
                  <div class="cateinfo">Diseñador Garfico</div>
                  <div class="location"> Medellin </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$5000 <span>/mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="detallecandidato.php">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus.</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/03.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#."> Andrea Linares</a></h3>
                  <div class="cateinfo">Master Web</div>
                  <div class="location">Medellin</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$5000 <span>/ mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="detallecandidato.php">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus.</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/04.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Juana Perez</a></h3>
                  <div class="cateinfo">Administradora de empresas</div>
                  <div class="location">Cali</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$5000 <span>/ mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="detallecandidato.php">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus.</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/05.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Pepito Perez</a></h3>
                  <div class="cateinfo">Tecnico en mantenimiento</div>
                  <div class="location">Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$5000 <span>/ mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="detallecandidato.php">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus.</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/01.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Leonel Lopez</a></h3>
                  <div class="cateinfo">Ingeniero Civil</div>
                  <div class="location"> Bogotá</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$5000 <span>/ mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="detallecandidato.php">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus.</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/02.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Diana Mejia</a></h3>
                  <div class="cateinfo">Auxiliar contable</div>
                  <div class="location"> Pereira</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$5000 <span>/ mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="detallecandidato.php">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus.</p>
          </li>
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
        
           </div>
    </div>
  </div>
</div>


        
        

<?php require_once 'view/_footer.php'; ?>
