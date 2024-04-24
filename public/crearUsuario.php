<?php
require '../vendor/autoload.php';
use Clases\Usuario;


use Philo\Blade\Blade;



session_start();

echo "<p>Bienvenido/a</p>" . $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}


$views = '../view';
$cache = '../cache';
$blade = new Blade($views, $cache);


echo $blade
    ->view()
    ->make('crear_usuario_view')
    ->render();



if (isset($_POST['action']) && $_POST['action'] === 'crear') {
    #recogemos los datos del formulario, trimamos las cadenas
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $id_empleado = trim($_POST['id_empleado']);
    $tipo = trim($_POST['tipo']);
    $cargo = trim($_POST['cargo']);


    $usu = new Usuario();
    
    $usu->setusername($username);
    $usu->setpassword($password);
    $usu->setNombre($nombre);
    $usu->setApellidos($apellidos);
    $usu->setId_empleado($id_empleado);
    $usu->settipo($tipo);
    $usu->setcargo($cargo);

}
 
    $resultado = $usu->existeUsuario($username);
    #var_dump($resultado);

    if ($resultado){
        echo "El usuario ya existe";
    }
    else{
    $usu->crearUsuario();
    echo "Usuario creado correctamente";
    }



