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

if (isset($_SESSION['username'])) {
    $usuarioRegistrado = $_SESSION['username'];
    // Ahora puedes usar $username en esta página
    echo "Hola, $usuarioRegistrado <br></br>";

} else {
    // La variable de sesión no está establecida, manejar la situación
    echo "Usuario no autenticado";
}



echo $blade
->view()
->make('dashboard_view')
->render();

