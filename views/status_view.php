<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap 4 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <style> 
 body {
    font-family: Verdana;
    margin: 0;
    padding: 0;
    background-color: #59d8ff;
}
.status.container {
    font-family: Verdana;
}


/* Media query para ajustar el diseño en pantallas más pequeñas */
@media (max-width: 600px) {
    .list li {
        flex: 0 0 100%; /* Cada elemento ocupa el 100% del ancho en pantallas pequeñas */
    }
}


</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h5><b>Consulta Estado Habitación</b></h5>
<div class="form-group">
    <form id="buscarRegistroForm">
        <b><label for="registroId">Código de Hotel:</label>
        <input type="text" class="form-control" id="id_hotel" name="id_hotel">
        <label for="registroId">Número de habitación:</label>
        <input type="text" class="form-control"id="id_habitacion" name="id_habitacion">
        <button type="submit"class="btn btn-primary">Buscar</button>
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

                $.ajax({
                    url: 'status_habitacion.php',
                    type: 'GET',
                    data: { id_hotel: id_hotel,
                        id_habitacion: id_habitacion
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