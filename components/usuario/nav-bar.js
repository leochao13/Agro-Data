const navbarHTML = `
  <nav>
        <div class="logo">
            <img src="/icon.png" class="logo">
        </div>
        <!--      ENLACES DE NAVEGACION   -->
        <ul id="menuList">
                <li><a href="/components/usuario/home.php">INICIO</a></li>
                <li><a href="/components/huerta/cultivos.php">CULTIVOS</a></li>
                <li><a href="/components/huerta/fertilizantes.php">FERTILIZANTES</a></li>
                <li><a href="/components/huerta/pesticidas.php">PESTICIDAS</a></li>
                <li><a href="/components/huerta/plagas.php">PLAGAS</a></li>
                <li><a href="/components/usuario/calculadoraAgri.php">CALCULADORA AGRICOLA</a></li>
                <li><a href="/components/usuario/calendario.php">SEGUIMIENTO</a></li>                        
                <li><a href="/components/usuario/somos.php">NOSOTROS</a></li>
                <li><a><form action="/php/exit.php" method="post">
               <button type="submit"><i class='bx bxs-exit'></i></button>
              </form></a></li>
        </ul>
        <!--    ICONO DEL MENU     -->
        <div class="menu-icon">
            <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
    </nav>
    <script src="/js/homemain.js"></script>
`;

const navbarContainer = document.getElementById('navbar-container');
navbarContainer.innerHTML = navbarHTML;

let menuList = document.getElementById("menuList")
menuList.style.maxHeight = "0px";

function toggleMenu(){
    if(menuList.style.maxHeight == "0px")
    {
        menuList.style.maxHeight = "300px";
    }
    else{
        menuList.style.maxHeight = "0px";
    }
}