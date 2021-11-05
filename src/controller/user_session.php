<?php 
namespace src\controller;

class user_session{
    
    private static  $instance       =   NULL;
    
    public function __construct(){
        session_start();
        
    }
    
    public function setCurrentID($id_usuaroempresa){
        $_SESSION['id_usuaroempresa']      = $id_usuaroempresa;
    }
    
    public function setCurrentUserCodSicom($user_codsicom){
        $_SESSION['user_codsicom']  = $user_codsicom;
    }
    
    public function getCurrentUser(){
        return $_SESSION['id_usuaroempresa'];
    }
    
    public function getCurrentIdSession(){
        return $_SESSION['user_codsicom'];
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
        unset($_SESSION["id_usuaroempresa"],$_SESSION["user_codsicom"] );
        session_destroy();
    }
}


?>