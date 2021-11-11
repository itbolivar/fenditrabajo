<?php 
namespace src;
include_once('fendiversion.php');

$timezone = 'America/Bogota';
date_default_timezone_set($timezone);

// more than 8MB memory needed for graphics
// memory limit default value = 512M
ini_set('memory_limit','512M');
$SUPPORT_EMAIL_ID       = 'it.bolivar@fondosoldicom.org';
$INFO_EMAIL_ID          = 'info@fenditrabajo.com';
$SUPPORT_NAME           = 'your-support name';
$SUPPORT_EMAIL_REPLY_ID = $SUPPORT_EMAIL_ID;
define('ROOT', dirname(dirname(__FILE__))."/");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
 *
 * Configuracion General Frontend
 *
 * */

$site_URL       = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/fenditrabajo/";

// URL del Sitio Web
$PORTAL_URL     = $site_URL.'src/view/';

// root directory path
$root_directory = $PORTAL_URL;//'/home/u230156310/domains/fenditrabajo.com/public_html/';

// Css es la variable donde esta la URL de las hogas de estilo
$css_dir        = $site_URL.'src/view/assets/css/';
define('CSS', $site_URL.'src/view/assets/css/');

// js_dir es la variable global de los scripts/
$js_dir         = $site_URL.'src/view/assets/js/';
define('JS', $site_URL.'src/view/assets/js/');

// img_dir es la variable global de imagenes/
$img_dir        = $site_URL.'src/view/assets/img/';
define('IMG', $site_URL.'src/view/assets/img/');

// upload_dir default value prepended by cache_dir = upload/
$documents_dir  = $site_URL.'documentos/';



/*
 *
 * Carpetas de Usuario y Empresa
 *
 * */

$USER_LINK  = $documents_dir.'user/';
$EDS_LINK   = $documents_dir.'distri/';





define('PATHSRC',               $_SERVER['DOCUMENT_ROOT'].'/fenditrabajo/src/');
define('CONTROLLER',            constant('PATHSRC').'controller/');
define('MODEL',                 constant('PATHSRC').'model/');
define('VIEW',                  constant('PATHSRC').'view/');
define( 'MODAL',                constant('PATHSRC').'modalMaster.php' );
define('PREFIXDB',              'u230156310_fenditrabajo.');


/*define( 'CONTROLLER',         '/home/u230156310/domains/fenditrabajo.com/public_html/admin/controller/' );
 define( 'MODEL',                '/home/u230156310/domains/fenditrabajo.com/public_html/admin/model/' );
 define( 'VIEW',$root_directory.'admin/view/' );
 define( 'MODAL',$root_directory.'admin/controller/modalMaster.php' );
 define('PREFIXDB', 'u230156310_fenditrabajo.');
 */




        
/*
 *
 * Configuracion para Back End
 *
 * */

define( 'ADMIN_URL',    '/fenditrabajo/admin/view' );
define( 'ADMIN_LOGIN',  '/fenditrabajo/admin/' );



header('Access-Control-Allow-Origin: *');

?>