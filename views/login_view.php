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
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.login-container {
    width: 90%;
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.login-container h2, h1 {
    text-align: center;
    margin-bottom: 20px;
}
.login-container input[type="text"],
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}
.login-container button[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #0DCAF0;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}
@media (max-width: 600px) {
    .login-container {
        width: 100%;
        padding: 15px;
    }
}
</style>

    <title>Iniciar sesión</title>
</head>
<div class="login-container">
    <body>   
<h1>PerfectRoom</h1>

        <form id="login" method="post" onsubmit="return validateLogin()">
            <input type="text" name="id_hotel" id= "id_hotel" placeholder="id_hotel">
            <input type="text" name="username" id= "username" placeholder="Usuario">
            <input type="password" name="password" id="password" placeholder="Contraseña">
            <button type="submit" class="btn btn-info" role="button">Iniciar sesión</button>

    
        </form>
        <div id="errorMessage" style="color: red; display: none;"></div>
    </div>

    <script>
function validateLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var id_hotel = document.getElementById('id_hotel').value;

    // Validación básica del lado del cliente
    if (username.trim() === '' || password.trim() === '') || id_hotel.trim() === '')  {
        document.getElementById('errorMessage').textContent = 'Por favor, introduce un nombre de usuario, contraseña e identificador de su establecimiento.';
        document.getElementById('errorMessage').style.display = 'block';
        return false;
    }

    return true; // Envía el formulario si la validación del cliente pasa
}
</script>







</body>

</html>