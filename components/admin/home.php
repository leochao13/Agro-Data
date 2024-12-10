
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="/css/adminstyle.css">
    <!--api de iconos -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="icon" href="/icon.png" type="image/x-icon">
</head>
<body>
<?php
      		include("/xampp/htdocs/php/restriccion.php");
      ?>   
    <div class="container">
        <!-- navegador admin -->
        <div id="navadmin-container"></div>
        <!-- inicia el dashboard -->
        <main>
            <h1>Panel de control</h1>
            <div class="date">
                <input type="date" name="" id="">
            </div>
            <div class="insights">
                <!-- Sales -->
                <div class="sales">
                    <span class="material-icons-sharp">
                        analytics
                    </span>
                        <div class="middle">
                                <div class="left">
                                    <h3>Total ventas</h3>
                                    <h1>$10,000</h1>
                                </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>81%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Ultimas 24 horas</small>
                </div>
                     <!-- ---------Final de ventas ------------->
                <div class="expenses">
                    <span class="material-icons-sharp">
                        bar_chart
                    </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Gastos</h3>
                                <h1>$14,000</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>62%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Ultimas 24 hours</small>
                    </div>
                    <!-- ---------Final de gastos ------------->
                <div class="income">
                    <span class="material-icons-sharp">
                        stacked_line_chart
                    </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total ingresos</h3>
                                <h1>$13,000</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>44%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Ultimas 24 hours</small>
                    </div>
                    <!-- ---------FInal de ingresos ------------->
            </div>
                <!-- Final del insigths -->
            <div class="recent-orders">
                <h2>Cultivos recientes</h2>
               <table>
                <thead>
                    <tr>
                        <th>Nombre del cultivo</th>
                        <th>Numero del cutivo</th>
                        <th>Pago</th>
                        <th>Estatus</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td> Foldable Mini Drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td> Foldable Mini Drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td> Foldable Mini Drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td> Foldable Mini Drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td> Foldable Mini Drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                </tbody>
               </table>
                <a href="#">Mostrar todo</a>
            </div>
        </main>
        <!-- ----------------Final del main ----------- -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>

                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hola de nuevo <b>Leonardo</b></p>
                        <small class="text-muted">Administrador</small>
                    </div>
                    <div class="profile-photo">
                        <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg">
                    </div>
                 </div>
            </div>  
            <!-- Final del Top -->
             <div class="recent-updates">
                <h2>Actualizaciones recientes</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b>received his order of night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b>received his order of night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b>received his order of night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Final de recientes updates -->
            <div class="sales-analytics">
                <h2>Analisis de Ventas</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Online Orders</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+38%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-sharp">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Offline Orders</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="danger">-38%</h5>
                        <h3>300</h3>
                    </div>
                </div>
                <div class="item customer">
                    <div class="icon">
                        <span class="material-icons-sharp">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>New Customer</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+28%</h5>
                        <h3>2349</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3><a href="/components/admin/add.php">Agregar cultivo</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/components/admin/navadmin.js"></script>
    <script src="/js/adminmain.js"></script>

</body>
</html>