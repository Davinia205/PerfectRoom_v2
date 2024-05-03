<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<!--bootstrap mobile first-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style> 
   body {
    font-family: Arial, sans-serif;
   
}
img {
           max-width:100%;
}


@media (max-width: 600px) {
    .update-container {
        width: 100%;
        padding: 15px;
    }
}
</style>

<body>
<div class="update-container">
<img src="../views/images/room.jpg">
<br></br>
    <b><p>Actualización de estado de habitaciones:</p></b>
    <!-- <form action="../public/inspeccion_ocupada.php" method="post"> -->
        
    <form id="login" method="post">
    <div class="form-group">
        <p>Número de habitación <input type="text" class="form-control" name="id_habitacion" id="id_habitacion" required></p><br>
        <label for="Ocupada">Ocupada</label>
        <select name="ocupada" class="form-control" id="ocupada" required>
            <option value="sí">Sí</option>
            <option value="no">No</option>
        </select>
        <label for="Salida">Salida</label>
        <select name="salida" class="form-control" id="salida" required>
            <option value="sí">Sí</option>
            <option value="no">No</option>
        </select>
        <br></br>
        <center><input type="submit" class="btn btn-info" role="button" name="enviar"> <a href="../views/dashboard_view.php" class="btn btn-info" role="button"> Volver  </a>   <a href="../view/login_view.php" class="btn btn-info" role="button"> Salir   </a> 
    </a></center>