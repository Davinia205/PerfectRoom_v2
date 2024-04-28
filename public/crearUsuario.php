<?php
require '../vendor/autoload.php';
use Clases\Usuario;


session_start();

echo "<p><center>Bienvenido/a ".$_SESSION['username']."</center></p>";
include ("../views/crear_usuario_view.php");


if (!isset($_SESSION['username'])) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #recogemos los datos del formulario, trimamos las cadenas
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $id_empleado = trim($_POST['id_empleado']);
    $tipo = trim($_POST['tipo']);
    $cargo = trim($_POST['cargo']);
    $id_hotel= trim($_POST['id_hotel']);


    $usu = new Usuario();

    $usu->setusername($username);
    $usu->setpassword($password);
    $usu->setNombre($nombre);
    $usu->setApellidos($apellidos);
    $usu->setId_empleado($id_empleado);
    $usu->settipo($tipo);
    $usu->setcargo($cargo);
    $usu->setId_hotel($id_hotel);


    if ($usu->existeUsuario($username) && $usu-> existeHotel($id_empleado) && $usu-> existeIdEmpleado($id_empleado))
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



