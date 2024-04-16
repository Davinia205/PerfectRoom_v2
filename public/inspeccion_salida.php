<?php
use Clases\Usuario;

require '../vendor/autoload.php';

use Clases\Conexion;
use Philo\Blade\Blade;


session_start();


$views = '../view';
$cache = '../cache';
$blade = new Blade($views, $cache);

function error($mensaje)
 {
     $_SESSION['error'] = $mensaje;

 }

 $_SESSION['username'] = $username;

 
