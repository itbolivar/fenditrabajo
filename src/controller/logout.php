<?php
namespace src\controller;
require_once 'user_session.php';
class logout{
    
    private static $instance                  = NULL;
    public function __construct(){
        
        $uSession = user_session::getInstance();
        /*
         $user_agent = $_SERVER['HTTP_USER_AGENT'];
         $logC = new logController();
         $logC->setNombreAccion("Cierre de Sesion con el Usuario ".$_SESSION["s_usuario"]);
         $logC->setIP();
         $logC->setNavegador($user_agent);
         $logC->setFecha();
         $logC->setIdUsuario($data["id"]);
         
         */
      
        
        $_SESSION = array();
        
        // Si se desea destruir la sesión completamente, se borra también la cookie de sesión.
        // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"],    $params["domain"],
                $params["secure"],  $params["httponly"]
                );
        }
        $uSession->closeSession();
        $uSession = null;
        
        header("Location:../../index.php");
    }
    
    public static function getInstance()
    {
        if (!self::$instance instanceof self ) {
            self::$instance = new logout();
        }
        return logout::$instance;
    }
    
    
}

$lout = logout::getInstance();

?>