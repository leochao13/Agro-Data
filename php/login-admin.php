<?php

// Incluimos el archivo de conexión a la base de datos
include("conexion.php");

if (isset($_POST['admin'])) {
    // Capturamos los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Realizamos la consulta SQL para obtener el hash de la contraseña del usuario
    $consulta = "SELECT id_admin, nombre, email, PASSWORD, fecha_creacion FROM admins WHERE email = '$email'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $hash_password = $fila['PASSWORD'];

        // Verificamos si la contraseña ingresada coincide con el hash almacenado
        if (password_verify($password, $hash_password)) {
            // Almacenar el email en la sesión
            $_SESSION['email'] = $fila['email'];
            $_SESSION['nombre'] = $fila['nombre']; // Guardamos el nombre del admin para uso posterior
            header("Location: \components\admin\home.php"); // Redirigimos a la página protegida
            exit();
        } else {
            echo "Email o contraseña incorrectos.";
        }
    } else {
        echo "Email o contraseña incorrectos.";
    }
}
?>
