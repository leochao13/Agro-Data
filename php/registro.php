<?php
include("conexion.php"); // Incluir la conexión a la base de datos

if (isset($_POST['registrar'])) {
    // Validar si los campos están llenos
    if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo '<h3 class="bad">¡Por favor complete todos los campos!</h3>';
    } else {
        // Sanitizar y asignar valores
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Encriptar la contraseña

        // Consulta SQL para insertar los datos
        $consulta = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

        // Ejecutar la consulta e informar al usuario
        if (mysqli_query($conexion, $consulta)) {
            echo '<h3 class="ok">¡Te has registrado correctamente!</h3>';
        } else {
            echo '<h3 class="bad">¡Ups, ha ocurrido un error!</h3>';
            echo mysqli_error($conexion); // Mostrar el error específico
        }
    }
}
?>
