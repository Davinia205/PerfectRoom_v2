<?php
require '../vendor/autoload.php';
use Clases\Inspeccion_ocupada;
use Clases\Usuario;
use Clases\Hotel;
use Clases\Status;


session_start();
echo "<br></br>";
echo "<p><center>Bienvenido/a ".$_SESSION['usuario']."</center></p>
<p><center>del hotel ".$_SESSION['id_hotel']."</center></p>";


include ("../views/inspeccion_ocupada_view.php");
if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}



if ($_SERVER["REQUEST_METHOD"] == "POST"){

    #recogemos los datos del formulario, trimamos las cadenas
    $id_hotel = trim($_POST['id_hotel']);
    $id_habitacion = trim($_POST['id_habitacion']);
    $ropa_sucia= trim($_POST['ropa_sucia']);
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
    $fecha = date('d/m/Y');
    $planta = trim($_POST['planta']);
    #echo $fecha;

    $inspeccion_ocupada = new Inspeccion_ocupada();  
 
    $inspeccion_ocupada->setId_hotel($id_hotel);
    $inspeccion_ocupada->setid_habitacion($id_habitacion);
    $inspeccion_ocupada-> setminibar($minibar);
    $inspeccion_ocupada->setpolvo($polvo);
    $inspeccion_ocupada->setsuelo($suelo);
    $inspeccion_ocupada->settoallas($toallas);
    $inspeccion_ocupada->setcamas($camas);
    $inspeccion_ocupada->setusuario($usuario);
    $inspeccion_ocupada->setolor($olor);
    $inspeccion_ocupada->setpapeleras($papeleras);
    $inspeccion_ocupada->setservicio($servicio);
    $inspeccion_ocupada->setamenities($amenities);
    $inspeccion_ocupada-> setropa_sucia($ropa_sucia); 
    $inspeccion_ocupada-> setFecha($fecha);

    #utilizado para pruebas
    // print($ropa_sucia);
    // print($id_habitacion);
    // print ($usuario);
    // print($papeleras);
    // print($camas);
    // print($polvo);
    // print($suelo);
    // print($servicio);
    // print($toallas);
    // print($minibar);
    // print($amenities);
    // print($olor);
    
    $usu = new Usuario();
    $hot = new Hotel();
    $status_1 = new Status();
    if ($usu->existeUsuario($usuario, $id_hotel) && $hot-> existeHabitacion($id_hotel, $id_habitacion, $planta) && $status_1-> estadoOcupada($id_hotel, $id_habitacion)  ) { #si el usuario que va a realizar la inspección existe en la base de datos se realiza el chequeo
        
    
    $inspeccion_ocupada-> insertar_inspeccion_ocupada();
    

  echo '<script>
  document.getElementById("confirmMessage").textContent = "Inspección realizada correctamente";
  document.getElementById("confirmMessage").style.display = "block";
</script>';

    $inspeccion_ocupada-> updateHabitaciones($id_habitacion, $id_hotel); #actualizamos el estado de la habitación
     
    } else {
         #mostramos mensaje de error
    
        echo '<script>
                    document.getElementById("errorMessage").textContent = "Datos introducidos incorrectos. Por favor, intenta de nuevo.";
                    document.getElementById("errorMessage").style.display = "block";
                  </script>';
     
    
    }

    

    
    }
