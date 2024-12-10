<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <!--      CSS DEL HOME       -->
    <link rel="icon" href="/icon.png" type="image/x-icon">   
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/cardstyle.css">
    <link rel="stylesheet" href="/css/homeuserstyle.css"> 
    <link rel="stylesheet" href="/css/comentariosstyle.css">
    <link rel="stylesheet" href="/css/footerstyle.css">
    <link rel="stylesheet" href="/css/loader.css">
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
    
            <!-- cartas -->
            <div class="wrapper">
                <h1>Curiosidades de la Agricultura</h1>
                <div class="cols">
                          <div class="col" ontouchstart="this.classList.toggle('hover');">
                              <div class="container">
                                  <div class="front" style="background-image: url(https://cdn.pixabay.com/photo/2014/04/17/09/45/bees-326337_1280.jpg)">
                                      <div class="inner">
                                          <p>Abejas agricolas</p>
                            <span>Sabias que...</span>
                                      </div>
                                  </div>
                                  <div class="back">
                                      <div class="inner">
                                        <p>Aunque no cultivan plantas, las abejas juegan un papel fundamental en la agricultura al polinizar cultivos.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col" ontouchstart="this.classList.toggle('hover');">
                              <div class="container">
                                  <div class="front" style="background-image: url(https://cdn.pixabay.com/photo/2018/10/28/11/17/tractor-3778522_960_720.jpg)">
                                      <div class="inner">
                                          <p>La agricultura es mas vieja de lo crees</p>
                            <span>Sabias que...</span>
                                      </div>
                                  </div>
                                  <div class="back">
                                      <div class="inner">
                                          <p> La agricultura comenzó hace unos 10,000 años, cuando los humanos dejaron de ser cazadores-recolectores.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col" ontouchstart="this.classList.toggle('hover');">
                              <div class="container">
                                  <div class="front" style="background-image: url(https://cdn.pixabay.com/photo/2018/09/26/21/24/corn-3705687_960_720.jpg)">
                                      <div class="inner">
                                          <p>Maíz es el rey de México</p>
                            <span>Sabias que...</span>
                                      </div>
                                  </div>
                                  <div class="back">
                                      <div class="inner">
                                          <p>Centro de origen del maíz y alberga una increíble diversidad de variedades de este grano.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col" ontouchstart="this.classList.toggle('hover');">
                              <div class="container">
                                  <div class="front" style="background-image: url(https://cdn.pixabay.com/photo/2019/06/06/08/00/hydroponics-4255401_960_720.jpg)">
                                      <div class="inner">
                                          <p>Agricultura hidropónica crece sin suelo</p>
                            <span>Sabias que...</span>
                                      </div>
                                  </div>
                                  <div class="back">
                                      <div class="inner">
                                          <p>Esta técnica permite cultivar plantas utilizando soluciones nutritivas en agua, sin necesidad de tierra.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col" ontouchstart="this.classList.toggle('hover');">
                              <div class="container">
                                  <div class="front" style="background-image: url(https://cdn.pixabay.com/photo/2022/01/23/03/08/farming-6959629_1280.jpg)">
                                      <div class="inner">
                                          <p>El café es un fruto</p>
                            <span>Sabias que...</span>
                                      </div>
                                  </div>
                                  <div class="back">
                                      <div class="inner">
                                          <p> Aunque lo consumimos como una bebida, el café proviene de un fruto llamado cereza de café. </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col" ontouchstart="this.classList.toggle('hover');">
                              <div class="container">
                                  <div class="front" style="background-image: url(https://cdn.pixabay.com/photo/2019/05/17/04/58/agriculture-4208863_1280.jpg)">
                                      <div class="inner">
                                          <p>Agricultura sostenible es clave para el futuro</p>
                            <span>Sabias que...</span>
                                      </div>
                                  </div>
                                  <div class="back">
                                      <div class="inner">
                                          <p>Práctica busca producir alimentos de manera respetuosa con el medio ambiente y las comunidades locales</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col" ontouchstart="this.classList.toggle('hover');">
                              <div class="container">
                                  <div class="front" style="background-image: url(https://cdn.pixabay.com/photo/2018/03/21/16/22/greenhouse-3247271_960_720.jpg)">
                                      <div class="inner">
                                          <p>Agricultura urbana gana terreno</p>
                            <span>Sabias que...</span>
                                      </div>
                                  </div>
                                  <div class="back">
                                      <div class="inner">
                                          <p>Más personas cultivan sus propios alimentos en espacios urbanos, como azoteas, balcones y jardines comunitarios.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col" ontouchstart="this.classList.toggle('hover');">
                              <div class="container">
                                  <div class="front" style="background-image: url(https://cdn.pixabay.com/photo/2020/03/17/16/43/faucet-4941060_960_720.jpg)">
                                      <div class="inner">
                                          <p>Agricultura industrial tiene un impacto ambiental</p>
                            <span>Sabias que...</span>
                                      </div>
                                  </div>
                                  <div class="back">
                                      <div class="inner">
                                          <p>Uso excesivo de fertilizantes y pesticidas para areas de cultivo, son consecuencias negativas de la agricultura industrial.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
               </div>
               <br>

    <!-- comentarios Principal -->
	<div class="html-comentarios"> <div class="asterizco"> <div class="cuerpo">
        <section class="contenedor-comentarios">
    <div class="area-comentar">
        <div class="avatar">
            <img src="https://cdn.pixabay.com/photo/2019/10/18/17/35/flowers-4559785_640.jpg" alt="img">
        </div>
        <form action="#" method="post" class="inputs-comentarios">
            <textarea name="" class="area-comentario"></textarea>
            <div class="botones-comentar">
                <div class="boton-subir-archivo">
                    <label class="boton-file" for="adjuntar">
                        <i class="far fa-image"></i>
                        Adjuntar archivo
                    </label>
                    <input type="file" name="" value="" placeholder="" id="adjuntar">
                </div>
                <button class="boton-enviar" type="sutmit">
                    <i class="fas fa-paper-plane"></i>
                    Enviar
                </button>
            </div>
        </form>
    </div>
    <div class="publicacion-realizada">
        <div class="usuario-publico">
            <div class="avatar">
                <img src="https://cdn.pixabay.com/photo/2019/10/18/17/35/flowers-4559785_640.jpg" alt="img">
            </div>
            <div class="contenido-publicacion">
                <h4>Carolina de la valle</h4>
                <ul>
                    <li>Hace 3 min</li>
                </ul>
            </div>
            <div class="menu-comentario">
                <i class="fas fa-pen"></i>
                <ul class="menu">
                    <li><a href="">Editar</a></li>
                    <li><a href="">Eliminar</a></li>
                </ul>
            </div>
        </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores aliquam possimus, doloremque repellat assumenda ipsam magni ducimus, dolorem explicabo</p>
        <div class="archivo-publicado">
            <img src="https://cdn.pixabay.com/photo/2019/10/18/17/35/flowers-4559785_640.jpg" alt="img">
        </div>
        <div class="botones-comentario">
            <button type="" class="boton-puntuar">
                <i class="fas fa-thumbs-up"></i>
                45
            </button>
            <button type="" class="boton-responder">
                Comentar
            </button>
        </div>
    </div>
    <div class="comentarios-usuarios">
        <!-- comentario principal -->
        <div class="comentario-principal-usuario">
            <div class="avatar">
                <img src="https://cdn.pixabay.com/photo/2019/10/18/17/35/flowers-4559785_640.jpg" alt="img">
            </div>
            <div class="comentario">
                <div class="usuario-comentario">
                    <div class="texto">
                        <a href="#" title="" class="nombre-usuario">Camila valle</a> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur necessitatibus, error debitis provident obcaecati blanditiis incidunt amet suscipit libero praesentium ducimus omnis harum commodi nobis modi perspiciatis? Quia, facilis.
                        <div class="menu-comentario">
                            <i class="fas fa-pen"></i>
                            <ul class="menu">
                                <li><a href="">Editar</a></li>
                                <li><a href="">Eliminar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="botones-comentario">
                        <button type="" class="boton-puntuar">
                            <i class="fas fa-thumbs-up"></i>
                            5
                        </button>
                        <button type="" class="boton-responder">
                            responrder
                        </button>
                        <span class="tiempo-comentario">
                            hece 3 min
                        </span>
                    </div>
                </div>

                <!-- contenedor sub comentarios -->
                <div class="contenedor-sub-comentarios">
                    <!-- sub-comentario uno -->
                    <div class="comentario-principal-usuario">
                        <div class="avatar">
                            <img src="https://cdn.pixabay.com/photo/2019/10/18/17/35/flowers-4559785_640.jpg" alt="img">
                        </div>
                        <div class="comentario">
                            <div class="usuario-comentario">
                                <div class="texto">
                                    <a href="#" title="" class="nombre-usuario">Estevan Hernandez</a> Lorem ipsum dolor sit amet adipisicing elit, sed do eiusmod
                                    <div class="menu-comentario">
                                        <i class="fas fa-pen"></i>
                                        <ul class="menu">
                                            <li><a href="">Editar</a></li>
                                            <li><a href="">Eliminar</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="botones-comentario">
                                    <button type="" class="boton-puntuar">
                                        <i class="fas fa-thumbs-up"></i>
                                        12
                                    </button>
                                    <button type="" class="boton-responder">
                                        responrder
                                    </button>
                                    <span class="tiempo-comentario">
                                        hece 3 min
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="comentar-publicacion">
            <div class="avatar">
                <img src="https://cdn.pixabay.com/photo/2019/10/18/17/35/flowers-4559785_640.jpg" alt="img">
            </div>
           <form action="#" method="post" class="comentar-comentario">
               <input type="text" name="" value="" placeholder="">
               <button type="" class="boton-enviar">
                   <i class="fas fa-paper-plane"></i>
               </button>
           </form>
        </div>
        
    </div>
</section>
</div>
</div>
</div>
    
    
    <br>
               <!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
    <div id="footer-container"></div>  
    </footer>

      <!--      SCRIPT DEL HOME     -->
    <script src="/js/homemain.js"></script>
    <!--      SCRIPT PARA ANIMACION DEL MENU    -->
    
    <!-- SCRIPT DE NAVBAR -->
     <script src="/components/usuario/nav-bar.js"></script>
     <!-- SCRIPT DE FOOTER -->
      <script src="/components/usuario/footer.js"></script>
      <script src="/js/loadermain.js"></script>
</body>
</html>
