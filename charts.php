
<?php
$titulo = "Estadísticas";
$pagina = "estadisticas";
include "header.php";
?>

<h1 class="mt-4">Estadísticas de Citas Médicas</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">
        <a href="index.php">Inicio</a>
    </li>
    <li class="breadcrumb-item active">Estadísticas</li>
</ol>

<div class="alert alert-info">
    Los siguientes gráficos muestran datos ficticios
    para demostrar el funcionamiento de MediCitas.
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-chart-area me-1"></i>
        Evolución de citas médicas
    </div>

    <div class="card-body">
        <div style="height: 320px;">
            <canvas id="graficoCitas"></canvas>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-6">
        <div class="card mb-4">

            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Citas por especialidad
            </div>

            <div class="card-body">
                <div style="height: 300px;">
                    <canvas id="graficoDoctores"></canvas>
                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-6">
        <div class="card mb-4">

            <div class="card-header">
                <i class="fas fa-chart-pie me-1"></i>
                Estado de las citas
            </div>

            <div class="card-body">
                <div style="height: 300px;">
                    <canvas id="graficoEstados"></canvas>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include "footer.php"; ?>
