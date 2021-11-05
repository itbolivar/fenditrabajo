<?php 
namespace src\view;
require_once 'view/_main.php';?>


<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Sobre Nosotros</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Regresar</a> / <span>Sobre nosotros</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="about-wraper">
  <!-- About -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Nuestra plataforma</h1>
        <br>
        <h2>¿ Quienes Somos ?</h2>
        	<p class="text-justify">La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, sin ánimo de lucro, creada en 1971 para representar los intereses de los distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. En el 2021 decide crear una bolsa de empleo virtual para la prestación de servicios de gestión y colocación del empleo denominado FENDITRABAJO generando un canal de comunicación entre potenciales empleadores y posibles candidatos a nivel sectorial. 
        	<br>
        	<br>
        	</p>
          </div>
      <div class="col-md-5">
        <div class="postimg"><img src="<?php echo $img_dir?>about-us-img1.jpg" alt="your alt text" /></div>
      </div>
    </div>
  </div>

  <!-- Process -->
  <div class="what_we_do">
    <div class="container">
      <div class="main-heading">Nuestro proceso es simple</div><br>
      <div class="whatText">Con estos simples pasos puedes acceder a una Oferta de los <br> Distribuidores Minoristas que se estan en nuestra de Base de Datos.</div>
      <ul class="row whatList">
        <li class="col-md-4 col-sm-6">
          <div class="iconWrap">
            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
          </div>
          <h3>Crear Cuenta</h3>
          <p></p>
        </li>
        <li class="col-md-4 col-sm-6">
          <div class="iconWrap">
            <div class="icon"><i class="fa fa-file-text"></i></div>
          </div>
          <h3>Registrar perfil</h3>
          <p></p>
        </li>
        <li class="col-md-4 col-sm-6">
          <div class="iconWrap">
            <div class="icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
          </div>
          <h3>Obtener trabajo</h3>
          <p>.</p>
        </li>
      </ul>
    </div>
  </div>

  <!-- Text -->
  <div class="textrow">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="postimg"><img src="<?php echo $img_dir?>edsmuestra.jpg" alt="your alt text" /></div>
        </div>
        <div class="col-md-7">
          <h2>Objetivo</h2>
          <p class="text-justify">Fendipetroleo Nacional busca brindar mayores beneficios para los distribuidores de combustible y gas 
          natural vehicular a nivel nacional aportando a la generación de empleo formal y decente en el sector, por medio de la creación de 
          una plataforma que permita el acercamiento entre distribuidores minoristas de combustibles líquidos derivados del petróleo y 
          oferentes con el fin de facilitar la vinculación laboral de personas para el sector. <br> <br>


           
        </div>
      </div>
    </div>
  </div>
</div>



<?php require_once 'view/_footer.php';?>