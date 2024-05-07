<?php
require '../vendor/autoload.php';
use Clases\Usuario;


session_start();

echo "<p><center>Bienvenido/a ".$_SESSION['usuario']."</center></p>";
include ("../views/crear_usuario_view.php"); #incluimos la vista para que el usuario tpipo administrador pueda crear nuevos usuarios


if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #recogemos los datos del formulario, trimamos las cadenas
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $tipo = trim($_POST['tipo']);
    $cargo = trim($_POST['cargo']);
    $id_hotel= trim($_POST['id_hotel']);


    $usu = new Usuario();

    $usu->setusuario($usuario);
    $usu->setpassword($password);
    $usu->setNombre($nombre);
    $usu->setApellidos($apellidos);
    $usu->settipo($tipo);
    $usu->setcargo($cargo);
    $usu->setId_hotel($id_hotel);

     #condiciones para poder crear un usuario nuevo
     if ($usu->existeUsuario($usuario, $id_hotel)
    && 
   ($usu-> existeHotel($id_hotel)))
    #var_dump($resultado);
     {
        $usu->crearUsuario();
        echo "Usuario creado correctamente";
       } else{
       
         echo '<script>
                 document.getElementById("errorMessage").textContent = "Revise los datos introducidos";
                 document.getElementById("errorMessage").style.display = "block";
               </script>';
     }
}





