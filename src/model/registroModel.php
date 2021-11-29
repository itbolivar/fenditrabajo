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
     * Registro EDS O EMPRESA
     * 
     * */
    
    public function addRegistroEDS($user_codsicom2,$nombreEDS,$emp_email,$emp_password){
        $id_usuario = '';
        $id_empresa = '';
        
        $this->userModel->addUsuario($user_codsicom2,$emp_password);
        $id_usuario = $this->userModel->getUltimoIdUsuario();
       // echo 'addUsuario -->'.$id_usuario.'<br/>';
        
        
       
        
         $this->empModel->addEmpresa('', 0, '', '', 0, 0, $emp_email, '',  '', '', '', '', '', '');
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
        
        
        
        /*
         *
         * Agregando Persona de Contacto con datos Vacios
         *
         * */
        $this->empModel->addAdminsitrador('', '', 0, '', '', 0, 0, $id_empresa);
       
        
    }
    
    
    /*
     * 
     * Registro Usuario o Demandante
     * 
     * */
    
    /**
     * 
     * Pestaña de datos Personales
     * 
     */
    public function addHVUSer(){
        $this->addUsuarioHV('', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '');
        
    }
    
    
    private function addUsuarioHV(String $nombre, String $apellido, String $email, String $tipo_doc, int $numero_doc, int $telefono, int $celular, String $fecha_nacimiento, String $pais_nacimiento, String $dep_nacimiento, String $ciudad_nacimiento, String $tipo_genero, String $estado_civil, String $ocupacion_profesion, String $tipo_poblacion, String $dep_residencia, String $ciudad_municipio_res, String $dis_cambio_res, String $dir_residencia, int $aspiracion_salarial, int $tiempo_especiencia, String $descripcion_perfil){
        
       /* INSERT INTO u230156310_fenditrabajo.hoja_de_vida (nombre, apellido, email, tipo_doc, numero_doc, telefono, celular, fecha_nacimiento, pais_nacimiento, dep_nacimiento, ciudad_nacimiento, tipo_genero, estado_civil, ocupacion_profesion, tipo_poblacion, dep_residencia, ciudad_municipio_res, dis_cambio_res, dir_residencia, aspiracion_salarial, tiempo_especiencia, descripcion_perfil)
        VALUES('nombre', 'apellido', 'email', 'tipo_doc', 'numero_doc', 'telefono', 'celular', 'fecha_nacimiento', 'pais_nacimiento', 'dep_nacimiento', 'ciudad_nacimiento', 'tipo_genero', 'estado_civil', 'ocupacion_profesion', 'tipo_poblacion', 'dep_residencia', 'ciudad_municipio_res', 'dis_cambio_res', 'dir_residencia', 'aspiracion_salarial', 'tiempo_especiencia', 'descripcion_perfil');
       */ 
        $conexion           = $this->objeto->Conectar();
        
        //id_infoadmin, nombre, tipoId, numId, cargo, email, telefono, celular
        
        $sql = "INSERT INTO u230156310_fenditrabajo.hoja_de_vida (nombre, apellido, email, tipo_doc, numero_doc, telefono, celular, fecha_nacimiento, pais_nacimiento, dep_nacimiento, ciudad_nacimiento, tipo_genero, estado_civil, ocupacion_profesion, tipo_poblacion, dep_residencia, ciudad_municipio_res, dis_cambio_res, dir_residencia, aspiracion_salarial, tiempo_especiencia, descripcion_perfil) 
            VALUES('$nombre', '$apellido','$email','$tipo_doc','$numero_doc','$telefono','$celular','$fecha_nacimiento','$pais_nacimiento','$dep_nacimiento','$ciudad_nacimiento','$tipo_genero','$estado_civil','$ocupacion_profesion','$tipo_poblacion','$dep_residencia','$ciudad_municipio_res','$dis_cambio_res','$dir_residencia','$aspiracion_salarial','$tiempo_especiencia','$descripcion_perfil');";
        
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
       // $id_infoadmin = $conexion->lastInsertId();
        
        //$this->empresa_infoAdmin($id_infoadmin, $id_empresa);
        
        $conexion              =   null;
        $this->objeto->close();
    }
    
    
    
    
    
}

?>