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
           
         
            $this->regModel->addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password);
            
           
            
        } catch (Exception $e)
        {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n";
        }        
    }
    
    private function addRegistroUSUARIO($user_codsicom, $password){
        $boolean = true;
        try 
        {
            echo "Registro USUARIO";
        
        } catch (Exception $e) 
        {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n";
        }
        
        return $boolean;
    }
}

?>