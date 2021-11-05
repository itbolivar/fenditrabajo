<?php namespace src\view\distri; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio Fenditrabajo</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Owl carousel -->
<link href="../assets/css/owl.carousel.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="../assets/css/font-awesome.css" rel="stylesheet">

<!-- Custom Style -->
<link href="../assets/css/main.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Header start -->
<div class="header">

  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="../index.html" class="logo">
      <img src="../img/logo.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12">
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
              <li><a href="index.html">EDS EXAMPLE</span></a>
              <li><a href="perfilempresa.html">Perfil</a>
              		<ul class="dropdown-menu">
              			<li><a href="perfilempresa.html">Editar Perfil</a></li>
              		</ul>
              </li>
              <li><a href="listacandidatos.html">Lista Candidatos</a></li>
              <li><a href="oferta.html">Ofertas</a>
              		<ul class="dropdown-menu">
              			<li><a href="qsomos.html">Candidatos</a></li>
              			<li><a href="qsomos.html">Agregar</a></li>
              			<li><a href="qsomos.html">Editar</a></li>
              		</ul>
              </li>


              <ul class="nav navbar-nav navbar-right">
			      <li><a href="../login.html"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
			  </ul>
            </ul>
            <!-- Nav collapes end -->
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end -->
      </div>
    </div>
    <!-- row end -->

  <!-- Header container end -->
</div>

  <!-- Header container end -->
</div>
<!-- Header end -->

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Listiado de Candidatos</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <a href="#.">Volver a Buscar</a> / <span>Candidatos</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">

    <!-- Search Result and sidebar start -->
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <!-- Side Bar start -->
        <div class="sidebar">
          <!-- Jobs By Title -->
          <div class="widget">
            <h4 class="widget-title">Vacantes por Titulo</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="webdesigner" />
                <label for="webdesigner"></label>
                Administrador@ <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="3dgraphic" />
                <label for="3dgraphic"></label>
                Auxiliar <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="graphic" />
                <label for="graphic"></label>
                Vendedor <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="electronicTech" />
                <label for="electronicTech"></label>
                Jefe de Patio <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="webgraphic" />
                <label for="webgraphic"></label>
                Ingeniero Industrial <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="brandmanager" />
                <label for="brandmanager"></label>
                Técnio en Sistemas <span>33</span> </li>
            </ul>
            <a href="#.">Ver Más</a> </div>

          <!-- Jobs By City -->
          <div class="widget">
            <h4 class="widget-title">Vacantes por Ciudad</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="newyork" />
                <label for="newyork"></label>
                Armenia <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="losangles" />
                <label for="losangles"></label>
                Bucaramanga <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="chicago" />
                <label for="chicago"></label>
                Pereira <span>33</span> </li>
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
                Medellín <span>44</span> </li>
            </ul>
            <a href="#.">Ver Más</a> </div>

          <!-- Jobs By Experience -->
          <div class="widget">
            <h4 class="widget-title">Tipo de Contrato </h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="permanent" />
                <label for="permanent"></label>
                Tiempo Completo <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="contract" />
                <label for="contract"></label>
                Obra o Labor <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="parttime" />
                <label for="parttime"></label>
                Medio tiempo <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="internship" />
                <label for="internship"></label>
                Indefinido <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="freelance" />
                <label for="freelance"></label>
                Freelance <span>33</span> </li>
            </ul>
            <a href="#.">Ver Más</a> </div>

          <!-- Jobs By Industry -->
          <div class="widget">
            <h4 class="widget-title">Categoría</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="infotech" />
                <label for="infotech"></label>
                Tecnología <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="advertise" />
                <label for="advertise"></label>
                Servicios<span>45</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="services" />
                <label for="services"></label>
                Oficios Varios<span>44</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="health" />
                <label for="health"></label>
                Administración <span>88</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="mediacomm" />
                <label for="mediacomm"></label>
                Seguridad <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="fashion" />
                <label for="fashion"></label>
                Atención al Cliente <span>11</span> </li>
            </ul>
            <a href="#.">Ver Más</a> </div>

          <!-- Top Companies
          <div class="widget">
            <h4 class="widget-title">Eds</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="Envato" />
                <label for="Envato"></label>
                Fendipetroleo <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Themefores" />
                <label for="Themefores"></label>
                Fendipetroleo <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="GraphicRiver" />
                <label for="GraphicRiver"></label>
                Fendipetroleo <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Codecanyon" />
                <label for="Codecanyon"></label>
                Fendipetroleo <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="AudioJungle" />
                <label for="AudioJungle"></label>
                Fendipetroleo <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Videohive" />
                <label for="Videohive"></label>
                Fendipetroleo <span>33</span> </li>
            </ul>
            <a href="#.">Ver Más</a> </div>-->

          <!-- Salary -->
          <div class="widget">
            <h4 class="widget-title">Rango de Salario</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="price1" />
                <label for="price1"></label>
                0 a $1.000.000 <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price2" />
                <label for="price2"></label>
                $1.000.001 a $1.500.000 <span>41</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price3" />
                <label for="price3"></label>
                $1.500.000 a $2.000.000 <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price4" />
                <label for="price4"></label>
                $2.500.000 a $3.000.000 <span>66</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price6" />
                <label for="price6"></label>
                Superior $3.000.000 <span>865</span> </li>
            </ul>
            <a href="#.">Ver Más</a> </div>
          <div class="searchnt">
            <button class="btn"><i class="fa fa-search" aria-hidden="true"></i> Buscar Candidato</button>
          </div>
        </div>
        <!-- Side Bar end -->
      </div>
      <div class="col-md-9 col-sm-12">
        <!-- Search List -->
        <ul class="searchList">
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/01.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Luis Jarava</a></h3>
                  <div class="cateinfo">Administrador</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$2.200.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/05.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Luis Jarava</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$4.000.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/04.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Eliana Cardona</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$6.000.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/03.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Eliana Cardona</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$2.000.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/02.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Eliana Cardona</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$3.000.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/05.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Luis Jarava</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$5.000.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/04.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Eliana Cardona</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$1.000.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/03.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Eliana Cardona</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$2.500.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/02.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Eliana Cardona</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$10.000.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <!-- Candidate -->
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg"><img src="../assets/img/candidates/01.jpg" alt="Candidate Name" /></div>
                <div class="jobinfo">
                  <h3><a href="#.">Luis Jarava</a></h3>
                  <div class="cateinfo">Ingeniero en Sistemas</div>
                  <div class="location"> Cartagena</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="minsalary">$2.000.000 <span>/ Mes</span></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="#.">Ver Perfil</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
        </ul>

        <!-- Pagination Start -->
        <div class="pagiWrap">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="showreslt">Mostrar 1-10</div>
            </div>
            <div class="col-md-8 col-sm-6 text-right">
              <ul class="pagination">
                <li class="active"><a href="#.">1</a></li>
                <li><a href="#.">2</a></li>
                <li><a href="#.">3</a></li>
                <li><a href="#.">4</a></li>
                <li><a href="#.">5</a></li>
                <li><a href="#.">6</a></li>
                <li><a href="#.">7</a></li>
                <li><a href="#.">8</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Footer-->
<div class="footerWrap">
  <div class="container">
      <!--About Us-->
        <div class="ft-logo"><img src="../assets/img/logo.png" alt="Fenditrabajo"></div>
        <!-- Social Icons -->
        <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
        <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true">
        </i></a>
        </div>
        <div class="copyright">
         &copy; Copyright <strong> <span>Fenditrabajo Nacional</span> 2021</strong>. Todos los derechos reservados
       </div>
        <!-- Social Icons end -->
      <!--About us End-->
    </div>
  </div>
<!--Footer end-->


<!-- Bootstrap's JavaScript -->
<script src="../assetsjs/jquery-2.1.4.min.js"></script>
<script src="../assetsjs/bootstrap.min.js"></script>

<!-- Owl carousel -->
<script src="../assetsjs/owl.carousel.js"></script>

<!-- Custom js -->
<script src="../assetsjs/script.js"></script>
</body>
</html>
