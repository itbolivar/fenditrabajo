<?php
namespace src\controller;
 
use \Exception;
use src\model as model;
use src\controller as controller;

class rolesController
{
    private     $_id_rol      = "";
    private     $_descripcion = "";
    private     $_estado      = "";
    private     $_accionRol;
    private  static model\rolesModel    $rModel;
    
    public function __construct(){
        self::$rModel = new model\rolesModel();
    }

    public function postRoles()
    {
       // $data               = $this->rModel->selectRoles();
        $data = '';
        $opcion             = (isset($_POST['opcion']))         ? $_POST['opcion'] : '';
        $this->_id_rol      = (isset($_POST['id']))             ? $_POST['id'] : '';
        $this->_descripcion = (isset($_POST['descripcion']))    ? $_POST['descripcion'] : '';
        $this->_estado      = (isset($_POST['estado']))         ? $_POST['estado'] : '';
        
        $this->_accionRol   = (isset($_POST['accionRol']))      ? $_POST['accionRol'] : '';
     
        switch ($opcion)
        {
            case 1:
                // return $this->rModel->selectRoles();
                echo "La opcion es: ".$opcion."<br/> ";
                break;
            
            case 2:
                // return $this->rModel->selectRoles();
                echo "La opcion es: ".$opcion."<br/> ";
                break;
            
            case 3:
                // return $this->rModel->selectRoles();
                echo "La opcion es: ".$opcion."<br/> ";
                break;
                
            case 4:
                //echo "La opcion es: ".$opcion."<br/> ";
                $data = self::$rModel->selectRoles();
                break;
        }
       return $data;
    }
   
    private function addRol($_descripcion,$_estado){
        try {
            if($this->rModel->addRoles())
            {
                return 1;
            }else{
                return 0;   
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
    
    private function getIdRoles($id)
    {
        return $this->rModel->getIdRoles($id);
    }
    
    

}
$rController = new controller\rolesController();
print json_encode($rController->postRoles(), JSON_UNESCAPED_UNICODE);

?>