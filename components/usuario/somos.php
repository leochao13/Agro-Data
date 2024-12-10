<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIENES SOMOS</title>
    <!--      CSS DEL HOME       -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/homeuserstyle.css"> 
    <link rel="stylesheet" href="/css/somosstyle.css"> 
    <link rel="stylesheet" href="/css/footerstyle.css"> 
    <link rel="stylesheet" href="/css/loader.css">
    <link rel="icon" href="/icon.png" type="image/x-icon">   
    <!-- <a href="https://www.flaticon.es/iconos-gratis/hoja" title="hoja iconos">Hoja iconos creados por Roundicons - Flaticon</a> -->
</head>
<body>
<?php
      		include("/xampp/htdocs/php/restriccion.php");
      ?>

         
        <!--      BARRA DE NAVEGACION   -->
    <div id="navbar-container"></div>
        <!--    ICONO DEL MENU     -->
        <div class="menu-icon">
            <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
    </nav>
    <div class="card-container">
    <div class="card">
    <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt="">
  <div class="card__content">
    <p class="card__title">AGRO-DATA</p>
    <p class="card__description">La app es un acercamiento de agricultores con posibles compradores, conocimiento de los tipos de cultivos que puede tener, como darles cuidado, que tipos de amenazas existen para cada uno de estos cultivos, tener un seguimiento del calendario, nuestro clima  y conocer de algunas cosechas cuanto dinero puede generar.
    </p>
  </div>
</div>
</div>

<footer class="pie-pagina">
    <div id="footer-container"></div>  
    </footer>

    <!--      SCRIPT DEL HOME     -->
    <script src="/js/homemain.js"></script>
    <!--      SCRIPT DEL navbar     -->
    <script src="/components/usuario/nav-bar.js"></script>
    <!--      SCRIPT PARA ANIMACION DEL MENU    -->
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
    <!-- footer -->
     <!-- SCRIPT DE FOOTER -->
     <script src="/components/usuario/footer.js"></script>
     <script src="/js/loadermain.js"></script>
</body>
</html>
