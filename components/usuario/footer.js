const footerHTML = ` 
<div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img  src="/icon.png" alt="AGRO-DATA" >
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>AGRO-DATA</h2>
                <p>HACIENDO MAS COMODA LAS LABORES DEL AGRICULTOR</p>
                <p>CUIDANDO TU CULTIVO CON LAS MEJORES RECOMENDACIONES</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class='bx bxl-facebook-circle'></a>
                    <a href="#" class='bx bxl-instagram-alt'></a>
                    <a href="#" class='bx bxl-twitter'> </a>
                    <a href="#" class='bx bxl-youtube'>  </a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>AGRO-DATA</b> - Todos los Derechos Reservados.</small>
        </div>

`;

const footerContainer = document.getElementById('footer-container');
footerContainer.innerHTML = footerHTML;