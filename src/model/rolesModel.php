<?php

class rolesModel{

    private     $_id            = "";
    private     $_descripcion   = "";
    private     $_estado        = "";

    private     Conexion        $objeto;
    private     $conexion;
    //private     logController   $logC;
    private     $data;
    
    
    public function __construct(){
        $this->objeto       = Conexion::getInstance();
    }

    
    public function selectRoles(){
        $data = '';
        $sql                = "SELECT * FROM roles;";
        
        $conexion   = $this->objeto->Conectar();
        
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        }else
        {
            $data=null;
            $conexion=null;
            $this->objeto->close();
        
        }
        return $data;
    }
    
    
    public function getIdRoles($id){
        $data = "";
        try {
            //$this->objeto     = new Conexion();
            $sql                = "SELECT id, descripcion, estado  FROM roles; where id='.$id.'";
            
            //$conexion   = $this->objeto->Conectar();
            
            $resultado  = $this->conexion->prepare($sql);
            $resultado->execute();
            
            if($resultado->rowCount() >= 1)
            {
                $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
                
            }else
            {
                $this->data         =   null;
                $this->conexion     =   null;
                $this->objeto->close();
            }
        } catch (Exception $e) {
            echo $e;
        }
        
        return $data;
    }
    
    
    public function addRoles($_descripcion,$_estado){
        $sql = "INSERT INTO datos (descripcion, estado) VALUES ('$_descripcion', '$_estado');";
        
        $conexion   = $this->objeto->Conectar();
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            /*$user_agent = $_SERVER['HTTP_USER_AGENT'];
             $logC->setNombreAccion("Inicio de Sesion con el Usuario --> ".$this->email." <--");
             $logC->setIP();
             $logC->setNavegador($user_agent);
             $logC->setFecha();
             $logC->setIdUsuario($id_u);
             $logC->mostrarConsola();*/
            return 1;
        }else
        {
            $conexion=null;
            $this->objeto->close();
            return 0;
        }
    }
    
    
    public function updateRoles($id, $_descripcion,$_estado){
        $sql = "UPDATE roles SET descripcion='$_descripcion', estado='$_estado' WHERE id_rol=(select id from usuario WHERE usuario='$usuario')";
        
        $conexion   = $this->objeto->Conectar();
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $this->data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
            /*$user_agent = $_SERVER['HTTP_USER_AGENT'];
             $logC->setNombreAccion("Inicio de Sesion con el Usuario --> ".$this->email." <--");
             $logC->setIP();
             $logC->setNavegador($user_agent);
             $logC->setFecha();
             $logC->setIdUsuario($id_u);
             $logC->mostrarConsola();*/
             return 1;
        }else
        {
            $conexion=null;
            $this->objeto->close();
            return 0;
        }
     }
     
     public function deleteRoles($id, $_descripcion,$_estado){
         $sql = "DELETE FROM roles WHERE id = '$id' and descripcion='$_descripcion' and estado='$_estado' ";
         
         $conexion   = $this->objeto->Conectar();
         $resultado  = $conexion->prepare($sql);
         $resultado->execute();
         
         if($resultado->rowCount() >= 1)
         {
             $this->data = $resultado->fetchAll(PDO::FETCH_ASSOC);
             
             /*$user_agent = $_SERVER['HTTP_USER_AGENT'];
              $logC->setNombreAccion("Inicio de Sesion con el Usuario --> ".$this->email." <--");
              $logC->setIP();
              $logC->setNavegador($user_agent);
              $logC->setFecha();
              $logC->setIdUsuario($id_u);
              $logC->mostrarConsola();*/
             return 1;
         }else
         {
             $conexion=null;
             $this->objeto->close();
             return 0;
         }
     }
    
    
}
?>