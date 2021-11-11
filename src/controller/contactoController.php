<?php 
namespace src\controller;

require_once $_SERVER["DOCUMENT_ROOT"].'/fenditrabajo/src/libraryFendi.php';
use Exception;
use src\model\contactoModel;


//use src\phpmailer\enviarEmail;

class contactoController{
    
    private $cnt_nombre;
    private $cnt_apellido;
    private $cnt_telefono;
    private $cnt_email;
    private $cnt_tipodocumento;
    private $cnt_numerodocumento;
    private $cnt_solicitud;
    
    private $contactomodel;
    private $enviarEmail;
    
    public function __construct(){
        $this->contactomodel = new contactoModel();
        //$this->enviarEmail = enviarEmail::getInstance();
    }
    
    public function postContactos(){
        if($_POST['cnt_nombre'] != ''      && $_POST['cnt_apellido'] != ''  &&
            $_POST['cnt_telefono'] != ''    && $_POST['cnt_email'] != ''  &&
            $_POST['cnt_tipodocumento']     && $_POST['cnt_numerodocumento'] != ''  &&
            $_POST['cnt_solicitud'] != '' )
        {
            $this->cnt_nombre = $_POST['cnt_nombre'];
            $this->cnt_apellido = $_POST['cnt_apellido'];
            $this->cnt_telefono = $_POST['cnt_telefono'];
            $this->cnt_email = $_POST['cnt_email'];
            $this->cnt_tipodocumento = $_POST['cnt_tipodocumento'];
            $this->cnt_numerodocumento = $_POST['cnt_numerodocumento'];
            $this->cnt_solicitud = $_POST['cnt_solicitud'];
            return true;
        }else{
            return false;
        }
    }
    
    public function registrarContacto(){
        $res ='';
        try {
            $res = $this->contactomodel->registrarContacto($this->cnt_nombre,
                                $this->cnt_apellido,
                                $this->cnt_telefono,
                                $this->cnt_email,
                                $this->cnt_tipodocumento,
                                $this->cnt_numerodocumento,
                                $this->cnt_solicitud);
            echo "Registrar Contacto. <b> {$res} </b>";
            /*if($res){
                $this->enviaEmail->sendEmailContacto();
            }*/
            
        } catch (Exception $e) {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n";
        }
    }
    
}

?>