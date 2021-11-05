<?php 
namespace src\controller;

use Exception;
use src\model\codsicomModel;

class codsicomController{
    
    private     codsicomModel    $cModel;
    private     $subfix         = '-77';
    private     $codsicom_af    ;
    private     $nombreEDS      ;
    
    public function __construct(){
        $this->cModel = new codsicomModel();
    }
    
    public function codsicom_check($cod_sicom)
    {
        try {
            $res = $this->cModel->get_codsicom($cod_sicom);
        } catch (Exception $e) {
            echo $e;
        }
       return $res;
    }
    
    public function getNombreEDS(){
        return $this->nombreEDS;
    }
    
    public function setNombreEDS($a){
        $this->nombreEDS = $a;
    }
}


if(!empty($_POST['id_cod'])){
    
    $codsicom   = new codsicomController();
    
    $id_codsicom    = '';
    $cod            = '';
    $nombreEDS      = '';
    
    //echo 'idcod ->'.$_POST['id_cod']."<br/>";
    $id_cod     = $_POST['id_cod'];
    $data       = $codsicom->codsicom_check($id_cod);
    if($data == ''){
        $nombreEDS = '';
    }else{
        foreach($data as $dat)
        {
            $id_codsicom    = $dat['id_cod'];
            $cod            = $dat['cod_sicom'];
            $codsicom->setNombreEDS($dat['nombre']);
        }
        $nombreEDS = $codsicom->getNombreEDS();
    }
    echo "<input type='text' name='nombreEDS' id='nombreEDS' class='form-control' value='$nombreEDS' readonly></input>";
}
?>