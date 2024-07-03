<?php
include_once "../model/inicio.php";
if ($getFromU->loggedIn() === false) {
    header('Location: ../index.php');
}

$seleccion = $getFromU->FotoFetch($_SESSION['UsuarioId']);
$seleccion = '"' . $seleccion . '"';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/images/bolsa-de-dinero.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="../static/css/cuerpo.css">
    <link rel="stylesheet" href="../static/css/11-Cambiar-Password.css">
    <link rel="stylesheet" href="../static/css/7-Fecha.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/css/yearpicker.css">
    <link rel="stylesheet" href="../static/css/6-Gestion-Gastos.css">
    <link rel="stylesheet" href="../static/css/aprende.css">
    <script src="../static/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../static/js/yearpicker.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>Gestiona tu Dinero</title>
</head>

<body class="overlay-scrollbar sidebar-expand">
    <!-- Navbar -->
    <div class="navbar">
        <!-- nav-izquierda -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class='nav-link'>
                    <i class="fas fa-bars" onclick="colapsarSidebar()"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="3-Panel.php">
                    <img src="../static/images/bolsa-de-dinero.png" alt="logo" class="logo">
                </a>
            </li>
        </ul>

        <!-- fin nav izquierda  -->
        <h1 class="navbar-text">Gestiona tu Dinero</h1>
        <!-- nav derecha  -->
        <ul class="navbar-nav nav-right">
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="cambiarTema()">
                    <i class="fas fa-moon dark-icon"></i>
                    <i class="fas fa-sun light-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <div class="avt dropdown">
                    <img src=<?php echo $seleccion ?> alt="" class="dropdown-toggle" data-toggle="user-menu">
                    <ul id="user-menu" class="dropdown-menu">
                        <li class="dropdown-menu-item">
                            <a href="10-Perfil.php" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <span>Perfil</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="cerrar-sesion.php" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <span>Cerrar sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <!-- fin navbar -->
    <!-- sidebar -->
    <div class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="3-Panel.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span>
                        Inicio
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="4-Añadir-Presupuesto.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-coins"></i>
                    </div>
                    <span>
                        Presupuesto
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" id="Gasto" onclick="abrir1()">
                <a href="#" class="sidebar-nav-link">
                    <div>
                        <i class="fa fa-plus-circle"></i>
                    </div>
                    <span>
                        Gastos
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display: none;">
                <a href="5-Añadir-Gasto.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <span>
                        Añadir Gasto
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display: none">
                <a href="6-Gestion-Gastos.php" class="sidebar-nav-link" style="display: none">
                    <div>
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <span>
                        Registro de gastos
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" id="ER" onclick="abrir2()">
                <a href="#" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <span>
                        Reporte de Gastos
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display:none;">
                <a href="7-Fecha.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <span>
                        Fecha concreta
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display: none;">
                <a href="8-Mensual.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-calendar-week"></i>
                    </div>
                    <span>
                        Mensual
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display:none;">
                <a href="9-Anual.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-calendar"></i>
                    </div>
                    <span>
                        Anual
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" id="Aprende" onclick="abrir3()">
                <a href="#" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-book"></i>
                    </div>
                    <span>
                        ¡Aprende!
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display: none;">
                <a href="12-Crear-Presupuesto.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <span>
                        Crear un Presupuesto
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display: none;">
                <a href="13-Deuda.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <span>
                        Acaba con<br> tu Deuda
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display: none;">
                <a href="14-Colchon-Seguridad.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <span>
                        Colchón de Seguridad
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item" style="display: none;">
                <a href="15-Inversion.php" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <span>
                        Inversión
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- fin sidebar-->
    <!-- inicio footer-->
    <footer>
        <p>&copy;Eder Fernández Llorente - Web 2024</p>
    </footer>
    <!-- fin footer-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="../static/js/cuerpo.js"></script>
</body>