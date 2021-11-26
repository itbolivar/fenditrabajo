<?php 
namespace src\controller;

use Exception;
use src\model\registroModel;
use src\model\usuariosModel;


class registroController{
    
    private registroModel $regModel;
    private usuariosModel  $userModel;
    
    public function __construct(){
        $this->regModel = new registroModel();
        $this->userModel = new usuariosModel();
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
            return $this->addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password);
        }
    }
    
    private function addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password){
        try {
            $res = $this->userModel->validarUsuario($user_codsicom2);
            switch ($res)
            {
                case 1:
                    $this->regModel->addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password);
                    //echo "Se regsitra EDS";
                    break;
                    
                case 0:
                    $res = 0;
                    break;
            }
        } catch (Exception $e)
        {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n";
        } 
        
        return $res;
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