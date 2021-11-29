<?php
namespace src\controller;

use Exception;
use src\model\empresaModel;

class empresaController{

    private     $id_empresa     = '';
    private     empresaModel    $empModel ;

    /* Datos Personales*/
    private $emp_razonsocial    ;
    private $emp_nit_empresa    ;
    private $emp_email          ;
    private $emp_depa           ;
    private $emp_ciudad         ;
    private $tel_empresa        ;
    private $cel_empresa        ;
    private $dir_empresa        ;
    private $emp_arl            ;
    private $emp_riesgo         ;
    private $emp_numtabajador   ;
    private $emp_descripcion    ;

    /* Datos Representante Legal */
    private $rep_nom            ;
    private $rep_tipoid         ;
    private $rep_numid          ;
    private $rep_cargo          ;
    private $rep_email          ;
    private $rep_tel            ;
    private $rep_cel            ;

    /* Informacion Adminsitrador */
    private $admin_nom ;
    private $admin_tipoid ;
    private $admin_num ;
    private $admin_email ;
    private $admin_cargo ;
    private $admin_cel ;
    private $admin_tel ;
    

    public function __construct(){

        /* Datos Personales*/
        $this->emp_razonsocial    = null;
        $this->emp_nit_empresa    = null;
        $this->emp_email          = null;
        $this->emp_depa           = null;
        $this->emp_ciudad         = null;
        $this->tel_empresa        = null;
        $this->cel_empresa        = null;
        $this->dir_empresa        = null;
        $this->emp_descripcion    = null;

        /* Datos Representante Legal */
        $this->rep_nom            = null;
        $this->rep_tipoid         = null;
        $this->rep_numid          = null;
        $this->rep_cargo          = null;
        $this->rep_email          = null;
        $this->rep_tel            = null;
        $this->rep_cel            = null;

        /* Informacion Adminsitrador */
        $this->admin_nom          = null;
        $this->admin_tipoid       = null;
        $this->admin_num          = null;
        $this->admin_email        = null;
        $this->admin_cargo        = null;
        $this->admin_cel          = null;
        $this->admin_tel          = null;
        $this->admin_arl          = null;
        $this->admin_riesgo       = null;
        $this->admin_numtabajador = null;

        $this->empModel = new empresaModel();
    }

    public function getPOST(){

        /*
         * Datos Empresariales
         * */
        $this->emp_razonsocial    = $_POST["emp_razonsocial"];
        $this->emp_nit_empresa    = $_POST["emp_nit_empresa"];
        $this->emp_email          = $_POST["emp_email"];
        $this->emp_depa           = $_POST["emp_depa"];
        $this->emp_ciudad         = $_POST["emp_ciudad"];
        $this->tel_empresa        = $_POST["tel_empresa"];
        $this->cel_empresa        = $_POST["cel_empresa"];
        $this->dir_empresa        = $_POST["dir_empresa"];
        $this->emp_descripcion    = $_POST["emp_descripcion"];

        /*
         * Datos Representante Legal
         */
        $this->rep_nom                  = $_POST["rep_nom"];
        $this->rep_tipoid               = $_POST["rep_tipoid"];
        $this->rep_numid                = $_POST["rep_numid"];
        $this->rep_cargo                = $_POST["rep_cargo"];
        $this->rep_email                = $_POST["rep_email"];
        $this->rep_tel                  = $_POST["rep_tel"];
        $this->rep_cel                  = $_POST["rep_cel"];

        /*
         * Informacion Contacto
         */
        $this->admin_nom              = $_POST["admin_nom"];
        $this->admin_tipoid           = $_POST["admin_tipoid"];
        $this->admin_num              = $_POST["admin_num"];
        $this->admin_email            = $_POST["admin_email"];
        $this->admin_cargo            = $_POST["admin_cargo"];
        $this->admin_cel              = $_POST["admin_cel"];
        $this->admin_tel              = $_POST["admin_tel"];
        

    }

    
    
    public function getAllEmpresa(){
        $data = '';
        try {
            $data =  $this->empModel->getAllEmpresa();
        } catch (Exception $e) {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n"; 
        }
        return $data;
    }

    public function getReplegal(){
        $data = '';
        try {
            $data =  $this->empModel->getReplegal();
        } catch (Exception $e) {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n"; 
        }
        return $data;
    }
    
    public function getUsuarioEmpresa($id_usuario){
        $res = '';
        
        try {
            $res = $this->empModel->getUsuarioEmpresa($id_usuario);
        } catch (Exception $e) {
            $res = null;
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n"; 
        }
        return $res;
    }

    public function selectIDEmpresa($id_emp){
        $data = '';
        try {
            $data =  $this->empModel->selectIDEmpresa($id_emp);
        } catch (Exception $e) {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n"; 
        }
        return $data;
    }
    
    public function selectRepLegal($id_emp){
        $data = '';
        try {
            $data =  $this->empModel->selectRepLegal($id_emp);
        } catch (Exception $e) {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n"; 
        }
        return $data;
    }
    
    public function selectAdminsitrador($id_emp){
        $data = '';
        try {
            $data =  $this->empModel->selectAdminsitrador($id_emp);
        } catch (Exception $e) {
            echo '<strong>' . htmlspecialchars($e->getMessage(), ENT_COMPAT | ENT_HTML401) . "</strong><br />\n"; 
        }
        return $data;
    }
    
    
    
    /*
     * 
     * AGREGAR EDS, REPRESENTANTE LEGAL Y ADMINSITRADOR
     * 
     * */
    
    public function agregarRegistroEDS(){
        $this->getPOST();
        $id_empresa = '';
        
        $this->addEmpresa( $this->emp_razonsocial,$this->emp_nit_empresa, $this->emp_email, $this->emp_depa, $this->emp_ciudad,
                        $this->tel_empresa, $this->cel_empresa, $this->dir_empresa,$this->emp_descripcion);

        $id_empresa = $this->empModel->getUltimoRegEmpresa();
        
        //$_SESSION['IDEMPRESA'] = $this->empModel->getUltimoRegEmpresa();
        
         /* Codigo de INSERT PARA Representante Legal */
            $this->addRepLegal($this->rep_nom,$this->rep_tipoid, $this->rep_numid, $this->rep_cargo, $this->rep_email, $this->rep_tel, 
                               $this->rep_cel, $id_empresa);
            
         /* Codigo INSERT para Administrador */
            $this->addAdminsitrador($this->admin_nom, $this->admin_tipoid, $this->admin_num, $this->admin_cargo, $this->admin_email,
                                    $this->admin_tel,$this->admin_cel,$this->admin_arl,$this->admin_riesgo, $this->admin_numtabajador,
                                    $id_empresa); 

           $this->destroyVariable(); 
    }

    private function addEmpresa(String $nomRazonSocial, int $nit, String $email, String $departamento, String $ciudad, int $telefono, int $celular, String $direccion, String $descripcion){
        $res = 0;
        try {
            $res = $this->empModel->addEmpresa( $nomRazonSocial,  $nit,  $email,  $departamento,  $ciudad,  $telefono,  $celular,  $direccion, $descripcion);
        } catch (Exception $e) {
            echo ''.$e->getMessage().'<br/>';
        }
        return $res;
    }

    private function addRepLegal(String $nombre, String $tipoId, int $numId, String $cargo, String $email, int $telefono, int $celular, int $id_empresa){
        $res = 0;
        try {
            $res = $this->empModel->addRepLegal($nombre,  $tipoId,  $numId,  $cargo,  $email,  $telefono,  $celular, $id_empresa);

        } catch (Exception $e) {
            echo ''.$e->getMessage().'<br/>';
        }

        return $res;
    }
    
    private function addAdminsitrador(String $nombre, String $tipoId, int $numId, String $cargo, String $email, int $telefono, int $celular, String $arl, String $nivelriesgo, int $numTrabajadores, int $id_empresa)
    {
        $res = 0;
        try {
            $res = $this->empModel->addAdminsitrador( $nombre,  $tipoId,  $numId,  $cargo,  $email,  $telefono,  $celular,  $arl,  $nivelriesgo,  $numTrabajadores, $id_empresa);

        } catch (Exception $e) {
            echo ''.$e->getMessage().'<br/>';
        }

        return $res;
    }
    
    private function destroyVariable(){
        
         unset ($_POST['submit']            , $_POST["emp_razonsocial"],$_POST["emp_nit_empresa"],
                $_POST["emp_email"]         , $_POST["emp_depa"],
                $_POST["emp_ciudad"]        , $_POST["tel_empresa"],
                $_POST["cel_empresa"]       , $_POST["dir_empresa"],
                $_POST["emp_descripcion"]   , $_POST["rep_nom"],
                $_POST["rep_tipoid"]        ,$_POST["rep_numid"],
                $_POST["rep_cargo"]         ,$_POST["rep_email"],
                $_POST["rep_tel"]           ,$_POST["rep_cel"],
                $_POST["admin_nom"]         , $_POST["admin_tipoid"],
                $_POST["admin_num"]         , $_POST["admin_email"],
                $_POST["admin_cargo"]       , $_POST["admin_cel"],
                $_POST["admin_tel"]         , $_POST["admin_arl"],
                $_POST["admin_riesgo"]      , $_POST["admin_numtabajador"],
             $this->emp_razonsocial, $this->emp_nit_empresa  , $this->emp_email,
             $this->emp_depa       , $this->emp_ciudad       , $this->tel_empresa  ,   $this->cel_empresa,
             $this->dir_empresa    , $this->emp_descripcion  , $this->rep_nom      ,   $this->rep_tipoid, 
             $this->rep_numid      , $this->rep_cargo        , $this->rep_email    ,   $this->rep_tel, 
             $this->rep_cel        , $this->admin_nom        , $this->admin_tipoid ,   $this->admin_num,
             $this->admin_email    , $this->admin_cargo      , $this->admin_cel    ,   $this->admin_tel,
             $this->admin_arl      , $this->admin_riesgo     , $this->admin_numtabajador);
    }

}
?>