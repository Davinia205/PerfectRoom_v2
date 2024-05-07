<?php
require '../vendor/autoload.php';
use Clases\Inspeccion_ocupada;
use Clases\Inspeccion_salida;


session_start();
echo "<br></br>";
echo "<p><center>Bienvenido/a ".$_SESSION['usuario']."</center></p>";


include ("../views/statusUpdate_view.php"); #incluimos la vista que permite actualizar al usuario el estado de las habitaciones para que se reflejen en el report de situación (status.php)
if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id_habitacion = trim($_POST['id_habitacion']);
    $ocupada= trim($_POST['ocupada']);
    $salida= trim($_POST['salida']);
    // echo $id_habitacion;
    // echo $ocupada;
    // echo $salida;
  

    $situacionOcupada = new Inspeccion_ocupada(); #actualizamos el estado ocupada
    $situacionSalida = new Inspeccion_salida();#actualizamos el estado salida

   

    $situacionOcupada -> updateOcupada($id_habitacion, $ocupada);#actualizamos el estado ocupada
    $situacionSalida -> updateSalida($id_habitacion, $salida);#actualizamos el estado salida

    
}