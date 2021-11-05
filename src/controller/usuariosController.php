<?php
namespace src\controller;

use src\model\usuariosModel;

class usuariosController{

    private     $_id_rol      = "";
    private     $_descripcion = "";
    private     $_estado      = "";
    private     $_accionRol;
    private     usuariosModel    $uModel;
    private static $cryptKey = "a.RYoH5)d]svz9vfNIPc(^HywK{O08Xb7a@lgk[gcPKJ!fGHOX";
   
    
    public function __construct(){
        $this->uModel = new usuariosModel();
    }

    
    public function getAllUsuarios(){
        return ($this->uModel->selectUsuarios());
    }
    
    public function getAllUsuariosRolPermisos(){
        return ($this->uModel->getAllUsuariosRolPermisos());
    }
    
    
    private function encryptIt( $q ) {
        $cryptKey  = self::$cryptKey;//'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        return( $qEncoded );
    }
    
    public function decriptMD5( $qDecoded ) {
        /*$cryptKey  = self::$cryptKey;'qJB0rGtIn5UB1xG03efyCp';
        $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
        */
        
        return  md5(md5($qDecoded));
    }
}
?>