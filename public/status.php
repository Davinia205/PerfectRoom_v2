<?php
#   ESTA PAGINA NO ESTA TERMINADA
require '../vendor/autoload.php';
use Clases\Usuario;
use Clases\Status;

session_start();

$username = $_SESSION['username'];
$id_hotel = $_SESSION['id_hotel'];
$usu = new Usuario();
if ($usu->TipoUsuario($username)) {
    echo "Acceso Denegado";
} else {

echo "<p><center>Bienvenido/a ".$_SESSION['username']."</center></p>";

include ("../views/status_view.php");

$status_1 = new Status();
$cantidadHabitaciones = $status_1-> totalHabitaciones($id_hotel);

}

if ($cantidadHabitaciones !== false){
    // Mostrar los resultados en una tabla HTML
    echo "<table class='' id='table' align='center'>";
    echo "<thead>";
    echo "<tr class='text-left'>";
    echo "<th scope='col'>Total Habitaciones: " . $cantidadHabitaciones . "</th>";
    echo "<tr scope='col'>Total Habitaciones: " . $cantidadHabitaciones . "</tr>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    // Iterar sobre las habitaciones y mostrar cada una en la tabla

        // echo "<tr>";
        // echo "<p>Total de habitaciones: " . $cantidadHabitaciones . "</p>";
        // echo "</tr>";
    
    
    echo "</tbody>";
    echo "</table>";
}else {
    echo "No se encontraron datos de habitaciones para el hotel.";
}
?>

<!-- <html>

<body>
    <table class='table table-dark' id='table' align='center'>
        <thead>
            <tr>
            <tr class='text-left'>
                <th scope='col'>Total Habitaciones</th>
              
            </tr>
            <?php
            #bucle foreach para recuperar los jugadores de la base de datos
            foreach ($cantidadHabitaciones as $item) {
                echo '<tr>';
                echo '<td>' . $item->totalHabitaciones . '</td>';
            }
            echo '</tr>';
            ?>
        </thead>
    </table>
</body>

</html>
 -->
