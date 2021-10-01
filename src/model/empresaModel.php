<?php
namespace src\model;
//require_once '../admin.inc.php';
//require_once CONTROLLER."conexion.php";

use \PDO;
use src\controller as controller;


class empresaModel{

    private     $id_empresa         = '';
    private     $id_replegal        = '';
    private     $id_infoadmin       ='';
    private     controller\Conexion        $objeto;

    
    public function __construct(){
        $this->objeto       = controller\Conexion::getInstance();
    }
    
    
    /**
     *
     * ************************* SELECT EMPRESA
     *
     **/
    
    public function getAllEmpresa(){
        //$this->objeto       = Controller\Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        $data               = '';
        
        $sql = "Select id_empresa, nomRazonSocial, nit, email, departamento, ciudad, telefono, celular, direccion from u230156310_fenditrabajo.empresa;";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
              
        return $data;
    }
    
    public function selectIDEmpresa($id_emp){
        //$this->objeto       = Controller\Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        $data               = '';
        
        $sql = "Select * from u230156310_fenditrabajo.empresa where id_empresa ='$id_emp'";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
            /*$user_agent = $_SERVER['HTTP_USER_AGENT'];
             $logC->setNombreAccion("Inicio de Sesion con el Usuario --> ".$this->email." <--");
             $logC->setIP();
             $logC->setNavegador($user_agent);
             $logC->setFecha();
             $logC->setIdUsuario($id_u);
             $logC->mostrarConsola();*/
            
        }else
        {
            $conexion=null;
            $this->objeto->close();
            return null;
        }
        return $data;
    }
    
    
    public function selectRepLegal($id_emp){
        //$this->objeto       = Controller\Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        $data               = '';
        
        $sql = "Select * from u230156310_fenditrabajo.representante_legal 
                    where id_replegal = (Select id_replegal from u230156310_fenditrabajo.empresa_replegal 
                    where id_empresa = '$id_emp')";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
            /*$user_agent = $_SERVER['HTTP_USER_AGENT'];
             $logC->setNombreAccion("Inicio de Sesion con el Usuario --> ".$this->email." <--");
             $logC->setIP();
             $logC->setNavegador($user_agent);
             $logC->setFecha();
             $logC->setIdUsuario($id_u);
             $logC->mostrarConsola();*/
            
        }else
        {
            $conexion=null;
            $this->objeto->close();
            return null;
        }
        return $data;
    }
    
    public function selectAdminsitrador($id_emp){
        //$this->objeto       = Controller\Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        $data               = '';
        
        $sql = "Select * from u230156310_fenditrabajo.info_administrador
                    where id_infoadmin = (Select id_infoadmin from u230156310_fenditrabajo.empresa_infoAdmin
                    where id_empresa = '$id_emp')";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
            /*$user_agent = $_SERVER['HTTP_USER_AGENT'];
             $logC->setNombreAccion("Inicio de Sesion con el Usuario --> ".$this->email." <--");
             $logC->setIP();
             $logC->setNavegador($user_agent);
             $logC->setFecha();
             $logC->setIdUsuario($id_u);
             $logC->mostrarConsola();*/
            
        }else
        {
            $conexion=null;
            $this->objeto->close();
            return null;
        }
        return $data;
    }
    
    
    
    public function getIdEmpresa(){
       return $this->id_empresa;
    }
    
    public function getUsuarioEmpresa($id_usuario){
        $id_empresa = '';
       // $this->objeto       = Controller\Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        $data               = '';
        
        $sql = "Select id_empresa from u230156310_fenditrabajo.usuario_empresa where id_usuario ='$id_usuario'";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($data as $dat){
                $id_empresa = $dat['id_empresa'];
            }
            echo "id_empresa ---------> ".$id_empresa;
            
            /*$user_agent = $_SERVER['HTTP_USER_AGENT'];
             $logC->setNombreAccion("Inicio de Sesion con el Usuario --> ".$this->email." <--");
             $logC->setIP();
             $logC->setNavegador($user_agent);
             $logC->setFecha();
             $logC->setIdUsuario($id_u);
             $logC->mostrarConsola();*/
            
        }else
        {
            $conexion       =null;
            $this->objeto->close();
            return null;
        }
        return $id_empresa;
    }
    
    /**
     *
     * ************************* INSERT EMPRESA
     *
     **/
    
    public function addEmpresa(String $nomRazonSocial, int $nit, String $email, String $departamento, String $ciudad, int $telefono, int $celular, String $direccion, String $descripcion){
        //$this->objeto       = Controller\Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        
        $sql                = "INSERT INTO u230156310_fenditrabajo.empresa (nomRazonSocial, nit, email, departamento, ciudad, telefono, celular, direccion, descripcion) VALUES ('$nomRazonSocial', '$nit', '$email', '$departamento', '$ciudad', '$telefono', '$celular', '$direccion','$descripcion');";
        $resultado          = $conexion->prepare($sql);
        $resultado->execute();
        $this->id_empresa   = $conexion->lastInsertId();
        $conexion=null;
        $this->objeto->close();
    }
    
    public function getUltimoRegEmpresa(){
        return $this->id_empresa;
    }
    
    private function setIdEmpresa($id){
        $this->id_empresa = $id;
    }
    
    
        
     /* 
      * 
      * INSERT Representante Legal 
      * 
      **/
     
    public function addRepLegal(String $nombre, String $tipoId, int $numId, String $cargo, String $email, int $telefono, int $celular, int $id_empresa){
        // $this->objeto       = Controller\Conexion::getInstance();
         $conexion           = $this->objeto->Conectar();
         $sql                = "INSERT INTO u230156310_fenditrabajo.representante_legal (nombre, tipoId, numId, cargo, email, telefono, celular) VALUES ('$nombre','$tipoId','$numId','$cargo','$email','$telefono','$celular');";
         $resultado  = $conexion->prepare($sql);
         $resultado->execute();
         $id_replegal = $conexion->lastInsertId();
         
         /*
          * 
          * Taba que se utiliza para conectar a la tabla en la BD 
          * llamada: empresa junto con la Tabla llamada: representante_legal
          * 
          * */
         $this->empresa_replegal($id_empresa, $id_replegal);
         
         $conexion=null;
         $this->objeto->close();
        
     }
     
     /*
      * Tabla Fk de Empresa y representante_legal
      * */
     private function empresa_replegal(int $id_empresa, int $id_replegal){
         //$this->objeto       = Controller\Conexion::getInstance();
         $conexion           = $this->objeto->Conectar();
         
         $sql = "INSERT INTO u230156310_fenditrabajo.empresa_replegal (id_empresa, id_replegal) VALUES ('$id_empresa', '$id_replegal');";
         $resultado  = $conexion->prepare($sql);
         $resultado->execute();
     }
     
     /*
      *
      * INSERT Administrador
      *
      **/
     
     public function addAdminsitrador(String $nombre, String $tipoId, int $numId, String $cargo, String $email, int $telefono, int $celular, 
                                        String $arl, String $nivelriesgo, int $numTrabajadores, int $id_empresa){
         //$this->objeto       = Controller\Conexion::getInstance();
         $conexion           = $this->objeto->Conectar();
         
         $sql = "INSERT INTO u230156310_fenditrabajo.info_administrador (nombre, tipoId, numId, cargo, email, telefono, celular, arl, nivelriesgo, numTrabajadores) 
                    VALUES ('$nombre','$tipoId','$numId','$cargo','$email','$telefono','$celular','$arl','$nivelriesgo','$numTrabajadores');";
         $resultado  = $conexion->prepare($sql);
         $resultado->execute();
         $id_infoadmin = $conexion->lastInsertId();
         
         $this->empresa_infoAdmin($id_infoadmin, $id_empresa);
            
         $conexion              =   null;
         $this->objeto->close();
     }
     
     /*
      * Tabla Fk de Empresa y Info Administrador
      * */
     private function empresa_infoAdmin(int $id_infoadmin, int $id_empresa){
         //$this->objeto       = Controller\Conexion::getInstance();
         $conexion           = $this->objeto->Conectar();
         
         $sql = "INSERT INTO u230156310_fenditrabajo.empresa_infoAdmin (id_infoadmin, id_empresa) VALUES ('$id_infoadmin', '$id_empresa');";
         $resultado  = $conexion->prepare($sql);
         $resultado->execute();
     }
     
     /**
      *
      * ************************* UPDATE EMPRESA
      *
      **/
     
     public function updateEmpresa(int $id_emp, String $nomRazonSocial, int $nit, String $email, String $departamento, String $ciudad, int $telefono, int $celular, String $direccion, String $descripcion){
         //$this->objeto       = Controller\Conexion::getInstance();
         $conexion           = $this->objeto->Conectar();
         
         $sql = "UPDATE u230156310_fenditrabajo.empresa SET nomRazonSocial='$nomRazonSocial', nit='$nit', email='$email', departamento='$departamento', ciudad='$ciudad', telefono='$telefono', celular='$celular', direccion='$direccion' , descripcion ='$descripcion' 
                    where id_empresa ='$id_emp'";
         $resultado  = $conexion->prepare($sql);
         $resultado->execute();
         
         if($resultado->rowCount() >= 1)
         {
             //$this->data = $resultado->fetchAll(PDO::FETCH_ASSOC);
             
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
     
     
     public function getJsonDataEmpresa(){
         
     }
     
     
}
?>