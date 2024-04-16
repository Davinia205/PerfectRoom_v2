
<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap 4 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <h1>Detalles de la Inspección</h1>
<form action="inspeccion.php" method="post">
    <li>Realizada por: <input type="text" name="nombre" required></li><br>
    <li>Número de habitación: <input type="number" name="num_hab" required></li><br>
    <li>Planta:<input type="number" name="num_hab"></li>
    
    <li>Check List: </li>
    <input type="checkbox" name="check1">sumar
    <li>Enviar<input type="submit" value="Enviar"></li>
</form>
</body>
</html>