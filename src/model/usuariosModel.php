<?php
namespace src\model;

use PDO;
use src\controller\conexion;

class usuariosModel{

    private     $_id            = "";
    private     $_descripcion   = "";
    private     $_estado        = "";

    private     conexion        $objeto;
    private     $conexion;
    //private     logController   $logC;
    private     $data;
    
    
    public function __construct(){
        $this->objeto       = conexion::getInstance();
    }

    public function selectUsuarios()
    {
        $conexion           = $this->objeto->Conectar();
        $sql                = "SELECT * FROM usuarios;";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $this->data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            //print "\n".json_encode($data);*/
        }else
        {
            $this->data=null;
            $conexion=null;
            $this->objeto->close();
        }
        return $this->data;
    }
    
    
    public function getAllUsuariosRolPermisos(){
        
        $data               = "";
        $conexion           = $this->objeto->Conectar();
        $sql                ='SELECT u.id, u.user_codsicom, u.password, r.descripcion, r.estado  FROM '.PREFIXDB.'usuarios u, '.PREFIXDB.'roles r WHERE u.id = 
                                ( select id_usuarios from '.PREFIXDB.'usuarios_roles ur where r.id_roles =
                                		( select id_roles from '.PREFIXDB.'roles where id_roles = ur.id_usuarios )
                                 )';
        $resultado          = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
        }else
        {
            $this->data   =   null;
            $conexion     =   null;
            $this->objeto->close();
        }
        return $data;
    }
    
    public function getIdUsuarios($id){
        
        $data = "";
        $$this->conexion           = $this->objeto->Conectar();
        
        $sql                = "SELECT id, descripcion, estado  FROM '.PREFIXDB.'roles; where id='.$id.'";
        $resultado          = $this->conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
       
        }else
        {
            $this->data   =   null;
            $$this->conexion     =   null;
            $this->objeto->close();
        }
        return $data;
    }
    
    
    public function getUltimoIdUsuario(){
        return $this->_id;
    }
    
    /*
     * 
     * Validar Duplicidad de usuario
     * 
     * */
    public function validarUsuario($user_codsicom){
        $res = 1;
        $this->conexion     = $this->objeto->Conectar();
        $sql                = "SELECT * FROM u230156310_fenditrabajo.usuarios where user_codsicom='$user_codsicom'";
        $resultado          = $this->conexion->prepare($sql);
        $resultado->execute();
        
       if($resultado->rowCount() >= 1)
        {
                $res = 0;
        }else{
            $res = 1;
            $this->objeto->close();
        }
        
        return $res;
    }
    
    /*
     * Add Usuario
     * */
    
    
    public function addUsuario($user_codsicom,$password)
    {
        $res = '';
        $conexion           = $this->objeto->Conectar();
        $password = md5($password);
        $sql        = "INSERT INTO u230156310_fenditrabajo.usuarios (user_codsicom, password) VALUES ('$user_codsicom', '$password');";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            
            $this->_id = $conexion->lastInsertId();
            $res = 1;
            /*$user_agent = $_SERVER['HTTP_USER_AGENT'];
             $logC->setNombreAccion("Inicio de Sesion con el Usuario --> ".$this->email." <--");
             $logC->setIP();
             $logC->setNavegador($user_agent);
             $logC->setFecha();
             $logC->setIdUsuario($id_u);
             $logC->mostrarConsola();*/
             
         }
         else
         {
             $conexion      = NULL;
             $this->objeto->close();
             $res = 1;
         }
         
         return $res;
    }
    
    
   
    public function addUsuario_Empresa($id_usuario,$id_empresa)
    {
        $res = 0;
        $conexion           = $this->objeto->Conectar();
        
        $sql        = "INSERT INTO u230156310_fenditrabajo.usuario_empresa (id_usuario, id_empresa) VALUES ('$id_usuario', '$id_empresa');";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        
        if($resultado->rowCount() >= 1)
        {
            $res = 1;
        }
        else
        {
            $conexion      = NULL;
            $this->objeto->close();
            $res = 0;
        }
        return $res;
    }
    
    
    
    
    
    
    /*
    public function addRoles($_descripcion,$_estado){
        $this->objeto       = Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        
        $sql = "INSERT INTO '.PREFIXDB.'roles (descripcion, estado) VALUES ('$_descripcion', '$_estado');";
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
             $logC->mostrarConsola();
            return 1;
        }else
        {
            $conexion=null;
            $this->objeto->close();
            return 0;
        }
    }
    
    
    public function updateRoles($id, $_descripcion,$_estado){
        $this->objeto       = Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        
        $sql = "UPDATE '.PREFIXDB.'roles SET descripcion='$_descripcion', estado='$_estado' WHERE id_rol=(select id from usuario WHERE usuario='$usuario')";
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
             $logC->mostrarConsola();
             return 1;
        }else
        {
            $conexion=null;
            $this->objeto->close();
            return 0;
        }
     }
     
    public function deleteRoles($id, $_descripcion,$_estado){
        $this->objeto       = Conexion::getInstance();
        $conexion           = $this->objeto->Conectar();
        
         $sql = "DELETE FROM '.PREFIXDB.'roles WHERE id = '$id' and descripcion='$_descripcion' and estado='$_estado' ";
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
              $logC->mostrarConsola();
             return 1;
         }else
         {
             $conexion=null;
             $this->objeto->close();
             return 0;
         }
     }
    */
    
}
?>