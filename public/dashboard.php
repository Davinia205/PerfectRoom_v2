<?php 
session_start();

if (isset($_SESSION['username'])) {
    $usuarioRegistrado = $_SESSION['username'];
    // Ahora puedes usar $username en esta página
    echo "Hola, $usuarioRegistrado";
} else {
    // La variable de sesión no está establecida, manejar la situación
    echo "Usuario no autenticado";
}