<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap 4 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style> 
   body {
    font-family: Verdana;
}
img {
           max-width:25%;
}

.dashboard-container a {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #0DCAF0;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

@media (max-width: 600px) {
    .dashboard-container {
        width: 100%;
        padding: 15px;
    }
}
</style>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="dashboard-container">
    <b><p>Seleccione una opción:</p></b>
    <br></br>
    <a href="../public/inspeccion_ocupada.php" class="btn btn-info" role="button" > Nueva Inspeccion habitación ocupada </a>
    <br></br>
    <br></br>
    <a href="../public/inspeccion_salida.php" class="btn btn-info" role="button">  Nueva Inspeccion habitación salida</a>
    <br></br>
    <br></br>
    <a href="../public/status.php" class="btn btn-info" role="button"> Estado Habitaciones</a>
    <br></br>
    <br></br>
    <a href="../public/statusUpdate.php" class="btn btn-info" role="button"> Actualizar Estado Habitaciones</a>
    <br></br>
    <br></br>
    <a href="../public/crearUsuario.php" class="btn btn-info" role="button"> Crear Usuario</a>
    <br></br>
    <br></br>
    <a href="../public/index.html" class="btn btn-info" role="button">  Salir</a>
    <br></br>
    <center><img src="../views/images/clic.png"></center>

</div>
</body>

</html>