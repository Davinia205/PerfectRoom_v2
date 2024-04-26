<?php
require '../vendor/autoload.php';

include("../views/login_view.php");

use Clases\Usuario;
use Clases\Conexion;



session_start();


$conn = new Conexion();
$conn->crearConexion();

$us = new Usuario();



if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if (strlen($username) == 0 || strlen($password) == 0) {
        $_SESSION['error'] = "Error, El nombre o la contraseña no pueden contener solo espacios en blancos.";
    }

    if ($us->isValido($username, $password)) {
        $_SESSION['username'] = $username;
        #echo $_SESSION['nombre'];
        header('Location: dashboard.php');
        die();
    } else {
        $mensaje = $_SESSION['error'] ;
        $_SESSION['error'] = "Credenciales inválidas";
        header('Location: login.php?mensaje=' . urlencode($mensaje));
        exit;
        // echo $blade
        //    ->view()
        //   ->make('login_view',  compact('mensaje'))
        //     ->render();

    }
}


    // echo $blade
    //     ->view()
    //     ->make('login_view')
    //     ->render();


    //     if (isset($_SESSION['error'])) {
    //         echo "<div class='mt-3 text-danger font-weight-bold text-lg'>";
    //         echo $_SESSION['error'];
    //         unset($_SESSION['error']);
    //         echo "</div>";
    //     }
        
        // Cerrar la conexión a la base de datos al finalizar
$conn->cerrar($conn);
