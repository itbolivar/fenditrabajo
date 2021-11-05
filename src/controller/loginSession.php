<?php 
namespace src\controller;

use PDO;

class loginSession extends conexion{
        
        private String                          $id = '';
        private String                          $user_codsicom;
        private String                          $password;          
        
        private Conexion         $objeto;
        //private Model\logController   $logC;
        //private $data;
        
        public function __construct(){
            $this->objeto     = Conexion::getInstance();
            //$this->logC       = new Model\logController();
        }
        
        private function postUserPws(){
            $this->user_codsicom    = (isset($_POST['user_codsicom']))  ? $_POST['user_codsicom'] : '';
            $this->password         = (isset($_POST['password']))       ? $_POST['password'] :      '';
        }
        
        /*
         * 
         * 
         *  ============= Backend Login =============
         * 
         * 
         * */
        public function login_check(){
            $boolean    = false;
            $conexion   = $this->objeto->Conectar();
            //$logC       = new logController();
            $this->postUserPws();
            
            //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD
            $pass = md5($this->password);
             
            $consulta   = "SELECT id, user_codsicom, password FROM ".PREFIXDB."usuarios WHERE user_codsicom='$this->user_codsicom' AND password='$pass' ";
            $resultado  = $conexion->prepare($consulta);
            $resultado->execute();
            
            if($resultado->rowCount() >= 1)
            {
                $boolean    = true;
                
                $data       = $resultado->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $row)
                {
                    $this->id   =  $row["id"];
                }
                /*session_id($id_u);
                session_start();
                $this->id    = $id_u;
                $_SESSION["user_codsicom"]  = $this->user_codsicom;*/
                
                //$logC->setLog("Inicio de Sesion con el Usuario ".$this->user_codsicom."",$id_u);
            }else
            {
                $boolean                    =   false;
                $conexion                   =   null;
            }
            
            return $boolean;
        }
        
        /*
         * 
         *  ============= Aqui se desarrolla el inicio de sesion de FrontEnd =============
         * 
         * */

        public function getID(){
            return $this->id;
        }
        
        public function postUsuarioEmpresaFrontEnd(){
            if(isset($_POST['candidatoLogin']))
            {
                $user_codsicom      =   $_POST['user_codsicom'];
                $password           =   $_POST['password'];
                
                $res = $this->getTypeLoginUserEDS($user_codsicom,$password);
                if($res == true){
                    header('Location:../view/user/index.php');
                }
            }
            if(isset($_POST['eds_empleadorLogin']))
            {
                $user_codsicom2     =   $_POST['user_codsicom2'];
                $emp_password       =   $_POST['emp_password'];
                $res =  $this->getTypeLoginUserEDS($user_codsicom2,$emp_password);
                if($res){
                    header("Location:../view/distri/index.php");
                }
            }
        }
        
        private function getTypeLoginUserEDS($user_codsicom,$password){
            $boolean    = false;
            $id_u       = "";
           // $user_codsicom = '';
            $conexion   = $this->objeto->Conectar();
            //$logC       = new logController();
                        
            //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD
            $pass = md5($password);
            
            $consulta   = "SELECT id, user_codsicom, password FROM ".PREFIXDB."usuarios WHERE user_codsicom='$user_codsicom' AND password='$pass' ";
            $resultado  = $conexion->prepare($consulta);
            $resultado->execute();
            
            if($resultado->rowCount() >= 1)
            {
                $boolean    = true;
                
                $data       = $resultado->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $row)
                {
                    $id_u               =  $row['id'];
                    //$user_codsicom      = $row['user_codsicom'];
                }
                session_id($id_u);
                session_start();
                $_SESSION["id_usuaroempresa"]    = $id_u;
                $_SESSION["user_codsicom"]       = $user_codsicom;
                
                //$logC->setLog("Inicio de Sesion con el Usuario ".$this->user_codsicom."",$id_u);
            }else
            {
                $boolean                         = false;
                $_SESSION["id_usuaroempresa"]    =   null;
                $_SESSION["user_codsicom"]       =   null;
                //$data                          =   null;
                $conexion                        =   null;
            }
            
            return $boolean;
            
        }
    }
?>