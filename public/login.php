<?php
require '../vendor/autoload.php';

include ("../views/login_view.php");

use Clases\Usuario;
use Clases\Conexion;



session_start();


$conn = new Conexion();
$conn->crearConexion();

$us = new Usuario();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $id_hotel = trim($_POST['id_hotel']);


if ($us->isValido($username, $password, $id_hotel)) {
    $_SESSION['username'] = $username;
    $_SESSION['id_hotel'] = $id_hotel;
    header('Location: dashboard.php');
    die();
} else {
        // Credenciales incorrectas, mostrar mensaje de error en el formulario

    echo '<script>
                document.getElementById("errorMessage").textContent = "Usuario incorrecto. Por favor, intenta de nuevo.";
                document.getElementById("errorMessage").style.display = "block";
              </script>';
 

}

// Cerrar la conexión a la base de datos al finalizar
$conn->cerrar($conn);

}
