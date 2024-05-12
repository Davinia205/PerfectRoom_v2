

<?php
require '../vendor/autoload.php';
use Clases\Usuario;
use Clases\Status;

session_start();

$usuario = $_SESSION['usuario'];
$id_hotel = $_SESSION['id_hotel'];
$usu = new Usuario();
if ($usu->tipoUsuario($usuario)){
    
    // var_dump($resultado);


    echo "<body>
    <p><b><a href='../views/dashboard_view.php' class='link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover'>Volver </a></center></b></p>
    <p><center>Bienvenido/a ".$_SESSION['usuario']."</center></p>
    <p><center>del hotel ".$_SESSION['id_hotel']."</center></p>";
    
    include("../views/status_view.php");
    
    $status_1 = new Status();
    $cantidadHabitaciones = $status_1-> totalHabitaciones($id_hotel);
    $cantidadHabitacionesok= $status_1->habitacionesok($id_hotel);
    $cantidadHabitacionesNoOk= $status_1->habitacionesNook($id_hotel);
    $cantidadHabitacionesSalidaOk = $status_1->habitacionesSalidaOk($id_hotel);
    $cantidadHabitacionesSalidaNoOk = $status_1->habitacionesSalidaNoOk($id_hotel);
    $cantidadHabitacionesOcupadaNoOk = $status_1->habitacionesOcupadaNoOk($id_hotel);
    $cantidadHabitacionesOcupadaOk = $status_1->habitacionesOcupadaOk($id_hotel);
    echo "<br></br>";
    echo "<h5><b>Informe de Situación:</b></h5>";
    if ($cantidadHabitaciones !== false){
        // Mostrar los resultados en una tabla HTML
        echo "<div class='status-container'>";
    
        echo "<table class='table' id='table' align='center'>";
        echo "<thead>";
        echo "<tr class='text-left'>";
        echo "<th scope='col'>Total Habitaciones: " . $cantidadHabitaciones . "</th>";
    }
        if ($cantidadHabitacionesok !== false){
            echo "<tr>";
        echo "<th scope='col'> Total Habitaciones revisadas: " . $cantidadHabitacionesok . "</th>";
        echo "</tr>";
        }
        if ($cantidadHabitacionesNoOk !== false){
            echo "<tr>";
        echo "<th scope='col'>Total Habitaciones sin revisar: " . $cantidadHabitacionesNoOk . "</th>";
        echo "</tr>";
        }
        if ($cantidadHabitacionesSalidaNoOk !== false){
            echo "<tr>";
            echo "<th scope='col'>Total Habitaciones salida sin revisar: " . $cantidadHabitacionesSalidaNoOk . "</th>";
            echo "</tr>";
        }
        if ($cantidadHabitacionesSalidaOk !== false){
            echo "<tr>";
            echo "<th scope='col'>Total Habitaciones salida revisadas: " . $cantidadHabitacionesSalidaOk . "</th>";
            echo "</tr>";
        }
        if ($cantidadHabitacionesOcupadaNoOk !== false){
            echo "<tr>";
            echo "<th scope='col'>Total Habitaciones ocupadas sin revisar: " . $cantidadHabitacionesOcupadaNoOk . "</th>";
            echo "</tr>";
        }
        if ($cantidadHabitacionesOcupadaOk !== false){
            echo "<tr>";
            echo "<th scope='col'>Total Habitaciones ocupadas revisadas: " . $cantidadHabitacionesOcupadaOk . "</th>";
            echo "</tr>";
           
        }    
       
       
    
    else {
        echo "No se encontraron datos de habitaciones para el hotel.";
    }
    
 } else {

   echo "Acceso Denegado";
    // echo var_dump($resultado);
   
    header('Location: dashboard.php');

 }



