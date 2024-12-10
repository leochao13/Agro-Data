<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CULTIVOS</title>
    <!--      CSS DEL HOME       -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/homeuserstyle.css"> 
    <link rel="stylesheet" href="/css/footerstyle.css">
    <link rel="stylesheet" href="/css/cultivosstyle.css">  
    <link rel="stylesheet" href="/css/loader.css">  
    <link rel="icon" href="/icon.png" type="image/x-icon"> 
    <!-- <a href="https://www.flaticon.es/iconos-gratis/hoja" title="hoja iconos">Hoja iconos creados por Roundicons - Flaticon</a> -->
</head>
<body>
<?php
      		include("/xampp/htdocs/php/restriccion.php");
      ?>
      <div class="loader-container" id="preloader-container">
        <div class="loader" id="preloader">Loading
            <span></span>
        </div>
    </div>
    <!--      BARRA DE NAVEGACION   -->
    <div id="navbar-container"></div>
    <!-- CARTAS --> 
    <div class="main">
        <h1>Conoce que puedes cultivar</h1>
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <!-- 4608 x 3456 -->
              <div class="card_image"><img src="https://cdn.pixabay.com/photo/2016/08/09/13/53/swiss-chard-1580676_1280.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Acelgas</h2>
                <p class="card_text">3 MESE PARA COSECHAR</p>
                <button class="btn card_btn">CULTIVAR</button>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="https://cdn.pixabay.com/photo/2023/08/26/03/20/garlic-8214036_1280.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Ajo</h2>
                <p class="card_text">7 MESES PARA COSECHAR</p>
                <button class="btn card_btn">CULTIVAR</button>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="https://cdn.pixabay.com/photo/2017/08/05/15/43/vegetable-2584412_960_720.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Berenjena</h2>
                <p class="card_text">4 MESES PARA COSECHAR</p>
                <button class="btn card_btn">CULTIVAR</button>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="https://cdn.pixabay.com/photo/2018/10/10/07/10/agriculture-3736561_1280.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Calabaza</h2>
                <p class="card_text">4 MESES PARA COSECHAR</p>
                <button class="btn card_btn">CULTIVAR</button>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="https://cdn.pixabay.com/photo/2018/07/15/20/43/onion-3540502_1280.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Cebolla</h2>
                <p class="card_text">7 MESES PARA COSECHAR</p>
                <button class="btn card_btn">CULTIVAR</button>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="https://cdn.pixabay.com/photo/2016/06/01/15/05/cilantro-1429136_1280.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Cilantro</h2>
                <p class="card_text">2 MESES PARA COSECHAR</p>
                <button class="btn card_btn">CULTIVAR</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <br>
      <footer class="pie-pagina">
        <div id="footer-container"></div>  
        </footer>
    <!--      SCRIPT DEL HOME     -->
    <script src="/js/homemain.js"></script>
    <!--      SCRIPT PARA ANIMACION DEL MENU    -->
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
    <!-- SCRIPT DE NAVBAR -->
    <script src="/components/usuario/nav-bar.js"></script>
    <!-- SCRIPT DE FOOTER -->
     <script src="/components/usuario/footer.js"></script>
     <script src="/js/loadermain.js"></script>
</body>
</html>
