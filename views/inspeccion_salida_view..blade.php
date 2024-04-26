
<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap 4 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<div class="inspeccion-container">
    <h2>Rellene los datos de la Inspección:</h2>
    <form action="../public/inspeccion_salida.php" method="post">
        <p>Realizada por <input type="text" name="usuario" id="usuario" required></p><br>
        <p>Número de habitación <input type="text" name="id_habitacion" id="id_habitacion" required></p><br>
        <p>Planta<input type="number" name="planta" id="planta"></p>
        <p>Check List </p>
        <li><label for="Papeleras">Papeleras</label>
        <select name="papeleras" id="papeleras">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Camas">Camas</label>
        <select name="camas" id="camas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Polvo">Polvo</label>
        <select name="polvo" id="polvo">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Suelo">Suelo</label>
        <select name="suelo" id="suelo">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Servicio">Servicio</label>
        <select name="servicio" id="servicio">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Toallas">Toallas</label>
        <select name="toallas" id="toallas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
       <li><label for="Minibar">Minibar</label>
        <select name="minibar" id="minibar">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
       </li>
        <li><label for="Amenities">Amenities</label>
        <select name="amenities" id="amenities">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        <li><label for="Olor">Olor</label>
        <select name="olor" id="olor">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Puertas">Puertas</label>
        <select name="puertas" id="puertas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Interruptores">Interruptores</label>
        <select name="interruptores" id="interruptores">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Mobiliario">Mobiliario</label>
        <select name="mobiliario" id="mobliario">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Grifería">Grifería</label>
        <select name="griferia" id="griferia">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Cortinas">Cortinas</label>
        <select name="cortinas" id="cortinas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Paredes">Paredes</label>
        <select name="paredes" id="paredes">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Objetos">Objetos</label>
        <select name="objetos" id="objetos">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        <li><label for="Telefono">Telefono</label>
        <select name="telefono" id="telefono">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <li><label for="Television">Television</label>
        <select name="television" id="television">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        </li>
        <br></br>
        </li>
        <center><input type="submit" class="btn btn-info" role="button" name="enviar_salida">   <a href="../view/dashboard_view.php" class="btn btn-info" role="button">
        Volver
    </a></center>

        </li>
    </form>
</div>

</body>
</html>