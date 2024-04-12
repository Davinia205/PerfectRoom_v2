<?php
use Clases\Usuario;

require '../vendor/autoload.php';

use Clases\Conexion;
use Philo\Blade\Blade;


session_start();


$views = '../view';
$cache = '../cache';
$blade = new Blade($views, $cache);

$conn = new Conexion();
$conn->crearConexion();

$us = new Usuario();


 function error($mensaje)
 {
     $_SESSION['error'] = $mensaje;

 }



if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if (strlen($username) == 0 || strlen($password) == 0) {
        error("Error, El nombre o la contraseña no pueden contener solo espacios en blancos.");
    }

    if ($us->isValido($username, $password)) {
        $_SESSION['username'] = $username;
        #echo $_SESSION['nombre'];
        header('Location: dashboard.php');
        die();
    } else {
        error("credenciales inválidas");
        echo $blade
            ->view()
            ->make('login_view')
            ->render();

    }
}

    echo $blade
        ->view()
        ->make('login_view')
        ->render();


        if (isset($_SESSION['error'])) {
            echo "<div class='mt-3 text-danger font-weight-bold text-lg'>";
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            echo "</div>";
        }
        
        // Cerrar la conexión a la base de datos al finalizar
$conn->cerrar($conn);
