<?php
require '../vendor/autoload.php';

include ("../views/login_view.php"); #incluimos la vista que contiene el formulario para hacer el login

use Clases\Usuario;
use Clases\Conexion;



session_start(); #iniciamos sesión


$conn = new Conexion();
$conn->crearConexion(); #establecemos conexión con la base de datos

$us = new Usuario(); #instanciamos objeto de la clase usuario para realizar el login con los datos que recibimos del formulario 


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $id_hotel = trim($_POST['id_hotel']);


if ($us->isValido($usuario, $password, $id_hotel)) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['id_hotel'] = $id_hotel;
    header('Location: dashboard.php'); #Si todo va bien accedemos al dashboard
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
