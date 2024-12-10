<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESTICIDAS</title>
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
      
      <div class="loader-container" id="preloader-container">
        <div class="loader" id="preloader">Loading
            <span></span>
        </div>
    </div>
    <!--      BARRA DE NAVEGACION   -->
   <div id="navbar-container"></div>
    <!-- pesticidas -->
             
    <div class="container">

    <h3 class="title"> PESTICIDAS </h3>
 
    <div class="products-container">
 
       <div class="product" data-name="p-1">
          <img src="https://images.unsplash.com/photo-1559304787-945aa4341065?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YWd1YSUyMHklMjBqYWJvbnxlbnwwfHwwfHx8MA%3D%3D" alt="">
          <h3>Agua Jabonosa</h3>
          <div class="price">Insecticida</div>
       </div>
 
       <div class="product" data-name="p-2">
          <img src="https://plus.unsplash.com/premium_photo-1661942064041-a15c0c93d2a5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8aW5zZWN0aWNpZGF8ZW58MHx8MHx8fDA%3D" alt="">
          <h3>Repelente de ajo pican</h3>
          <div class="price">Insecticida</div>
       </div>
 
       <div class="product" data-name="p-3">
          <img src="https://plus.unsplash.com/premium_photo-1661367673895-4c80ee00da5f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGluc2VjdGljaWRhfGVufDB8fDB8fHww" alt="">
          <h3>Insecticida de Tomate</h3>
          <div class="price">Insecticida</div>
       </div>
 
       <div class="product" data-name="p-4">
          <img src="https://plus.unsplash.com/premium_photo-1661825521051-94a8ad2ad079?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fGluc2VjdGljaWRhfGVufDB8fDB8fHww" alt="">
          <h3>Insecticida de Limón</h3>
          <div class="price">Insecticida</div>
       </div>
 
       <div class="product" data-name="p-5">
          <img src="https://cdn.pixabay.com/photo/2020/05/21/15/38/fertilizer-5201380_1280.jpg" alt="">
          <h3>Tierra de diatomeas</h3>
          <div class="price">Insecticida</div>
       </div>
 
       <div class="product" data-name="p-6">
          <img src="https://cdn.pixabay.com/photo/2020/07/01/04/45/cbd-oil-5358404_640.jpg" alt="">
          <h3>Aceite de Neem </h3>
          <div class="price">Insecticida</div>
       </div>
    </div>
 </div>
 


 <!-- segunda vista  -->
 <div class="products-preview">
 
    <div class="preview" data-target="p-1">
       <i class="fas fa-times"></i>
       <img src="https://images.unsplash.com/photo-1559304787-945aa4341065?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YWd1YSUyMHklMjBqYWJvbnxlbnwwfHwwfHx8MA%3D%3D" alt="">
       <h3>Agua Jabonosa</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 80% Efectividad )</span>
       </div>
       <p>Necesitas una receta</p>
       <div class="price">$100.00 PMX</div>
       <div class="buttons">
          <a href="https://articulo.mercadolibre.com.mx/MLM-1917209789-gallinaza-abono-organico-15-kg-_JM#is_advertising=true&position=3&search_layout=grid&type=pad&tracking_id=1572e379-6c6e-43db-8577-ea45c5cc833f&is_advertising=true&ad_domain=VQCATCORE_LST&ad_position=3&ad_click_id=ZWJjOTUyMzAtMjZjZC00NTkxLTlmN2EtYzY5N2U1MzMyNzIy" class="buy">Comprar</a>
          <a href="#" class="cart">Preparar</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-2">
       <i class="fas fa-times"></i>
       <img src="https://plus.unsplash.com/premium_photo-1661942064041-a15c0c93d2a5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8aW5zZWN0aWNpZGF8ZW58MHx8MHx8fDA%3D" alt="">
       <h3>Repelente de Ajo Pican</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 80% Efectividad )</span>
       </div>
       <p>Necesitas una receta</p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Preparar</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-3">
       <i class="fas fa-times"></i>
       <img src="https://plus.unsplash.com/premium_photo-1661367673895-4c80ee00da5f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGluc2VjdGljaWRhfGVufDB8fDB8fHww" alt="">
       <h3>Insecticida de Tomate</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>          
          <span>( 100% Efectividad )</span>
       </div>
       <p>Necesitas una receta</p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Preparar</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-4">
       <i class="fas fa-times"></i>
       <img src="https://plus.unsplash.com/premium_photo-1661825521051-94a8ad2ad079?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fGluc2VjdGljaWRhfGVufDB8fDB8fHww" alt="">
       <h3>Insecticida de Limón</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 80% Efectividad )</span>
       </div>
       <p>Necesitas una receta</p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Preparar</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-5">
       <i class="fas fa-times"></i>
       <img src="https://cdn.pixabay.com/photo/2020/05/21/15/38/fertilizer-5201380_1280.jpg" alt="">
       <h3>Tierra de diatomeas</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <span>( 100% Efectividad )</span>
       </div>
       <p>Donde conseguirlo</p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Preparar</a>
       </div>
    </div>
 
    <div class="preview" data-target="p-6">
       <i class="fas fa-times"></i>
       <img src="https://cdn.pixabay.com/photo/2020/07/01/04/45/cbd-oil-5358404_640.jpg" alt="">
       <h3>Aceite Neem</h3>
       <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <span>( 100% Efectividad )</span>
       </div>
       <p>Donde conseguirlo </p>
       <div class="price">$2.00</div>
       <div class="buttons">
          <a href="#" class="buy">Comprar</a>
          <a href="#" class="cart">Preparar</a>
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
    <!-- SCRIPT DE NAVBAR --> 
    <script src="/components/usuario/nav-bar.js"></script>
    <!-- SCRIPT DE FOOTER -->
     <script src="/components/usuario/footer.js"></script>
     <script src="/js/loadermain.js"></script>
</body>
</html>
