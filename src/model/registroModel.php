<?php 
namespace src\model;
require_once 'empresaModel.php';
require_once 'usuariosModel.php';

use src\controller  as controller;
use src\model       as model;

class registroModel{
    
    private     $_id            = "";
    private     $_descripcion   = "";
    private     $_estado        = "";
    //private     logController   $logC;
    private     controller\Conexion        $objeto;
    private     $conexion;
    private     $data;
    
    /* Declaracion de Clases */
    private     model\usuariosModel  $userModel;
    private     empresaModel   $empModel;
    
   
    public function __construct(){
        $this->objeto       = controller\Conexion::getInstance();
        $this->userModel    = new model\usuariosModel();
        $this->empModel     = new model\empresaModel();
    }
    
    /*
     * 
     * Registro EDS
     * 
     * */
    
    public function addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password){
        $id_usuario = '';
        $id_empresa = '';
        
        echo ''.$this->userModel->addUsuario($user_codsicom2,$emp_password).'<br/>';
        $id_usuario = $this->userModel->getUltimoIdUsuario();
        
        
        echo ''.$this->empModel->addEmpresa('', 0, $emp_email, '', '', 0 , 0, '','').'<br/>';
        $id_empresa = $this->empModel->getUltimoRegEmpresa();
        
        /* falta relacionar empresa con la tabla codigo sicom */
        
        $this->userModel->addUsuario_Empresa($id_usuario,$id_empresa);
        
        $this->empModel->addRepLegal('', '', 0, '', '', 0,0, $id_empresa);
        
        $this->empModel->addAdminsitrador('', '', 0, '', '', 0, 0,
            '', '', 0, $id_empresa);
        
       
        
        echo "-------------------- Registro EDS ----------------------- <br/>";
        echo "User          :".$user_codsicom2."<br/>";
        echo "Nombre EDS    :".$nombreEDS."<br/>";
        echo "Email         :".$emp_email."<br/>";
        echo "Constraseña   :".$emp_password."<br/>";
        echo "id Usuario    :".$id_usuario."<br/>";
        echo "id Empresa    :".$id_empresa."<br/>";
        
        
    }
    
    
    /*
     * 
     * Registro Usuario
     * 
     * */
    
    public function addEDS($_descripcion,$_estado){
        
        
    }
}

?>