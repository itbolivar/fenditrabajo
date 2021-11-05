<?php 
namespace src\controller;

use Exception;
use src\model\registroModel;


class registroController{
    
    private registroModel $regModel;
    
    public function __construct(){
        $this->regModel = new registroModel();
    }
    
    public function getPOST(){
        if(isset($_POST['candidatoReg']))
        {
            $user_codsicom      =   $_POST['user_codsicom'];
            $password           =   $_POST['password'];
            $this->addRegistroUSUARIO($user_codsicom, $password);           
        }
        if(isset($_POST['eds_empleadorReg']))
        {
            $user_codsicom2     =   $_POST['user_codsicom2'];
            $nombreEDS          =   $_POST['nombreEDS'];
            $emp_email          =   $_POST['emp_email'];
            $emp_password       =   $_POST['emp_password'];
            $this->addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password);
        }
    }
    
    private function addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password){
        try {
           /* echo "Registro EDS <br/>";
            echo "User          :".$user_codsicom2."<br/>";
            echo "Nombre EDS    :".$nombreEDS."<br/>";
            echo "Email         :".$emp_email."<br/>";
            echo "Constraseña   :".$emp_password;
            
            /*usuarios
            usuario_empresa
            empresa*/
         
            $this->regModel->addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password);
            
            /*empresa_codsicom
            representante_legal
            empresa_replegal
            info_administrador
            empresa_infoAdmin*/
            
        } catch (Exception $e)
        {
            echo $e;
        }        
    }
    
    private function addRegistroUSUARIO($user_codsicom, $password){
        $boolean = true;
        try 
        {
            echo "Registro USUARIO";
        
        } catch (Exception $e) 
        {
            echo $e;
        }
        
        return $boolean;
    }
}

?>