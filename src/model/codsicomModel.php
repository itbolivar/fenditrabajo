<?php 
namespace src\model;

use PDO;
use src\controller\conexion;

class codsicomModel
{
    private     conexion        $objeto;
    private     $conexion;
     
    public function __construct(){
        $this->objeto       = conexion::getInstance();
    }
    
    public function get_codsicom($cod_sicom){
        $data       = '' ;
        $this->conexion   = $this->objeto->Conectar();
        
        $sql        = "SELECT * FROM u230156310_fenditrabajo.cod_sicom where cod_sicom = '$cod_sicom'"; 
        $resultado  = $this->conexion->prepare($sql);
        $resultado->execute();
        if($resultado->rowCount() >= 1)
        {
            //echo "rowCount :".$resultado->rowCount()."<br/>";
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            //print json_encode($data);
        }else
        {
            $data       = '';
            $this->conexion   = null;
            $this->objeto->close();
        }
        
        return $data;
    }
}
?>