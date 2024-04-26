<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap 4 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="usuario-container">
    <body>
    <div class="d-flex justify-content-center">
</div>
<h1>Rellene los campos:</h1>

        <form method="POST">
        <input type="hidden" name="action" value="crear">
            <input type="text" name="username" id= "username" placeholder="Usuario" required>
            <br></br>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <br></br>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            <br></br>
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>
            <br></br>
            <input type="text" name="id_empleado" id="id_empleado" placeholder="ID Empleado" required>
            <br></br>
            <input type="text" name="tipo" id="tipo" placeholder="Tipo" required>
            <br></br>
            <input type="text" name="cargo" id="cargo" placeholder="Cargo" required>
            <br></br>
            <button type="submit" class="btn btn-info" role="button">Crear</button>

        </form>
    </div>
</body>
</head>