const navbarHTML = `
  <nav>
        <div class="logo">
            <img src="/icon.png" class="logo">
        </div>
        <!--      ENLACES DE NAVEGACION   -->
        <ul id="menuList">
                <li><a href="/components/usuario/home.html">INICIO</a></li>
                <li><a href="/components/huerta/cultivos.html">CULTIVOS</a></li>
                <li><a href="/components/huerta/fertilizantes.html">FERTILIZANTES</a></li>
                <li><a href="/components/huerta/pesticidas.html">PESTICIDAS</a></li>
                <li><a href="/components/huerta/plagas.html">PLAGAS</a></li>
                <li><a href="/components/usuario/calculadoraAgri.html">CALCULADORA AGRICOLA</a></li>
                <li><a href="/components/usuario/calendario.html">CALENDARIO</a></li>                        
                <li><a href="/components/usuario/somos.html">NOSOTROS</a></li>
                <li><a href="/index.html">SALIR</a></li>
        </ul>
        <!--    ICONO DEL MENU     -->
        <div class="menu-icon">
            <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
    </nav>

`;

const navbarContainer = document.getElementById('navbar-container');
navbarContainer.innerHTML = navbarHTML;