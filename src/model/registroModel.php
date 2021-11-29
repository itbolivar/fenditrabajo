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
     * PESTAÑA DATOS PERSONALES
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
        $id_hojadevida = $conexion->lastInsertId();
        
        //$this->empresa_infoAdmin($id_infoadmin, $id_empresa);
        
        $conexion              =   null;
        $this->objeto->close();
    }

    private function usuario_hojavida($idusuario, $id_hojadevida){

        $conexion           = $this->objeto->Conectar();

        $sql = "INSERT INTO u230156310_fenditrabajo.usuario_hv (idusuario, idhv) 
            VALUES('$idusuario', '$id_hojadevida');";
        
        

        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        

    }



    /**
     * 
     * PESTAÑA FORMACIÓN EDUCACIÓN
     * 
     */
    public function addHVFormacion(){
        $this->addUsuarioHVFormacion('', '', '', '', '', '', '', '', '', '', '', '');
        
    }
    
    
    private function addUsuarioHVFormacion(String $nivel_estudio, String $titulo, String $estudio_informal,	String $universidad_institucion, String $estudia_actualmente, String $fecha_inicio,	 String $fecha_final, String $idiomas,	String $nivel,	String $pais, String $departamento,	String $ciudad ){
        
       /* INSERT INTO u230156310_fenditrabajo.hoja_de_vida (nombre, apellido, email, tipo_doc, numero_doc, telefono, celular, fecha_nacimiento, pais_nacimiento, dep_nacimiento, ciudad_nacimiento, tipo_genero, estado_civil, ocupacion_profesion, tipo_poblacion, dep_residencia, ciudad_municipio_res, dis_cambio_res, dir_residencia, aspiracion_salarial, tiempo_especiencia, descripcion_perfil)
        VALUES('nombre', 'apellido', 'email', 'tipo_doc', 'numero_doc', 'telefono', 'celular', 'fecha_nacimiento', 'pais_nacimiento', 'dep_nacimiento', 'ciudad_nacimiento', 'tipo_genero', 'estado_civil', 'ocupacion_profesion', 'tipo_poblacion', 'dep_residencia', 'ciudad_municipio_res', 'dis_cambio_res', 'dir_residencia', 'aspiracion_salarial', 'tiempo_especiencia', 'descripcion_perfil');
       */ 
        $conexion           = $this->objeto->Conectar();
        
        //id_infoadmin, nombre, tipoId, numId, cargo, email, telefono, celular
        
        $sql = "INSERT INTO u230156310_fenditrabajo.formacion (nivel_estudio, titulo, estudio_informal, universidad_institucion, estudia_actualmente, fecha_inicio, fecha_final, idiomas, nivel,	pais, departamento, ciudad) 
            VALUES('$nivel_estudio', '$titulo',	'$estudio_informal', '$universidad_institucion', '$estudia_actualmente', '$fecha_inicio', '$fecha_final', '$idiomas', '$nivel', '$pais', '$departamento', '$ciudad');";
        
        

        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
       // $id_infoadmin = $conexion->lastInsertId();
        
        //$this->empresa_infoAdmin($id_infoadmin, $id_empresa);
        
        $conexion              =   null;
        $this->objeto->close();
    }

    private function usuario_formacion($iduserFormacion, $id_formacion){

        $conexion           = $this->objeto->Conectar();

        $sql = "INSERT INTO u230156310_fenditrabajo.usuario_formacion (id_usuario, id_formacion) 
            VALUES('$iduserFormacion', '$id_formacion');";
        
        

        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        

    }

    /**
     * 
     * PESTAÑA EXPERIENCIA LABORAL
     * 
     */
    public function addHVExperiencia(){
        $this->addUsuarioHVExperiencia('', '', '', '', '', '', '', '', '', '', '', '', '');
        
    }
    
    
    private function addUsuarioHVExperiencia(String $nombre_empresa, String $actividad_empresa, String $nombre_cargo, String $perfil, String $ocupacion, String $pais, String $departamento, String $municipio, String $labora_actualmente, String $fecha_ingreso, String $fecha_retiro, String $tiempo_experiencia, String $descripcion_funciones){
        
       /* INSERT INTO u230156310_fenditrabajo.hoja_de_vida (nombre, apellido, email, tipo_doc, numero_doc, telefono, celular, fecha_nacimiento, pais_nacimiento, dep_nacimiento, ciudad_nacimiento, tipo_genero, estado_civil, ocupacion_profesion, tipo_poblacion, dep_residencia, ciudad_municipio_res, dis_cambio_res, dir_residencia, aspiracion_salarial, tiempo_especiencia, descripcion_perfil)
        VALUES('nombre', 'apellido', 'email', 'tipo_doc', 'numero_doc', 'telefono', 'celular', 'fecha_nacimiento', 'pais_nacimiento', 'dep_nacimiento', 'ciudad_nacimiento', 'tipo_genero', 'estado_civil', 'ocupacion_profesion', 'tipo_poblacion', 'dep_residencia', 'ciudad_municipio_res', 'dis_cambio_res', 'dir_residencia', 'aspiracion_salarial', 'tiempo_especiencia', 'descripcion_perfil');
       */ 
        $conexion           = $this->objeto->Conectar();
        
        //id_infoadmin, nombre, tipoId, numId, cargo, email, telefono, celular
        
        $sql = "INSERT INTO u230156310_fenditrabajo.experiencia (nombre_empresa, actividad_empresa, nombre_cargo, perfil, ocupacion, pais, departamento, municipio, labora_actualmente, fecha_ingreso, fecha_retiro, tiempo_experiencia, descripcion_funciones) 
            VALUES('$nombre_empresa', '$actividad_empresa', '$nombre_cargo', '$perfil', '$ocupacion', '$pais', '$departamento', '$municipio', $labora_actualmente', '$fecha_ingreso', '$fecha_retiro', '$tiempo_experiencia', '$descripcion_funciones');";
        
        

        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
       // $id_infoadmin = $conexion->lastInsertId();
        
        //$this->empresa_infoAdmin($id_infoadmin, $id_empresa);
        
        $conexion              =   null;
        $this->objeto->close();
    }

    private function usuario_experiencia($id_experiencia, $idexperienciaUser){

        $conexion           = $this->objeto->Conectar();

        $sql = "INSERT INTO u230156310_fenditrabajo.usuario_experiencia (id_experiencia, id_usuarios) 
            VALUES('$id_experiencia', '$idexperienciaUser');";
        
        

        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        

    }


    /**
     * 
     * PESTAÑA REFERENCIAS
     * 
     */
    public function addHVReferencias(){
        $this->addUsuarioHVReferencias('', '', 0, '', '', '', '', 0);
        
    }
    
    
    private function addUsuarioHVReferencias(String $ref_nombre, String $ref_ocupacion, int $ref_telpersonal,	String $ref_nomempresa, String $ref_jefeinmediato, String $ref_cargo, String $ref_correo, int $ref_telempresa ){
        
       /* INSERT INTO u230156310_fenditrabajo.hoja_de_vida (nombre, apellido, email, tipo_doc, numero_doc, telefono, celular, fecha_nacimiento, pais_nacimiento, dep_nacimiento, ciudad_nacimiento, tipo_genero, estado_civil, ocupacion_profesion, tipo_poblacion, dep_residencia, ciudad_municipio_res, dis_cambio_res, dir_residencia, aspiracion_salarial, tiempo_especiencia, descripcion_perfil)
        VALUES('nombre', 'apellido', 'email', 'tipo_doc', 'numero_doc', 'telefono', 'celular', 'fecha_nacimiento', 'pais_nacimiento', 'dep_nacimiento', 'ciudad_nacimiento', 'tipo_genero', 'estado_civil', 'ocupacion_profesion', 'tipo_poblacion', 'dep_residencia', 'ciudad_municipio_res', 'dis_cambio_res', 'dir_residencia', 'aspiracion_salarial', 'tiempo_especiencia', 'descripcion_perfil');
       */ 
        $conexion           = $this->objeto->Conectar();
        
        //id_infoadmin, nombre, tipoId, numId, cargo, email, telefono, celular
        
        $sql = "INSERT INTO u230156310_fenditrabajo.referencia ( nombre, ocupacion, telpersonal, nomempresa, jefeinmediato, cargo, email, telempresa) 
            VALUES ( '$ref_nombre', '$ref_ocupacion', '$ref_telpersonal', '$ref_nomempresa', '$ref_jefeinmediato', '$ref_cargo', '$ref_correo', '$ref_telempresa');";
        
        

        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
       // $id_infoadmin = $conexion->lastInsertId();
        
        //$this->empresa_infoAdmin($id_infoadmin, $id_empresa);
        
        $conexion              =   null;
        $this->objeto->close();
    }

    private function usuario_referencia($idreferenciasUser, $idreferencia){

        $conexion           = $this->objeto->Conectar();

        $sql = "INSERT INTO u230156310_fenditrabajo.usuario_referencia (id_usuario, id_referencia) 
            VALUES('$idreferenciasUser', '$idreferencia');";
        
        

        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        

    }


    
    
    
}

?>