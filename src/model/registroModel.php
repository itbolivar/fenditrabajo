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
        
        $this->empModel->addRepLegal('', '', 0, '', '', 0,0, $id_empresa);
        
        $this->empModel->addAdminsitrador('', '', 0, '', '', 0, 0,
            '', '', 0, $id_empresa);
        
       
        
        /*echo "-------------------- Registro EDS ----------------------- <br/>";
        echo "User          :".$user_codsicom2."<br/>";
        echo "Nombre EDS    :".$nombreEDS."<br/>";
        echo "Email         :".$emp_email."<br/>";
        echo "Constraseña   :".$emp_password."<br/>";
        echo "id Usuario    :".$id_usuario."<br/>";
        echo "id Empresa    :".$id_empresa."<br/>";*/
        
        
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