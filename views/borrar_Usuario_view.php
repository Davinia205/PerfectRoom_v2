<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<!--bootstrap mobile first-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style> 
   body {
    font-family: Verdana;
   
}
img {
           max-width:100%;
}


@media (max-width: 600px) {
    .delete-container {
        width: 100%;
        padding: 15px;
    }
}
</style>

<body>
<div class="delete-container">
<img src="../views/images/room.jpg">
<br></br>
    <b><p>Eliminar Usuario:</p></b>
    <!-- <form action="../public/inspeccion_ocupada.php" method="post"> -->
        
    <form id="delete" method="post">
    <div class="form-group">
        <input type="text" class="form-control"name="id_hotel" id= "id_hotel" placeholder="id_hotel" required>
        <br></br>
        <input type="text" class="form-control"name="usuario" id= "usuario" placeholder="Usuario" required>
        <br></br>
        <center><input type="submit" class="btn btn-info" role="button" name="enviar">  <a href="../views/dashboard_view.php" class="btn btn-info" role="button"> Volver  </a>   <a href="../view/login_view.php" class="btn btn-info" role="button"> Salir   </a> 
</a></center>
    </form>

  


