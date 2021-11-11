<?php

namespace src\view\distri\view;

require_once '../../config.inc.php';
require_once constant('PATHSRC') . 'libraryFendi.php';



?>
<!--Footer-->
<div class="footerWrap">
  <div class="container">
    <!--About Us-->
    <div class="ft-logo"><img src="../assets/img/logo.png" alt="Your alt text here"></div>
    <!-- Social Icons -->
    <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
      <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
      <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
    </div>
    <div class="copyright">
      &copy; Copyright <strong> <span>Fenditrabajo Nacional</span> 2021</strong>. Todos los derechos reservados. <br />
      <p class="text-center">Desarrollado por Mesa IT.</p>
    </div>
    <!-- Social Icons end -->
    <!--About us End-->
  </div>
</div>
<!--Footer end-->

<!-- Bootstrap's JavaScript -->
<script src="<?php echo $js_dir ?>jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="<?php echo $js_dir ?>revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo $js_dir ?>revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<!-- map with geo locations -->

<!-- Owl carousel -->
<script src="<?php echo $js_dir ?>owl.carousel.js"></script>

<!-- Custom js -->
<script src="<?php echo $js_dir ?>script.js"></script>
<!--Codigo js para boton siguiente-->


<?php
$modal->setModal('acces', 'Cerrar Sesion', '¿ Desea Salir de la Session ' . $user_codsicom . ' ?');
?>
</body>

</html>