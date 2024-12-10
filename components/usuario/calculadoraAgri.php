<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA-AGRICOLA</title>
    <!--      CSS DEL HOME       -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/homeuserstyle.css"> 
    <link rel="stylesheet" href="/css/calculadorastyle.css"> 
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
    <br>
    <div id="calculator">
        <h2>Calculadora de siembra peso de secado</h2>
        <input type="number" id="metrosCuadrados" placeholder="Peso inicial kg">
        <input type="number" id="litros" placeholder="Humedad inical">
        <input type="number" id="metros" placeholder="Humedad final">
        <button onclick="calcularAgua()">Calcular</button>
        <p id="resultado"></p>
    </div>
    <br>
    <div id="calculator">
        <h2>Calculadora de Siembra</h2>
        <input type="number" id="litrosBomba" placeholder="Taza de siembra">
        <input type="number" id="litrosProducto" placeholder="Peso de 1000gramos">
        <input type="number" id="litrosHectarea" placeholder="germinacion de semilla">
        <button onclick="calcularProducto()">Calcular</button>
        <p id="resultado"></p>
    </div>
    <br>

    <footer class="pie-pagina">
    <div id="footer-container"></div>  
    </footer>
   
    <script src="/components/usuario/footer.js"></script>
   <script>
        function calcularAgua() {
            const metrosCuadrados = parseFloat(document.getElementById("metrosCuadrados").value);
            const litros = parseFloat(document.getElementById("litros").value);
            const metros = parseFloat(document.getElementById("metros").value);

            if (!isNaN(metrosCuadrados) && !isNaN(litros) && !isNaN(metros)) {
                const resultado = (metrosCuadrados * litros) / metros;
                document.getElementById("resultado").textContent = `Respuesta: ${resultado.toFixed(2)} litros por hectárea que se usarán de agua.`;
            } else {
                document.getElementById("resultado").textContent = "Por favor, ingresa números válidos en todos los campos.";
            }
        }

        function calcularProducto() {
            const litrosBomba = parseFloat(document.getElementById("litrosBomba").value);
            const litrosProducto = parseFloat(document.getElementById("litrosProducto").value);
            const litrosHectarea = parseFloat(document.getElementById("litrosHectarea").value);

            if (!isNaN(litrosBomba) && !isNaN(litrosProducto) && !isNaN(litrosHectarea)) {
                const resultado = (litrosBomba * litrosProducto) / litrosHectarea;
                document.getElementById("resultado").textContent = `Respuesta: ${resultado.toFixed(2)} Mililitros de producto por hectárea.`;
            } else {
                document.getElementById("resultado").textContent = "Por favor, ingresa números válidos en todos los campos.";
            }
        }
    </script>




    <!--      SCRIPT DEL HOME     -->
    <script src="/js/homemain.js"></script>
    <!--      SCRIPT DEL navbar     -->
    <script src="/components/usuario/nav-bar.js"></script>
    <!--      SCRIPT PARA ANIMACION DEL MENU    -->
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
    <script src="/js/loadermain.js"></script>
</body>
</html>
