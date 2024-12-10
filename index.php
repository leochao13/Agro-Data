<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/loginstyle.css">
    <link rel="stylesheet" href="/css/boton-admin.css">
    <link rel="icon" href="/icon.png" type="image/x-icon">   
    <title>Iniciar sección</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post">
            <?php 
				include("/xampp/htdocs/php/registro.php");
		    ?>
                <h1>Crear Cuenta</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o utiliza tu correo electrónico para registrarte</span>
                <input type="text" name="nombre" placeholder="Nombre completo" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit" name="registrar">Regístrate</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="post">
            <?php 
				include("/xampp/htdocs/php/ingreso.php");
		    ?>
                <h1>Iniciar sesión</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu cuenta</span>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button type="submit" name="entrar">Acceso</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Hola amig@</h1>
                    <p>Inicie sesión en su cuenta</p>
                    <button class="ghost" id="signIn">Acceso</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>¿No tienes una cuenta? <br> Únete a esta comunidad </p>
                    <button class="ghost" id="signUp">Inscribirse</button>
                </div>
            </div>
        </div>
    </div>

    	<!-- Botón que abre la ventana emergente -->
		<button class="btn-admin" onclick="openPopup()">Admin</button>

<!-- Ventana emergente -->
<div class="popup-overlay" id="popup">
    <div class="popup-content">
        <div class="login-admin">
        <?php 
        include("/xampp/htdocs/php/login-admin.php");
        ?>
            <form method="post">
                <br><br><br>
                <label for="chk" aria-hidden="true">Iniciar Admin</label>
                <br>
                <input type="email" name="email" placeholder="Correo electronico" required="">
                <input type="password" name="password" placeholder="Contraseña" required="">
                <br>
                <button type="submit" name="admin">Entrar</button>
                <br>
                <button class="close-btn" onclick="closePopup()">Cerrar</button>
            </form>
        </div>
    </div>
</div>
<script src="/js/loginmain.js"></script>
<script src="/js/boton-admin.js"></script>

</body>

</html>