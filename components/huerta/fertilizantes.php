<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FERTILIZANTES</title>
    <!--      CSS DEL HOME       -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/homeuserstyle.css"> 
    <link rel="stylesheet" href="/css/footerstyle.css"> 
    <link rel="stylesheet" href="/css/fertilizantesstyle.css">
    <link rel="stylesheet" href="/css/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="/icon.png" type="image/x-icon">   
    <!-- <a href="https://www.flaticon.es/iconos-gratis/hoja" title="hoja iconos">Hoja iconos creados por Roundicons - Flaticon</a> -->
</head>
<body>
<?php
      		include("/xampp/htdocs/php/restriccion.php");
      ?>
    <!--      BARRA DE NAVEGACION   -->
   <div id="navbar-container"></div>
    <!-- FERTILIZANTES -->
   
    <div class="loader-container" id="preloader-container">
        <div class="loader" id="preloader">Loading
            <span></span>
        </div>
    </div>
<div class="container">

    <h3 class="title"> FERTILIZANTES ORGANICOS </h3>
 
    <div class="products-container">
 
       <div class="product" data-name="p-1">
          <img src="https://cdn.pixabay.com/photo/2017/06/09/12/51/fresh-2386786_1280.jpg" alt="">
          <h3>Composta</h3>
          <div class="price">Nitrógeno, Fósforo, Potasio, Calcio</div>
       </div>
 
       <div class="product" data-name="p-2">
          <img src="https://cdn.pixabay.com/photo/2018/09/11/21/52/bones-3670740_960_720.jpg" alt="">
          <h3>Ceniza de hueso</h3>
          <div class="price">Potasio, Calcio</div>
       </div>
 
       <div class="product" data-name="p-3">
          <img src="https://cdn.pixabay.com/photo/2015/03/14/20/27/fruit-673767_1280.jpg" alt="">
          <h3>Cascara de Platano</h3>
          <div class="price">Nitrógeno, Potasio, Fósforo</div>
         </div>
         
         <div class="product" data-name="p-4">
          <img src="https://cdn.pixabay.com/photo/2021/02/12/05/39/fire-6007387_1280.jpg" alt="">
          <h3>Ceniza de madera</h3>
          <div class="price">Fósforo, Potasio</div>
       </div>
 
       <div class="product" data-name="p-5">
          <img src="https://cdn.pixabay.com/photo/2015/08/25/03/50/basil-906137_640.jpg" alt="">
          <h3>Mezcla de hierbas</h3>
          <div class="price">Potasio, Nitrógeno</div>
       </div>
 
       <div class="product" data-name="p-6">
          <img src="https://cdn.pixabay.com/photo/2017/03/17/22/27/egg-2152808_640.jpg" alt="">
          <h3>Cascara de huevo</h3>
          <div class="price">Calcio</div>
       </div>
    </div>
 </div>
 
 <div class="products-preview">
 
    <div class="preview" data-target="p-1">
       <i class="fas fa-times"></i>
       <img src="https://cdn.pixabay.com/photo/2017/06/09/12/51/fresh-2386786_1280.jpg" alt="">
       <h3>Composta</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <span>( 100% efectividad )</span>
       </div>
       <p>Necesitas conseguir composta en comprar</p>
       <div class="price">$399.00 PMX</div>
       <div class="buttons">
          <a href="https://articulo.mercadolibre.com.mx/MLM-1917209789-gallinaza-abono-organico-15-kg-_JM#is_advertising=true&position=3&search_layout=grid&type=pad&tracking_id=1572e379-6c6e-43db-8577-ea45c5cc833f&is_advertising=true&ad_domain=VQCATCORE_LST&ad_position=3&ad_click_id=ZWJjOTUyMzAtMjZjZC00NTkxLTlmN2EtYzY5N2U1MzMyNzIy" class="buy">Comprar</a>
          <a href="#" class="cart">Mas informacion</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-2">
       <i class="fas fa-times"></i>
       <img src="https://cdn.pixabay.com/photo/2018/09/11/21/52/bones-3670740_960_720.jpg" alt="">
       <h3>Cenizas de hueso</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <span>( 100% efectividad )</span>
       </div>
       <p>Necesistas conseguir un poco en comprar</p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Mas informacion</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-3">
       <i class="fas fa-times"></i>
       <img src="https://cdn.pixabay.com/photo/2015/03/14/20/27/fruit-673767_1280.jpg" alt="">
       <h3>Cascara de platano</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 80% efectividad )</span>
       </div>
       <p>Quierer probar opciones similares en comprar</p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Mas informacion</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-4">
       <i class="fas fa-times"></i>
       <img src="https://cdn.pixabay.com/photo/2021/02/12/05/39/fire-6007387_1280.jpg" alt="">
       <h3>Ceniza de madera</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 80% efectividad )</span>
       </div>
       <p>Quieres probar opciones similares en comprar</p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Mas informacion</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-5">
       <i class="fas fa-times"></i>
       <img src="https://cdn.pixabay.com/photo/2015/08/25/03/50/basil-906137_640.jpg" alt="">
       <h3>Mezcla de hierbas</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 50% efectividad )</span>
       </div>
       <p> Liquidos similares en comprar </p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Mas informacion</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-6">
       <i class="fas fa-times"></i>
       <img src="https://cdn.pixabay.com/photo/2017/03/17/22/27/egg-2152808_640.jpg" alt="">
       <h3>Cascara de Huevo</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <span>( 100% efectividad )</span>
       </div>
       <p> Productos similares en comprar</p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Mas informacion</a>
       </div>
    </div>
 </div>
 <br>
 <footer class="pie-pagina">
   <div id="footer-container"></div>  
   </footer>
    <!-- script para salto de ventana -->
     <script src="/js/fertilizantemain.js"></script>
    <!--      SCRIPT DEL HOME     -->
    <script src="/js/homemain.js"></script>
    <!--      SCRIPT PARA ANIMACION DEL MENU    -->
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
    <script src="/components/usuario/nav-bar.js"></script>
    <!-- SCRIPT DE FOOTER -->
     <script src="/components/usuario/footer.js"></script>
     <script src="/js/loadermain.js"></script>
</body>
</html>
