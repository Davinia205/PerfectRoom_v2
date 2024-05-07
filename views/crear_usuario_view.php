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
           max-width:100%;
}


@media (max-width: 600px) {
    .usuario-container {
        width: 100%;
        padding: 15px;
    }
}
</style>
    </head>
    <body>
    <div class="usuario-container">
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="d-flex justify-content-center">
</div>
<p><b>Complete la siguiente información:<b></p>

<form id="login" method="post" onsubmit="return validateUser()">
            <input type="text" class="form-control"name="id_hotel" id= "id_hotel" placeholder="ID Hotel" required>
            <br></br>
            <input type="text" class="form-control"name="usuario" id= "usuario" placeholder="Usuario" required>
            <br></br>
            <input type="password" class="form-control"name="password" id="password" placeholder="Contraseña" required>
            <br></br>
            <input type="text" class="form-control"name="nombre" id="nombre" placeholder="Nombre" required>
            <br></br>
            <input type="text"class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required>
            <br></br>
            <select name="tipo"class="form-control" id="tipo">
            <option value="" disabled selected class="form-control">Tipo</option>
            <option value="Administrador">Administrador</option>
            <option value="Usuario Limpieza">Usuario Limpieza</option>
        </select>
            <br></br>
            <input type="text" class="form-control"name="cargo" id="cargo" placeholder="Cargo" required>
            <br></br>
            <center><input type="submit" class="btn btn-info" role="button" name="enviar">  <a href="../views/dashboard_view.php" class="btn btn-info" role="button"> Volver  </a>   <a href="../views/login_view.php" class="btn btn-info" role="button"> Salir   </a> 
    </a></center>
        </form>
        <div id="errorMessage" style="color: red; display: none;"></div>
    </div>
    </div>
    <script>
function validateUser() {
    var usuario = document.getElementById('usuario').value;
    var password = document.getElementById('password').value;

    // Validación básica del lado del cliente
    if (usuario.trim() === '' || password.trim() === '') {
        document.getElementById('errorMessage').textContent = 'Por favor, introduce un nombre de usuario y una contraseña.';
        document.getElementById('errorMessage').style.display = 'block';

    return true; // Envía el formulario si la validación del cliente pasa
}
}
</script>

</body>
</head>