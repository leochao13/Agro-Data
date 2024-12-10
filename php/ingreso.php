<?php
session_start(); // Iniciar la sesión

// Incluir el archivo de conexión a la base de datos
include("conexion.php");

if (isset($_POST['entrar'])) {
    // Sanitizar y capturar los datos del formulario
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Consulta SQL para obtener el hash de la contraseña del usuario
    $consulta = "SELECT id_usuario, email, password FROM usuarios WHERE email = ?";
    $stmt = mysqli_prepare($conexion, $consulta); // Preparar la consulta
    mysqli_stmt_bind_param($stmt, "s", $email); // Enlazar el parámetro
    mysqli_stmt_execute($stmt); // Ejecutar la consulta
    $resultado = mysqli_stmt_get_result($stmt); // Obtener el resultado

    // Verificar si el usuario existe
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $hash_password = $fila['password'];

        // Verificar la contraseña ingresada con el hash
        if (password_verify($password, $hash_password)) {
            // Guardar el ID y el correo del usuario en la sesión
            $_SESSION['id_usuario'] = $fila['id_usuario'];
            $_SESSION['email'] = $fila['email'];
            header("Location: /components/usuario/home.php"); // Redirigir a la página protegida
            exit();
        } else {
            echo "<h3 class='bad'>Correo electrónico o contraseña incorrectos.</h3>";
        }
    } else {
        echo "<h3 class='bad'>Correo electrónico o contraseña incorrectos.</h3>";
    }

    mysqli_stmt_close($stmt); // Cerrar el statement
}
?>
