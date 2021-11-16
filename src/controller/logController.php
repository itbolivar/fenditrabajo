<?php
namespace src\controller;

use DateTime;
use Exception;
use src\model\logModel;

class logController
{
        private String          $_ip            = '';
        private String          $_nomAccion     = '';
        private String          $_fecha         = '';
        private String          $_navegador     = '';
        private int             $_id_usuario    = 0;
        private $log;
        private browserDetection $bDetect;
                
        
        public function __construct(){
            $this->log = new logModel();
        }
        
        
        public function setLog($nom,$id)
        {
            if($id == 0 || $id == '' || $id == null || $nom == 0 || $nom == '' || $nom == null ){
                /*echo "\n Accion     : ".$nom."<br/>";
                echo "\n IP         : ".$this->getRealIP()."<br/>";
                echo "\n ".$this->getBrowser()."<br/>";
                echo "\n Fecha      : ".$this->getfechaHoraActual()."<br/>";
                echo "\n Id Usuario : ".$id."<br/>";*/
                
                //$logModel = new logModel();
                $this->log->setLog(''.$nom,''.$this->getRealIP(),''.$this->getBrowser(),$this->getfechaHoraActual(),''.$id);
            }
        }
        
        
        public function setLogContacto($data)
        {
            $res = '';
            try {
                 $res = $this->log->setLogContacto($data,$this->getRealIP(),$this->getBrowser(),$this->getfechaHoraActual());
                
            } catch (Exception $e) {
                echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n";
            }
            
            return $res;
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
        
        private function getBrowser()
        {
            $this->bDetect = new browserDetection();
            
            return $this->bDetect->detect()->getInfo();
        }
        
        private function getfechaHoraActual(){
            $Object             = new DateTime();
            $DateAndTime        = $Object->format("d-m-Y h:i:s a");
            return $DateAndTime;
        }
        
        
       
}
?>