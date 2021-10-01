<?php 
namespace{
    
    include_once('fendiversion.php');
    use src\controller      as controller;
    use src\model           as model;
    use src\view            as view;

$timezone = 'America/Bogota';
date_default_timezone_set($timezone);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// more than 8MB memory needed for graphics
// memory limit default value = 512M
ini_set('memory_limit','512M');
$SUPPORT_EMAIL_ID       = 'it.bolivar@fondosoldicom.org';
$INFO_EMAIL_ID          = 'info@fenditrabajo.com';
$SUPPORT_NAME           = 'your-support name';
$SUPPORT_EMAIL_REPLY_ID = $SUPPORT_EMAIL_ID;
define('ROOT', dirname(dirname(__FILE__))."/");
       

/*
 * 
 * Configuracion General Frontend
 * 
 * */

$site_URL       = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";

// URL del Sitio Web
$PORTAL_URL     = $site_URL.'fenditrabajo/src/view/';

// root directory path
$root_directory = $PORTAL_URL;//'/home/u230156310/domains/fenditrabajo.com/public_html/';

// Css es la variable donde esta la URL de las hogas de estilo
$css_dir        = $PORTAL_URL.'assets/css/';

// js_dir es la variable global de los scripts/
$js_dir         = $PORTAL_URL.'assets/js/';

// img_dir es la variable global de imagenes/
$img_dir        = $PORTAL_URL.'assets/img/';

// upload_dir default value prepended by cache_dir = upload/
$documents_dir  = 'documentos/';


/*
 * 
 * Carpetas de Usuario y Empresa
 * 
 * */
        
$USER_LINK  = $root_directory.'view/user/';
$EDS_LINK   = $root_directory.'view/distri/';
        
/*
 *
 * Configuracion para Back End
 *
 * */

define( 'ADMIN_URL',$root_directory.'admin/' );

define( 'CONTROLLER','/home/u230156310/domains/fenditrabajo.com/public_html/admin/controller/' );
//$controller =   CONTROLLER;

define( 'MODEL','/home/u230156310/domains/fenditrabajo.com/public_html/admin/model/' );
//$model = MODEL;

define( 'VIEW',$root_directory.'admin/view/' );
//$view = VIEW;

define( 'MODAL',$root_directory.'admin/controller/modalMaster.php' );

define('PREFIXDB', 'u230156310_fenditrabajo.'); 

}
?>