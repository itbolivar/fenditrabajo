<?php
namespace src\model;
use \PDO;
use src\controller as controller;
 
class permisosModel{

    private     $_id_permisos               = "";
    private     $_descripcion               = "";
    private     $_estado                    = "";
    
    private     Controller\Conexion        $objeto;
    private     $conexion;
    //private     logController   $logC;
    private     $data;
    
    public function __construct(){
        
        $this->objeto       = controller\Conexion::getInstance();
    }
    

    public function setId_Permisos($id)
    {
        $this->_id_permisos = $id;
    }

    public function setDescripcion($des)
    {
        $this->_descripcion = $des;
    }

    public function setEstado($est)
    {
        $this->_estado = $est;
    }
//******************-------------------************** */
    public function getId_Permisos(){
        return $this->_id_permisos;
    }

    public function getDescripcion(){
        return $this->_descripcion;
    }

    public function getNavegador()
    {
        return $this->_estado;
    }

    //$sqlupdate = "UPDATE permisos SET descripcion='$_descripcion', estado='$_estado' WHERE id_permiso=(select id_rol from roles WHERE id_rol='$id_usuario')";
    
    
    
    public function selectPermisos(){
        //$this->objeto       = new Conexion();
        $sql                = "SELECT id, descripcion, estado FROM permisos;";
        
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
             $logC->mostrarConsola();
             //print "\n".json_encode($data);*/
        }else
        {
            $this->data=null;
            $conexion=null;
            $this->objeto->close();
        }
        return $this->data;
    }
    
    
}
?>