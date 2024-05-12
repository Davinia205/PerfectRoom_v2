<?php

require '../vendor/autoload.php';

use Clases\Usuario;

use Clases\Inspeccion_salida;

use Clases\Hotel;

use Clases\Status;

session_start();

echo "<p><center>Bienvenido/a ".$_SESSION['usuario']."</center></p>";

include ("../views/inspeccion_salida_view.php"); #incluimos la vista que contiene el formulario para que el usuario realice un chequeo de salida.


if (!isset($_SESSION['usuario'] )) {
    // Redirigir a la página de login
    header("Location: login.php");
    exit; // Asegurarse de que el script se detenga después de redirigir
}

 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    #recogemos los datos del formulario, trimamos las cadenas

    $id_hotel = trim($_POST['id_hotel']);
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
    $telefono = trim($_POST['telefono']);
    $television = trim($_POST['television']);
    $fecha = date('d/m/Y');

    #utilizado para pruebas
    // print($olor);
    // print($cortinas);

    $inspeccion_salida = new Inspeccion_salida();  

    $inspeccion_salida->setId_hotel($id_hotel);
    $inspeccion_salida->setid_habitacion($id_habitacion);
    $inspeccion_salida-> setpuertas($puertas);
    $inspeccion_salida->setinterruptores($interruptores);
    $inspeccion_salida->setmobiliario($mobiliario);
    $inspeccion_salida->setgriferia($griferia);
    $inspeccion_salida->setcortinas($cortinas);
    $inspeccion_salida->setparedes($paredes);
    $inspeccion_salida->setObjetos($objetos);
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
    $inspeccion_salida->setTelevision($television);
    $inspeccion_salida->setTelefono($telefono);
    $inspeccion_salida->setFecha($fecha);
    $planta = trim($_POST['planta']);
  
    $usu = new Usuario();
    $hot = new Hotel();
    $status_1 = new Status();

    if ($usu->existeUsuario($usuario, $id_hotel ) && $hot-> existeHabitacion($id_hotel, $id_habitacion, $planta ) && $status_1-> estadoOcupada($id_hotel, $id_habitacion) ) {
        
    

        $inspeccion_salida-> insertar_inspeccion_salida(); #insertamos inspección de salida si el usuario existe en la base de datos
        $inspeccion_salida-> updateHabitaciones($id_habitacion, $id_hotel); #actualizamos estado de la habitación

        echo '<script>
        document.getElementById("confirmMessage").textContent = "Inspección realizada correctamente";
        document.getElementById("confirmMessage").style.display = "block";
      </script>';
         
        } else {
            #mostramos mensaje de error
        
            echo '<script>
                        document.getElementById("errorMessage").textContent = "Datos introducidos incorrectos. Por favor, intenta de nuevo.";
                        document.getElementById("errorMessage").style.display = "block";
                      </script>';
         
        
        }

      
}
