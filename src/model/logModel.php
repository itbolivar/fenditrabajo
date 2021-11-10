<?php
namespace src\model;

use src\controller\conexion;

class logModel{
    
    private $objeto;
    
    public function __construct(){
        $this->objeto = conexion::getInstance();
    }
    
    public function setLog($_nomAccion,  $_ip,  $_navegador,  $_fecha){
        
        $objeto     = conexion::getInstance();
        $conexion   = $objeto->Conectar();
        
        $sql        = "INSERT INTO log (nomAccion,ip,navegador,fecha) VALUES ('$_nomAccion','$_ip', '$_navegador', '$_fecha');";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            return true;
        }else
        {
            $conexion   =   null;
            $this->objeto->close();
            return false;
        }
    }
    
    
    public function setLogContacto($_nomAccion,  $_ip,  $_navegador,  $_fecha){
        $res = '';
        $objeto     = conexion::getInstance();
        $conexion   = $objeto->Conectar();
        
        $sql        = "INSERT INTO log (nomAccion,ip,navegador,fecha) VALUES ('$_nomAccion','$_ip', '$_navegador', '$_fecha');";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $res =  $conexion->lastInsertId();
        }
        
        return $res;
    }
    
    
    
 }