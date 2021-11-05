<?php
namespace src\controller;

use Exception;
use PDO;

class conexion
{
        private static string $servidor           = '';
        private static string $db                 = '';
        private static string $user               = '';
        private static string $password           = '';
        private static $instance                  = NULL;
        private static $conexion                  = '';
        
        public function __construct(){
            self::$servidor         = '151.106.110.194';
            self::$db               = 'u230156310_fenditrabajo';
            self::$user             = 'u230156310_fenditrabajo';
            self::$password         = '3Nb$=Gh&O^be';
        }
        public static function Conectar()
        {
            try
            {
                $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
                self::$conexion = new PDO("mysql:host=".self::$servidor.";dbname=".self::$db."", self::$user , self::$password , $opciones );
            }
            catch (Exception $e)
            {
                self::$conexion = null;
                die("El error de Conexion es: ". $e->getMessage());
            }
            return self::$conexion;
        }
        
        public static function getInstance()
        {
            if (!self::$instance instanceof self ) {
                self::$instance = new conexion();
            }
            return conexion::$instance;
        }
        
        public static function Close(){
            self::$conexion = null;
            self::$instance = null;
            
        }
        
        public function usuariosOnline(){
            return 10;
        }
 }