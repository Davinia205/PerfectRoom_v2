<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <h1>Detalles de la Inspección</h1>
    <form action="../public/inspeccion_ocupada.php" method="post">
        <li>Realizada por: <input type="text" name="usuario" id="usuario" required></li><br>
        <li>Número de habitación: <input type="number" name="id_habitacion" id="id_habitacion" required></li><br>
        <li>Planta:<input type="number" name="planta" id="planta"></li>

        <li>Check List (marcar si estado es ok): </li>
        <input type="hidden" name="idchecklist" id="idchecklist">
        <label for="Ropa sucia">Ropa sucia</label>
        <select name="ropa_sucia" id="ropa_sucia">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Papeleras">Papeleras</label>
        <select name="papeleras" id="ropa_sucia">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Camas">Camas</label>
        <select name="camas" id="camas">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Polvo">Polvo</label>
        <select name="polvo" id="polvo">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Suelo">Suelo</label>
        <select name="suelo" id="suelo">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Baño">Baño</label>
        <select name="baño" id="baño">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Toallas">Toallas</label>
        <select name="toallas" id="toallas">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Minibar">Minibar</label>
        <select name="minibar" id="minibar">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Amenities">Amenities</label>
        <select name="amenities" id="amenities">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        <label for="Olor">Olor</label>
        <select name="olor" id="olor">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>


        <li><input type="submit" value="Enviar" name="Enviar"></li>
    </form>
</body>

</html>