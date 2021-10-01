<?php
namespace src\model;


use src\controller as controller;
      
class logModel{
    
    
    public function __construct(){
        
    }
    
    public function setLog($_nomAccion,  $_ip,  $_navegador,  $_fecha,  $id_usuario){
        
        $objeto     = controller\conexion::getInstance();
        $conexion   = $objeto->Conectar();
        
        $sql        = "INSERT INTO log (nomAccion,ip,navegador,fecha, id_usuarios) VALUES ('$_nomAccion','$_ip', '$_navegador', '$_fecha', '$id_usuario');";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            return 1;
        }else
        {
            $conexion   =   null;
            $this->objeto->close();
            return 0;
        }
    }
 }