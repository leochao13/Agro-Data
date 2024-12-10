<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALENDARIO</title>
    <!--      CSS DEL HOME       -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/homeuserstyle.css"> 
    <link rel="stylesheet" href="/css/calendariostyle.css"> 
    <link rel="stylesheet" href="/css/climamain.css"> 
    <link rel="stylesheet" href="/css/footerstyle.css"> 
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

  <!-- calendario -->
  <div class="light"> 
  <div class="calendar">
    <div class="calendar-header">
      <span class="month-picker" id="month-picker">February</span>
      <div class="year-picker">
        <span class="year-change prev" id="prev">
          <pre><</pre>
        </span>
        <span id="year">2021</span>
        <span class="year-change next" id="next">
          <pre>></pre>
        </span>
      </div>
    </div>
    <div class="calendar-body">
      <div class="calendar-week-day">
        <div>DOM</div>
        <div>LUN</div>
        <div>MAR</div>
        <div>MIER</div>
        <div>JUE</div>
        <div>VIE</div>
        <div>SAB</div>
      </div>
      <div class="calendar-days"></div>
    </div>
  </div>
</div>




    <!--  Clima -->
  <div class="card-container">
    <div class="card">
      <div class="container">
        <div class="cloud front">
          <span class="left-front"></span>
          <span class="right-front"></span>
    </div>
    <span class="sun sunshine"></span>
    <span class="sun"></span>
    <div class="cloud back">
      <span class="left-back"></span>
      <span class="right-back"></span>
    </div>
  </div>

  <div class="card-header">
    <span>Messadine, Susah<br>Tunisia</span>
    <span>March 13</span>
  </div>

  <span class="temp">23°</span>

  <div class="temp-scale">
    <span>Celcius</span>
  </div>
    </div>
    </div>
     
    <footer class="pie-pagina">
      <div id="footer-container"></div>  
    </footer>

    
    <script src="/components/usuario/footer.js"></script>
    <script src="/js/calendariomain.js"></script>
    <!--      SCRIPT DEL navbar     -->
    <script src="/components/usuario/nav-bar.js"></script>
    <script src="/js/loadermain.js"></script>
    
</body>
</html>
