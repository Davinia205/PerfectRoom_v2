<?php
require '../vendor/autoload.php';
use Clases\Usuario;


session_start();

echo "<p><center>Bienvenido/a " . $_SESSION['usuario'] . "</center></p>";
include ("../views/borrar_usuario_view.php"); #incluimos la vista para que el usuario tpipo administrador pueda crear nuevos usuarios


if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #recogemos los datos del formulario, trimamos las cadenas
    $usuario = trim($_POST['usuario']);
    $id_hotel = trim($_POST['id_hotel']);


    $usu = new Usuario();

    $usu->borrarUsuario($usuario, $id_hotel);
    echo "Usuario eliminado correctamente";


    echo '<script>
                 document.getElementById("errorMessage").textContent = "Revise los datos introducidos";
                 document.getElementById("errorMessage").style.display = "block";
               </script>';
}