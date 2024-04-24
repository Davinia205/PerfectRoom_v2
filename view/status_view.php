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
    margin: 0;
    padding: 0;
}
.list-container h2, h1 {
    text-align: center;
    margin-bottom: 20px;
}

.list-container {
    max-width: 600px; /* Ancho máximo para la lista */
    margin: 0 auto; /* Centrar la lista en la página */
    padding: 20px;
}

.list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap; /* Permite que los elementos de la lista se envuelvan en múltiples líneas */
}

.list li {
    flex: 0 0 50%; /* Cada elemento ocupa el 50% del ancho en pantallas grandes */
    padding: 10px;
    box-sizing: border-box;
}

/* Media query para ajustar el diseño en pantallas más pequeñas */
@media (max-width: 600px) {
    .list li {
        flex: 0 0 100%; /* Cada elemento ocupa el 100% del ancho en pantallas pequeñas */
    }
}


</style>
<body>
<div class="list-container">
    <h1>Informe de Situación</h1>
    <ul class="list">
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
        <li>Item 5</li>
    </ul>
</div>

</body>