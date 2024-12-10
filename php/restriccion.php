<?php
session_start(); // Iniciar la sesión

// Verificar si el correo electrónico está almacenado en la sesión
if (!isset($_SESSION['email'])) {
    // Si no ha iniciado sesión, redirigir al login con un mensaje de error
    $_SESSION['error_mensaje'] = "Debes iniciar sesión para acceder al dashboard.";
    header("Location: /404.php");
    exit();
}


?>