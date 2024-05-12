<?php
require '../vendor/autoload.php';
use Clases\Inspeccion_ocupada;
use Clases\Inspeccion_salida;
use Clases\Hotel;


session_start();
echo "<br></br>";
echo "<p><center>Bienvenido/a ".$_SESSION['usuario']."</center></p>
<p><center>del hotel ".$_SESSION['id_hotel']."</center></p>";


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
    $id_hotel = $_SESSION['id_hotel'];
    $planta = trim($_POST['planta']);
    // echo $id_habitacion;
    // echo $ocupada;
    // echo $salida;
  
    $hot = new Hotel();
    $situacionOcupada = new Inspeccion_ocupada(); #actualizamos el estado ocupada
    $situacionSalida = new Inspeccion_salida();#actualizamos el estado salida
    
   
    if ($hot-> existeHabitacion($id_hotel, $id_habitacion, $planta) ){

    
  echo '<script>
  document.getElementById("confirmMessage").textContent = "Actualización realizada correctamente";
  document.getElementById("confirmMessage").style.display = "block";
</script>';

    $situacionOcupada -> updateOcupada($id_habitacion, $ocupada);#actualizamos el estado ocupada
    $situacionSalida -> updateSalida($id_habitacion, $salida);#actualizamos el estado salida
    
    
}
else{

    echo '<script>
    document.getElementById("errorMessage").textContent = "Datos introducidos incorrectos. Por favor, intenta de nuevo.";
    document.getElementById("errorMessage").style.display = "block";
  </script>';

}


}
