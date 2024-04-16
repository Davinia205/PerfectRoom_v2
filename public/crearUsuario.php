<?php
require '../vendor/autoload.php';
use Clases\Usuario;


use Philo\Blade\Blade;


session_start();

$usu = new Usuario();

$usu -> crearUsuario("1", "cvmt000", "secreto2", "gobernanta" );