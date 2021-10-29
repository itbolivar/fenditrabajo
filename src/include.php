<?php 

class libraryFendi
{
    private user_session $usession;
    private static $instance                  = NULL;
    
    
    public function __construct(){
        require_once 'config.inc.php';
        
        /* Controller */
        require_once constant('CONTROLLER').'Conexion.php';
        require_once constant('CONTROLLER').'browserDetection.php';
        require_once constant('CONTROLLER').'codsicomController.php';
        require_once constant('CONTROLLER').'empresaController.php';
        require_once constant('CONTROLLER').'logController.php';
        require_once constant('CONTROLLER').'loginSession.php';
        require_once constant('CONTROLLER').'modalMaster.php';
        require_once constant('CONTROLLER').'permisosController.php';
        require_once constant('CONTROLLER').'registroController.php';
        require_once constant('CONTROLLER').'usuariosController.php';
        require_once constant('CONTROLLER').'user_session.php';
        
        
        /* Model */
        require_once constant('MODEL').'codsicomModel.php';
        require_once constant('MODEL').'empresaModel.php';
        require_once constant('MODEL').'logModel.php';
        require_once constant('MODEL').'permisosModel.php';
        require_once constant('MODEL').'registroModel.php';
        require_once constant('MODEL').'rolesModel.php';
        require_once constant('MODEL').'usuariosModel.php';
        
        $this->usession = user_session::getInstance();
    }
    
    
    public static function getInstance()
    {
        if (!self::$instance instanceof self ) {
            self::$instance = new libraryFendi();
        }
        return libraryFendi::$instance;
    }
    
    public static function Close(){
       
        self::$instance = null;
        
    }
    
}

$o =  libraryFendi::getInstance();




?>