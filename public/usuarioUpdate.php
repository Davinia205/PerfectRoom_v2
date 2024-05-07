<?php
require '../vendor/autoload.php';
use Clases\Usuario;


session_start();
echo "<br></br>";
echo "<p><center>Bienvenido/a ".$_SESSION['usuario']."</center></p>";


include ("../views/usuarioUpdate_view"); #incluimos la vista que permite actualizar al usuario el estado de las habitaciones para que se reflejen en el report de situación (status.php)
if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = trim($_POST['usuario']);
    // $nuevo_cargo= trim($_POST['cargo']);
    // $nuevo_tipo= trim($_POST['tipo']);
    // $nuevo_apellidos= trim($_POST['apellidos']);
    $nuevo_nombre= trim($_POST['nombre']);
    $id_hotel= trim($_POST['id_hotel']);

   echo $usuario;
//    echo $nuevo_cargo;
//    echo $nuevo_tipo;
//    echo $nuevo_apellidos;
   echo $nuevo_nombre;
   echo $id_hotel;
    $statusUpdate = new Usuario(); #actualizamos el estado ocupada   

    $statusUpdate -> updateUsuario($id_hotel, $usuario, $nuevo_nombre);
    // $nuevo_apellidos, $nuevo_tipo, $nuevo_cargo);#actualizamos los datos del usuario

    
}