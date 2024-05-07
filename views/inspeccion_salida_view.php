
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
   
}
img {
           max-width:100%;
}

.enviar a  {

border: none;
border-radius: 4px;
background-color: #0DCAF0;
color: #fff;
font-size: 16px;
cursor: pointer;
}

.btn {
border: none;
border-radius: 4px;
background-color: #0DCAF0;
color: #fff;
font-size: 16px;
cursor: pointer;
}


@media (max-width: 600px) {
    .inspeccion-container {
        width: 100%;
        padding: 15px;
    }
}
</style>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="inspeccion-container">
<img src="../views/images/room.jpg">
<br></br>
    <b><p>Rellene los datos de la Inspección:</p></b>
    <form id="login" method="post" onsubmit="return validateUser()">
    <div class="form-group">
        <p>Realizada por(introduzca usuario) <input type="text" class="form-control" name="usuario" id="usuario" required></p><br>
        <p>Código de Hotel <input type="text" class="form-control" name="id_hotel" id="id_hotel" required></p><br>
        <p>Número de habitación <input type="text" class="form-control" name="id_habitacion" id="id_habitacion" required></p><br>
        <p>Planta<input type="number"  class="form-control" name="planta" id="planta"></p>
        <p>Check List </p>
            <label for="Papeleras">Papeleras</label>
        <select name="papeleras" class="form-control" id="papeleras">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Camas">Camas</label>
        <select name="camas" class="form-control" id="camas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Polvo">Polvo</label>
        <select name="polvo" class="form-control" id="polvo">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Suelo">Suelo</label>
        <select name="suelo" class="form-control" id="suelo">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Servicio">Servicio</label>
        <select name="servicio" class="form-control" id="servicio">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Toallas">Toallas</label>
        <select name="toallas" class="form-control" id="toallas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
           <label for="Minibar">Minibar</label>
        <select name="minibar" class="form-control" id="minibar">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
          
            <label for="Amenities">Amenities</label>
        <select name="amenities" class="form-control" id="amenities">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
            <label for="Olor">Olor</label>
        <select name="olor" class="form-control" id="olor">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Puertas">Puertas</label>
        <select name="puertas" class="form-control" id="puertas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Interruptores">Interruptores</label>
        <select name="interruptores" class="form-control" id="interruptores">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Mobiliario">Mobiliario</label>
        <select name="mobiliario" class="form-control" id="mobliario">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Grifería">Grifería</label>
        <select name="griferia" class="form-control" id="griferia">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Cortinas">Cortinas</label>
        <select name="cortinas"class="form-control" id="cortinas">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Paredes">Paredes</label>
        <select name="paredes" class="form-control" id="paredes">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Objetos">Objetos</label>
        <select name="objetos" class="form-control" id="objetos">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
            <label for="Telefono">Telefono</label>
        <select name="telefono" class="form-control" id="telefono">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
           
            <label for="Television">Television</label>
        <select name="television" class="form-control" id="television">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
        </select>
        <br></br>
        <div class="enviar">
        <center><input type="submit" class="btn" role="button" name="enviar">  <a href="../views/dashboard_view.php" class="btn btn-info" role="button"> Volver  </a>   <a href="../view/login_view.php" class="btn btn-info" role="button"> Salir   </a> 
    </a></center>
        </div>
    </div>
    </form>
    <div id="errorMessage" style="color: red; display: none;"></div>
    </div>
</div>
</body>
<script>
function validateUser() {
    var username = document.getElementById('usuario').value;
   

    // Validación básica del lado del cliente
    if (usuario.trim() === '') {
        document.getElementById('errorMessage').textContent = 'Por favor, introduce un nombre de usuario';
        document.getElementById('errorMessage').style.display = 'block';
        return false;
    }

    return true; // Envía el formulario si la validación del cliente pasa
}
</script>
</body>
</html>