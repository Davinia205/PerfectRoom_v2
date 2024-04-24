<?php
use Clases\Usuario;

require '../vendor/autoload.php';

use Clases\Conexion;
use Clases\Inspeccion_salida;
use Philo\Blade\Blade;


session_start();

echo "<p>Bienvenido/a</p>".$_SESSION['username'];

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
->make('inspeccion_salida_view')
->render();

 
if (isset($_POST['enviar_salida'])) {
    #recogemos los datos del formulario, trimamos las cadenas
    $id_habitacion = trim($_POST['id_habitacion']);
    $puertas= trim($_POST['puertas']);
    $interruptores= trim($_POST['interruptores']);
    $mobiliario = trim($_POST['mobiliario']);
    $griferia = trim($_POST['griferia']);
    $cortinas = trim($_POST['cortinas']);
    $paredes = trim($_POST['paredes']);
    $objetos = trim($_POST['objetos']);
    $papeleras= trim($_POST['papeleras']);
    $camas = trim($_POST['camas']);
    $polvo = trim($_POST['polvo']);
    $suelo = trim($_POST['suelo']);
    $servicio= trim($_POST['servicio']);
    $toallas = trim($_POST['toallas']);
    $minibar = trim($_POST['minibar']);
    $amenities = trim($_POST['amenities']);
    $olor = trim($_POST['olor']);
    $usuario = trim($_POST['usuario']);
  
    #utilizado para pruebas
    // print($olor);
    // print($cortinas);

    $inspeccion_salida = new Inspeccion_salida();  

    $inspeccion_salida->setid_habitacion($id_habitacion);
    $inspeccion_salida-> setpuertas($puertas);
    $inspeccion_salida->setinterruptores($interruptores);
    $inspeccion_salida->setmobiliario($mobiliario);
    $inspeccion_salida->setgriferia($griferia);
    $inspeccion_salida->setcortinas($cortinas);
    $inspeccion_salida->setparedes($paredes);
    $inspeccion_salida->setObjectos($objetos);
    $inspeccion_salida->setpapeleras($papeleras);
    $inspeccion_salida->setcamas($camas);
    $inspeccion_salida->setpolvo($polvo);
    $inspeccion_salida->setsuelo($suelo);
    $inspeccion_salida->setservicio($servicio);
    $inspeccion_salida->settoallas($toallas);
    $inspeccion_salida->setminibar($minibar);
    $inspeccion_salida->setamenities($amenities);
    $inspeccion_salida->setolor($olor);
    $inspeccion_salida->setusuario($usuario);
  


    $inspeccion_salida-> insertar_inspeccion_salida();
}