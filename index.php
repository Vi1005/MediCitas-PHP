
<?php
$titulo = "Panel Administrativo";
$pagina = "inicio";
include "header.php";
?>

<h1 class="mt-4">Panel de Citas Médicas</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Inicio</li>
</ol>

<div class="alert alert-info">
    Bienvenido a MediCitas, un panel demostrativo
    para la gestión de citas médicas.
</div>

<div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <h5>Pacientes registrados</h5>
                <h2>5</h2>
            </div>
            <div class="card-footer">
                <a class="text-white" href="tables.php">
                    Ver pacientes
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                <h5>Citas pendientes</h5>
                <h2>2</h2>
            </div>
            <div class="card-footer">
                <a class="text-white" href="agendar-cita.php">
                    Ver formulario
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h5>Citas confirmadas</h5>
                <h2>3</h2>
            </div>
            <div class="card-footer">
                <a class="text-white" href="charts.php">
                    Ver estadísticas
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
                <h5>Citas canceladas</h5>
                <h2>0</h2>
            </div>
            <div class="card-footer">
                <span>Sin cancelaciones</span>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-lg-7">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-calendar-alt me-1"></i>
                Próximas citas
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Paciente</th>
                                <th>Doctor</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ana Martínez</td>
                                <td>Laura Pérez</td>
                                <td>12/11/2026</td>
                                <td>
                                    <span class="badge bg-success">
                                        Confirmada
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>José Ramírez</td>
                                <td>Carlos Rodríguez</td>
                                <td>13/11/2026</td>
                                <td>
                                    <span class="badge bg-warning text-dark">
                                        Pendiente
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>María Fernández</td>
                                <td>Laura Pérez</td>
                                <td>14/11/2026</td>
                                <td>
                                    <span class="badge bg-success">
                                        Confirmada
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-hospital me-1"></i>
                Administración médica
            </div>

            <div class="card-body">
                <p>Accede rápidamente a las principales secciones del sistema.</p>

                <a href="tables.php" class="btn btn-primary mb-2">
                    Pacientes
                </a>

                <a href="doctores.php" class="btn btn-success mb-2">
                    Doctores
                </a>

                <a href="agendar-cita.php" class="btn btn-warning mb-2">
                    Agendar cita
                </a>

                <a href="charts.php" class="btn btn-secondary mb-2">
                    Estadísticas
                </a>
            </div>
        </div>
    </div>

</div>

<p class="text-muted">
    Los datos mostrados son ficticios y se utilizan
    únicamente para esta práctica académica.
</p>

<?php include "footer.php"; ?>
