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
    font-family: Arial, sans-serif;

   
}
img {
           max-width:25%;
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
    <div class="dashboard-container">
    <b><p>Seleccione una opción:</p></b>
    <br></br>
    <a href="../public/inspeccion_ocupada.php" class="fcc-btn" > Nueva Inspeccion habitación ocupada </a>
    <br></br>
    <br></br>
    <a href="../public/inspeccion_salida.php" class="fcc-btn">  Nueva Inspeccion habitación salida</a>
    <br></br>
    <br></br>
    <a href="../public/status.php"class=class="fcc-btn" > Estado Habitaciones</a>
    <br></br>
    <br></br>
    <a href="../public/statusUpdate.php"class=class="fcc-btn" > Actualizar Estado Habitaciones</a>
    <br></br>
    <br></br>
    <a href="../public/crearUsuario.php"class="fcc-btn"> Crear Usuario</a>
    <br></br>
    <br></br>
    <a href="../public/index.html"class="fcc-btn">  Salir</a>
    <br></br>
    <center><img src="../views/images/clic.png"></center>

</div>
</body>

</html>