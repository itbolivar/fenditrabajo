<?php 
class user_session{
    
    private static  $instance       =   NULL;
    
    public function __construct(){
        session_start();
        $_SESSION['FENDITRABAJO'] = array();
    }
    
    public function setCurrentID($id_usuaroempresa){
        $_SESSION['FENDITRABAJO']['id_usuaroempresa']      = $id_usuaroempresa;
    }
    
    public function setCurrentUserCodSicom($user_codsicom){
        $_SESSION['FENDITRABAJO']['user_codsicom']  = $user_codsicom;
    }
    
    public function getCurrentUser(){
        return $_SESSION['FENDITRABAJO']['id_usuaroempresa'];
    }
    
    public function getCurrentIdSession(){
        return $_SESSION['FENDITRABAJO']['user_codsicom'];
    }
    
    public static function getInstance()
    {
        if (!self::$instance instanceof self ) {
            self::$instance = new user_session();
        }
        return user_session::$instance;
    }
    
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}


?>