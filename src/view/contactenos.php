<?php 
namespace src\view;
require_once 'view/_main.php';

include $_SERVER["DOCUMENT_ROOT"].'/fenditrabajo/src/libraryFendi.php';
use src\controller\contactoController;
$mensaje;
$contacto = null;


if(isset($_POST['envio_contacto'])){
    
    $contacto = new contactoController();
    if($contacto->postContactos())
       {
          //$mensaje = "Entro Sin campos vacios";
           $contacto->registrarContacto();
    }else{
        $mensaje = "No se aceptan campos <b>vacios</b>";
    }
}

?>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Contactenos</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Inicio</a> / <span>Contacto</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<!-- Contact us -->
<div class="inner-page">
  <div class="container">
    <div class="contact-wrap">
      <div class="row">
        <div class="col-md-12 column">
          <div class="title"> <span>Estamos aquí para ayudarte</span>
          <br/><br/>
            <h2>CONTACTENOS</h2>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="col-md-4 column">
           <div class="contact-now">
            <div class="contact"> <span><i class="fa fa-home"></i></span>
              <div class="information"> <strong>Dirección:</strong>
                <p>Cra. 18 #78-40, Localidad de Chapinero, Bogotá</p>
              </div>
            </div>
            <!-- Contact Info -->
            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
              <div class="information"> <strong>Correo Electrónico:</strong>
                <p>info@fenditrabajo.com</p>
              </div>
            </div>
            <!-- Contact Info -->
            <div class="contact"> <span><i class="fa fa-phone"></i></span>
              <div class="information"> <strong>Teléfono:</strong>
                <p>601 621 8275</p>
                <!-- <p>+057 XXX XX XX XXX</p> -->
              </div>
            </div>
            <!-- Contact Info -->
          </div>
          <!-- Contact Now -->
        </div>

        <!-- Contact form -->
        <div class="col-md-8 column">
         <?php 
            if(isset($mensaje)){
                echo "<div class='alert alert-danger alert-dismissible' role='alert' style='text-align: center;'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span></button>
                                  $mensaje
                                </div>";
            }
            
            ?>
 
          <div class="contact-form">
            <div id="message"></div>
            <form method="post" action="" name="contact_form" id="contact_form">
              <div class="row">
                <div class="col-md-6">
                  <input  type="text" name="cnt_nombre" id="cnt_nombre" placeholder="Nombre">
                </div>
                <div class="col-md-6">
                  <input type="text" name="cnt_apellido" id="cnt_apellido" placeholder="Apellido">
                </div>
                <div class="col-md-6">
                  <input type="text" name="cnt_telefono" id="cnt_telefono" placeholder="Número de Teléfono">
                </div>
                <div class="col-md-6">
                  <input  type="email" name="cnt_email" id="cnt_email" placeholder="Correco Electrónico">
                </div>
               <!--  <div class="col-md-6">
                  <select class="form-control" name="cnt_tipodocumento" id="cnt_tipodocumento" required="required">
                     <option value= "" >Tipo de Documento</option>
                     <option value="CC">Cédula de Ciudania</option>
                     <option value="CEX">Cédula de Extrajería</option>
                    <option value="NUIT">Número de Identificación Tributaria</option> 
                     <option value="NIT">NIT</option>
                     <option value="SICOM" maxlength="6" >Código Sicom</option>
                   </select>
                </div>
                <div class="col-md-6">
                  <input  type="text" name="cnt_numerodocumento" id="cnt_numerodocumento" placeholder="Documento de Identidad">
                </div> -->
                
                <div class="col-md-12">
                  <textarea rows="4" name="cnt_solicitud" id="cnt_solicitud" placeholder="Solicitud"></textarea>
                </div>
                <div class="col-md-12">
                  <button class="button" type="submit" name="envio_contacto" id="envio_contacto" >Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Google Map -->
<div class="googlemap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7953.194729119627!2d-74.05964504018654!3d4.665653639810653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a58b2536b43%3A0x7e1f0c2e262866b5!2sEdificio%20Tempora!5e0!3m2!1ses-419!2sco!4v1627417544713!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<?php require_once 'view/_footer.php';?>