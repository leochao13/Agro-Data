<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAGAS</title>
    <!--      CSS DEL HOME       -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/homeuserstyle.css"> 
    <link rel="stylesheet" href="/css/fertilizantesstyle.css">
    <link rel="stylesheet" href="/css/footerstyle.css">
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

    <!-- PLAGAS -->
    <!-- pesticidas -->
             
    <div class="container">

        <h3 class="title"> PLAGAS </h3>
     
        <div class="products-container">
     
           <div class="product" data-name="p-1">
              <img src="https://images.unsplash.com/photo-1713208653053-69e6668edce4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGFyYSVDMyVCMWElMjByb2phfGVufDB8fDB8fHww" alt="">
              <h3>Araña roja</h3>
              <div class="price">Aracnido</div>
           </div>
     
           <div class="product" data-name="p-2">
              <img src="https://cdn.pixabay.com/photo/2016/11/18/19/15/animal-1836482_640.jpg" alt="">
              <h3>Caracol</h3>
              <div class="price">Insecto</div>
           </div>
     
           <div class="product" data-name="p-3">
              <img src="https://cdn.pixabay.com/photo/2020/03/26/14/03/stink-bug-4970553_640.jpg" alt="">
              <h3>Chinche verde</h3>
              <div class="price">Insecto</div>
           </div>
     
           <div class="product" data-name="p-4">
              <img src="https://cdn.pixabay.com/photo/2022/09/03/17/26/woodlice-7430052_640.jpg" alt="">
              <h3>Cochinilla</h3>
              <div class="price">Insecto</div>
           </div>
     
           <div class="product" data-name="p-5">
              <img src="https://cdn.pixabay.com/photo/2015/09/19/15/49/ant-947402_640.jpg" alt="">
              <h3>Hormiga</h3>
              <div class="price">Insecto</div>
           </div>
     
           <div class="product" data-name="p-6">
              <img src="https://cdn.pixabay.com/photo/2018/01/10/21/29/nature-3074783_640.jpg" alt="">
              <h3>Minador</h3>
              <div class="price">Insecto</div>
           </div>
        </div>
     </div>
     





     <!-- Segunda vista -->
     <div class="products-preview">
     
        <div class="preview" data-target="p-1">
           <i class="fas fa-times"></i>
           <img src="https://images.unsplash.com/photo-1713208653053-69e6668edce4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGFyYSVDMyVCMWElMjByb2phfGVufDB8fDB8fHww" alt="">
           <h3>Araña roja</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>( Peligro Alto )</span>
           </div>
           <p>Con que se eliminan</p>
           <div class="price">$399.00 PMX</div>
           <div class="buttons">
              <a href="https://articulo.mercadolibre.com.mx/MLM-1917209789-gallinaza-abono-organico-15-kg-_JM#is_advertising=true&position=3&search_layout=grid&type=pad&tracking_id=1572e379-6c6e-43db-8577-ea45c5cc833f&is_advertising=true&ad_domain=VQCATCORE_LST&ad_position=3&ad_click_id=ZWJjOTUyMzAtMjZjZC00NTkxLTlmN2EtYzY5N2U1MzMyNzIy" class="buy">Comprar</a>
              <a href="#" class="cart">Mas información</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-2">
           <i class="fas fa-times"></i>
           <img src="https://cdn.pixabay.com/photo/2016/11/18/19/15/animal-1836482_640.jpg" alt="">
           <h3>Caracol</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>( Peligro Alto )</span>
           </div>
           <p>Con que se eliminan</p>
           <div class="price">$2.00</div>
           <div class="buttons">
              <a href="#" class="buy">Comprar </a>
              <a href="#" class="cart">Mas información</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-3">
           <i class="fas fa-times"></i>
           <img src="https://cdn.pixabay.com/photo/2020/03/26/14/03/stink-bug-4970553_640.jpg" alt="">
           <h3>Chinche verde</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>( Peligro Alto )</span>
           </div>
           <p>Con que se eliminan</p>
           <div class="price">$2.00</div>
           <div class="buttons">
              <a href="#" class="buy">Comprar</a>
              <a href="#" class="cart">Mas información</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-4">
           <i class="fas fa-times"></i>
           <img src="https://cdn.pixabay.com/photo/2022/09/03/17/26/woodlice-7430052_640.jpg" alt="">
           <h3>Cochinilla</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <span>( Peligro Bajo )</span>
           </div>
           <p>Con que se eliminan</p>
           <div class="price">$2.00</div>
           <div class="buttons">
              <a href="#" class="buy">Comprar</a>
              <a href="#" class="cart">Mas información</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-5">
           <i class="fas fa-times"></i>
           <img src="https://cdn.pixabay.com/photo/2015/09/19/15/49/ant-947402_640.jpg" alt="">
           <h3>Hormiga</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>( Peligro Alto )</span>
           </div>
           <p>Con que se eliminan</p>
           <div class="price">$2.00</div>
           <div class="buttons">
              <a href="#" class="buy">Comprar</a>
              <a href="#" class="cart">Mas información</a>
           </div>
        </div>
     
        <div class="preview" data-target="p-6">
           <i class="fas fa-times"></i>
           <img src="https://cdn.pixabay.com/photo/2018/01/10/21/29/nature-3074783_640.jpg" alt="">
           <h3>Minador</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>( Peligro Medio )</span>
           </div>
           <p>Con que se eliminan</p>
           <div class="price">$2.00</div>
           <div class="buttons">
              <a href="#" class="buy">Comprar</a>
              <a href="#" class="cart">Mas información</a>
           </div>
        </div>
     </div>
   <br>
     <footer class="pie-pagina">
      <div id="footer-container"></div>  
      </footer>
    
   
    <!-- SCRIPT DE NAVBAR --> 
    <script src="/components/usuario/nav-bar.js"></script>
    <!-- SCRIPT DE FOOTER -->
     <script src="/components/usuario/footer.js"></script>
     <!-- script para salto de ventana -->
      <script src="/js/fertilizantemain.js"></script>
    
    <!--      SCRIPT DEL HOME     -->
    <script src="/js/homemain.js"></script>
    <script src="/js/loadermain.js"></script>
    <!--      SCRIPT PARA ANIMACION DEL MENU    -->
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
</body>
</html>
