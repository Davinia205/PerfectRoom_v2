<?php
require '../vendor/autoload.php';
use Clases\Inspeccion_ocupada;


use Philo\Blade\Blade;


session_start();


$views = '../view';
$cache = '../cache';
$blade = new Blade($views, $cache);

function error($mensaje)
 {
     $_SESSION['error'] = $mensaje;

 }

 echo $_SESSION['username'];


 echo $blade
->view()
->make('inspeccion_ocupada_view')
->render();


if (isset($_POST['Enviar'])) {
    #recogemos los datos del formulario, trimamos las cadenas
    $usuario = trim($_POST['usuario']);
    $id_habitacion = trim($_POST['id_habitacion']);
    $ropa_sucia= trim($_POST['ropa_sucia']);
    $papeleras= trim($_POST['papeleras']);
    $camas = trim($_POST['camas']);
    $polvo = trim($_POST['polvo']);
    $suelo = trim($_POST['suelo']);
    $baño= trim($_POST['baño']);
    $toallas = trim($_POST['toallas']);
    $minibar = trim($_POST['minibar']);
    $amenities = trim($_POST['amenities']);
    $olor = trim($_POST['olor']);



    print($ropa_sucia);
    print($id_habitacion);
    print ($usuario);
    print($papeleras);
    print($camas);
    print($polvo);
    print($suelo);
    print($baño);
    print($toallas);
    print($minibar);
    print($amenities);
    print($olor);
    
    $inspeccion_ocupada = new Inspeccion_ocupada();
    $inspeccion_ocupada-> insertar_inspeccion_ocupada();
    

    
    }
