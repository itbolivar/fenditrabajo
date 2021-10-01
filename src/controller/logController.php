<?php
namespace src\controller;
use DateTime;
use src\model as model;

require_once 'browserDetection.php';

class logController
{
        private String          $_ip            = '';
        private String          $_nomAccion     = '';
        private String          $_fecha         = '';
        private String          $_navegador     = '';
        private int             $_id_usuario    = 0;
        private model\logModel        $log;
                
        
        public function __construct(){
            $this->log = new model\logModel();
        }
        
        
        public function setLog($nom,$id)
        {
            if($id == 0 || $id == "" || $id == null || $nom == 0 || $nom == "" || $nom == null ){
                /*echo "\n Accion     : ".$nom."<br/>";
                echo "\n IP         : ".$this->getRealIP()."<br/>";
                echo "\n ".$this->getBrowser()."<br/>";
                echo "\n Fecha      : ".$this->getfechaHoraActual()."<br/>";
                echo "\n Id Usuario : ".$id."<br/>";*/
                
                //$logModel = new logModel();
                //$$logModel->setLog(''.$nom,''.$this->getRealIP(),''.$this->getBrowser(),$this->getfechaHoraActual(),''.$id);
            }
        }
        
        
        /*
         * Obtener el IP Real del Usuario
         * 
         * La función verifica si existen las primeras variables del servidor y según el 
         * resultado nos devuelve el valor del IP. Una vez obtenida esta IP se puede 
         * utilizar para verificarlo con Akismet para saber si es un IP desde donde se 
         * hace spam o no
         *
         * */
        
        private function getRealIP()
        {
            if (isset($_SERVER["HTTP_CLIENT_IP"]))
            {
                return $_SERVER["HTTP_CLIENT_IP"];
            }
            elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            {
                return $_SERVER["HTTP_X_FORWARDED_FOR"];
            }
            elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
            {
                return $_SERVER["HTTP_X_FORWARDED"];
            }
            elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
            {
                return $_SERVER["HTTP_FORWARDED_FOR"];
            }
            elseif (isset($_SERVER["HTTP_FORWARDED"]))
            {
                return $_SERVER["HTTP_FORWARDED"];
            }
            else
            {
                return $_SERVER["REMOTE_ADDR"];
            }
        }
        
        private function getfechaHoraActual(){
            $Object             = new DateTime();
            $DateAndTime        = $Object->format("d-m-Y h:i:s a");
            return $DateAndTime;
        }
        
        
       private function getBrowser()
        {
             $obj = new browserDetection();
             
             return $obj->detect()->getInfo();
        }
}
?>