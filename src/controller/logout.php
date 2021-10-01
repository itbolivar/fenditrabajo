<?php
namespace src\controller;

//include 'logController.php';
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

/*
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$logC = new logController();
$logC->setNombreAccion("Cierre de Sesion con el Usuario ".$_SESSION["s_usuario"]);
$logC->setIP();
$logC->setNavegador($user_agent);
$logC->setFecha();
$logC->setIdUsuario($data["id"]);

*/



// Destruir todas las variables de sesión.
$_SESSION = array();

// Si se desea destruir la sesión completamente, se borra también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"],    $params["domain"],
        $params["secure"],  $params["httponly"]
        );
}
unset($_SESSION["id_usuaroempresa"],$_SESSION["user_codsicom"] );


// Finalmente, destruir la sesión.
session_destroy();
header("Location:../index.php");
?>