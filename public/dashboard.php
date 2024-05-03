<?php 


require '../vendor/autoload.php';

use Clases\Conexion;


session_start();
echo "<p><center>Bienvenido/a ".$_SESSION['username']."</center></p>";

include ("../views/dashboard_view.php"); #incluimos la vista para que el usuario elija una opción


$conn = new Conexion();
$conn->crearConexion();

if (!isset($_SESSION['username'])) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}




