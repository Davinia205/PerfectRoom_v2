<?php 


include("../views/dashboard_view.php");

require '../vendor/autoload.php';

use Clases\Conexion;


session_start();


$conn = new Conexion();
$conn->crearConexion();

if (isset($_SESSION['username'])) {
    $usuarioRegistrado = $_SESSION['username'];
    // Ahora puedes usar $username en esta página
    echo "Hola, $usuarioRegistrado <br></br>";

} else {
    // La variable de sesión no está establecida, manejar la situación
    echo "Usuario no autenticado";
}


header('Location: ../views/dashboard_view.php');
