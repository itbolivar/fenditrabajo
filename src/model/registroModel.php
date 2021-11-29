<?php 
namespace src\model;

use src\controller\conexion;

class registroModel{
    
    private     $_id            = "";
    private     $_descripcion   = "";
    private     $_estado        = "";
    //private     logController   $logC;
    private     conexion        $objeto;
    private     $conexion;
    private     $data;
    
    /* Declaracion de Clases */
    private     usuariosModel  $userModel;
    private     empresaModel   $empModel;
    
   
    public function __construct(){
        $this->objeto       = conexion::getInstance();
        $this->userModel    = new usuariosModel();
        $this->empModel     = new empresaModel();
    }
    
    /*
     * 
     * Registro EDS
     * 
     * */
    
    public function addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password){
        $id_usuario = '';
        $id_empresa = '';
        
        $this->userModel->addUsuario($user_codsicom2,$emp_password);
        $id_usuario = $this->userModel->getUltimoIdUsuario();
       // echo 'addUsuario -->'.$id_usuario.'<br/>';
        
        $this->empModel->addEmpresa('', 0, $emp_email, '', '', 0 , 0, '','');
        $id_empresa = $this->empModel->getUltimoRegEmpresa();
       // echo 'addEmpresa --->'.$id_empresa;
       
        
        /* falta relacionar empresa con la tabla codigo sicom */
        
        $this->userModel->addUsuario_Empresa($id_usuario,$id_empresa);
        
        
        /*
         * 
         * Agregando Info de Representante legal como intancias todas en vacio o en 0
         * 
         * */
        $this->empModel->addRepLegal('', '', 0, '', '', 0,0, $id_empresa);
        
        $this->empModel->addAdminsitrador('', '', 0, '', '', 0, 0,
            '', '', 0, $id_empresa);
       
        
    }
    
    
    /*
     * 
     * Registro Usuario
     * 
     * */
    
    public function addregistroUsuario($_descripcion,$_estado){
        
        
    }
}

?>