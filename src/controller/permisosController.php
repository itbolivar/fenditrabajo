<?php
namespace src\controller;

use src\model\permisosModel;

class permisosController{

    private     $_id_permisos = "";
    private     $_descripcion = "";
    private     $_estado      = "";
    private     permisosModel    $pModel;
    
    public function __construct(){
        $this->pModel = new permisosModel();
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

    public function getAllPermisos(){
        return ($this->pModel->selectPermisos());
    }
    
}
?>