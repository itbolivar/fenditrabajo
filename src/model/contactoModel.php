<?php 
namespace src\model;


use src\controller\conexion;
use src\controller\logController;

class contactoModel extends conexion{
    
    private $objeto;
    private $logcontroller;
    
    public function __construct(){
        $this->objeto = conexion::getInstance(); 
        $this->logcontroller = new logController();
    }
    
    
    public function registrarContacto(
                                    $cnt_nombre,
                                    $cnt_apellido,
                                    $cnt_telefono,
                                    $cnt_email,
                                    $cnt_tipodocumento,
                                    $cnt_numerodocumento,
                                    $cnt_solicitud){
        
                                        
        $res = '';
        $_idcontacto = '';
        $_idlog      = '';
        $conexion   = $this->objeto->Conectar();
        $sql        = "INSERT INTO u230156310_fenditrabajo.contacto (nombre, apellido, telefono, email, tipodocumento, numdocumento, solicitud) 
                       VALUES ('$cnt_nombre', '$cnt_apellido', '$cnt_telefono', '$cnt_email', '$cnt_tipodocumento', '$cnt_numerodocumento', '$cnt_solicitud');";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        $_idcontacto = $conexion->lastInsertId();
        
        if($resultado->rowCount() >= 1)
        {
            $datos = "Escribio la persona {$cnt_nombre} {$cnt_apellido} en el formulario Contactos.";
            $_idlog = $this->logcontroller->setLogContacto($datos);
            
            $conexion   = $this->objeto->Conectar();
            $sql2        = "INSERT INTO u230156310_fenditrabajo.contacto_log (idcontacto, idlog)
                                                                      VALUES ('$_idcontacto', '$_idlog');";
            $resul  = $conexion->prepare($sql2);
            $resul->execute();
            
            $res = true;
        }
        else
        {
            $conexion   = NULL;
            $this->objeto->close();
            $res        = false;
        }
        
        return $res;
                                        
            return false;
    }
    
    
    
    
}



?>