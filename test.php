<?php
class test
{
    private static string $servidor           = '';
    private static string $db                 = '';
    private static string $user               = '';
    private static string $password           = '';
    private static $instance                  = NULL;

    public function __construct(){
        self::$servidor         = 'localhost';
        self::$db               = 'u230156310_fenditrabajo';
        self::$user             = 'u230156310_fenditrabajo';
        self::$password         = '3Nb$=Gh&O^be';
    }
    public static function Conectar()
    {
        try
        {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            $conexion = new PDO("mysql:host=".self::$servidor.";dbname=".self::$db."", self::$user , self::$password , $opciones );
        }
        catch (Exception $e)
        {
            $conexion = null;
            die("El error de Conexion es: ". $e->getMessage());
        }
        return $conexion;
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new test();
        }
        return test::$instance;
    }

    public static function Close(){
        self::$instance = null;
    }


    public function get_codsicom($cod_sicom){
        $data       = '' ;
        $objeto     = test::getInstance();
        $conexion   = $objeto->Conectar();

        $sql        = "SELECT * FROM u230156310_fenditrabajo.cod_sicom where cod_sicom='$cod_sicom';";
        $resultado  = $conexion->prepare($sql);
        $resultado->execute();
        if($resultado->rowCount() >= 1)
        {
            //echo "rowCount :".$resultado->rowCount()."<br/>";
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            //print json_encode($data);
        }else
        {
            $this->data=null;
            $conexion=null;
            $objeto->close();
        }

        return $data;
    }

}

    $con = new test();
    $id_cod     = 630017;
    $data       = $con->get_codsicom($id_cod);


    $id        = '';
    $cod       = '';
    $nombre    = '';



    foreach($data as $dat)
    {
        $id         = $dat['id_cod'];
        $cod        = $dat['cod_sicom'];
        $nombre     = $dat['nombre'];

    }

    echo "id ----->".$id."<br/>";
    echo "cod ---->".$cod."<br/>";
    echo "nombre ->".$nombre."<br/>";


?>
