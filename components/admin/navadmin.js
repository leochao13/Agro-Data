const navadminHTML = `
    <aside>
            <!-- Logo y nombre -->
            <div class="top">
                <div class="logo">
                    <img src="/icon.png" alt="">
                    <h2>AGRO-<span class="success">DATA</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <!-- Enlaces -->
            <div class="sidebar">
                <a href="/components/admin/home.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Panel de control</h3>
                </a>
                <a href="/components/admin/clientes.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Usuarios</h3>
                </a>
                <a href="/components/admin/orders.php">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Subcripciones Pro</h3>
                </a>
                <a href="/components/admin/analytics.php">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Graficas</h3>
                </a>
                
                <a href="/components/admin/message.php">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Comentarios</h3>
                    <span class="message-count">4</span>
                </a>
                <a href="/components/admin/productos.php">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Cultivos</h3>
                </a>
                <a href="/components/admin/reports.php">
                    <span class="material-icons-sharp">report_gmailerrorred</span>
                    <h3>Pesticidas</h3>
                </a>
                <a href="/components/admin/caja.php">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Fertilizantes</h3>
                </a>
                <a href="/components/admin/add.php">
                    <span class="material-icons-sharp">add</span>
                    <h3>Plagas</h3>
                </a>
                <a>
                <form action="/php/exit.php" method="post">
                <button type="submit">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </button>
                 </form>
                </a>
            </div>
        </aside>
        <!-- Final del aside  -->
`;

const navadminContainer = document.getElementById('navadmin-container');
navadminContainer.innerHTML = navadminHTML;