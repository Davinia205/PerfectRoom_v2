<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
   <style> 
 body {
    font-family: Verdana;
    margin: 0;
    padding: 0;

}
.status.container {
    font-family: Verdana;
}


.btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #0DCAF0;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
} 


/* Media query para ajustar el diseño en pantallas más pequeñas */
@media (max-width: 600px) {
    body {
        flex: 0 0 100%; /* Cada elemento ocupa el 100% del ancho en pantallas pequeñas */
    }
}


</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </a>
<h5><b>Consulta Estado Habitación</b></h5>

<div class="form-group">
    <form id="buscarRegistroForm">
        <label for="registroId">Código de Hotel:</label>
        <input type="text" class="form-control" id="id_hotel" name="id_hotel">
        <label for="registroId">Número de habitación:</label>
        <input type="text" class="form-control"id="id_habitacion" name="id_habitacion">
        <label for="registroId">Número de habitación:</label>
        <input type="text" class="form-control"id="planta" name="planta">
        <button type="submit"class="btn">Buscar</button>
</form>
</div>
    <div id="resultadoRegistro">
        <!-- Aquí se mostrará el resultado recuperado de la base de datos -->
    </div>

    <script>
        $(document).ready(function() {
            $('#buscarRegistroForm').submit(function(event) {
                event.preventDefault(); // Evitar el envío del formulario por defecto
                
                var id_hotel = $('#id_hotel').val();
                var id_habitacion = $('#id_habitacion').val();
                var planta = $('#planta').val();
                $.ajax({
                    url: 'status_habitacion.php',
                    type: 'GET',
                    data: { id_hotel: id_hotel,
                        id_habitacion: id_habitacion,
                        planta: planta
                     },
                    success: function(response) {
                        $('#resultadoRegistro').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

    