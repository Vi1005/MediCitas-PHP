
<?php
$titulo = $titulo ?? 'Panel Administrativo';
$pagina = $pagina ?? '';

function enlaceMenu($archivo, $nombre, $icono, $paginaActual, $clave)
{
    $activo = $paginaActual === $clave ? ' active' : '';

    echo '<a class="nav-link' . $activo . '" href="' . $archivo . '">
        <div class="sb-nav-link-icon">
            <i class="fas fa-' . $icono . '"></i>
        </div>
        ' . $nombre . '
    </a>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($titulo); ?> - MediCitas</title>

    <link href="css/styles.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
          rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
            crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <a class="navbar-brand ps-3" href="index.php">
        <i class="fas fa-heartbeat me-2"></i>MediCitas
    </a>

    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
            id="sidebarToggle" type="button">
        <i class="fas fa-bars"></i>
    </button>

    <div class="ms-auto me-4 text-white">
        <i class="fas fa-user-circle me-1"></i>
        Administrador
    </div>
</nav>

<div id="layoutSidenav">

    <div id="layoutSidenav_nav">

        <nav class="sb-sidenav accordion sb-sidenav-dark"
             id="sidenavAccordion">

            <div class="sb-sidenav-menu">
                <div class="nav">

                    <div class="sb-sidenav-menu-heading">
                        PRINCIPAL
                    </div>

                    <?php
                    enlaceMenu(
                        'index.php',
                        'Inicio',
                        'tachometer-alt',
                        $pagina,
                        'inicio'
                    );
                    ?>

                    <div class="sb-sidenav-menu-heading">
                        GESTIÓN MÉDICA
                    </div>

                    <?php
                    enlaceMenu(
                        'tables.php',
                        'Pacientes',
                        'users',
                        $pagina,
                        'pacientes'
                    );

                    enlaceMenu(
                        'doctores.php',
                        'Doctores',
                        'user-md',
                        $pagina,
                        'doctores'
                    );

                    enlaceMenu(
                        'agendar-cita.php',
                        'Agendar cita',
                        'calendar-plus',
                        $pagina,
                        'citas'
                    );
                    ?>

                    <div class="sb-sidenav-menu-heading">
                        REPORTES
                    </div>

                    <?php
                    enlaceMenu(
                        'charts.php',
                        'Estadísticas',
                        'chart-area',
                        $pagina,
                        'estadisticas'
                    );
                    ?>

                </div>
            </div>

            <div class="sb-sidenav-footer">
                <div class="small">Sesión:</div>
                Administrador MediCitas
            </div>

        </nav>
    </div>

    <div id="layoutSidenav_content">

        <main>
            <div class="container-fluid px-4">
