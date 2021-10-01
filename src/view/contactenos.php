<?php require_once 'view/_main.php';?>



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
          <div class="title"> <span>Estamos aqui para ayudarte</span>
          <br/>
            <h2>PONGASE EN CONTACTO</h2>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="col-md-4 column">
          <div class="contact-now">
            <div class="contact"> <span><i class="fa fa-home"></i></span>
              <div class="information"> <strong>Direccion:</strong>
                <p>130001, New Ispum, Dolor amet sit 12301</p>
              </div>
            </div>
            <!-- Contact Info -->
            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
              <div class="information"> <strong>Correo Electronico:</strong>
                <p>investigate@your-site.com</p>
                <p>investigate@your-site.com</p>
              </div>
            </div>
            <!-- Contact Info -->
            <div class="contact"> <span><i class="fa fa-phone"></i></span>
              <div class="information"> <strong>Telefono:</strong>
                <p>+057 300 345 67 009</p>
                <p>+057 300 345 67 009</p>
              </div>
            </div>
            <!-- Contact Info -->
          </div>
          <!-- Contact Now -->
        </div>

        <!-- Contact form -->
        <div class="col-md-8 column">
          <div class="contact-form">
            <div id="message"></div>
            <form method="post" action="" name="contactform" id="contactform">
              <div class="row">
                <div class="col-md-6">
                  <input name="name" type="text" id="name" placeholder="Nombre Completo">
                </div>
                <div class="col-md-6">
                  <input type="text" name="phone" placeholder="Numero de Telefono">
                </div>
                <div class="col-md-12">
                  <input name="email" type="text" id="email" placeholder="Correco Electronico">
                </div>
                <div class="col-md-12">
                  <textarea rows="4" name="comments" id="comments" placeholder="Detalle"></textarea>
                </div>
                <div class="col-md-12">
                  <button title="" class="button" type="submit" id="submit">Enviar</button>
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