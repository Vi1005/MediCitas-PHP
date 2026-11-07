
<?php
$titulo = "Doctores";
$pagina = "doctores";
include "header.php";
?>

<h1 class="mt-4">Doctores</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">
        <a href="index.php">Inicio</a>
    </li>
    <li class="breadcrumb-item active">Doctores</li>
</ol>

<div class="card mb-4">

    <div class="card-header">
        <i class="fas fa-user-md me-1"></i>
        Doctores Disponibles
    </div>

    <div class="card-body">

        <p>
            Listado demostrativo de los profesionales
            médicos disponibles en MediCitas.
        </p>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>Horario</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Laura Pérez</td>
                        <td>Medicina General</td>
                        <td>8:00 AM - 12:00 PM</td>
                        <td>
                            <span class="badge bg-success">
                                Disponible
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>Carlos Rodríguez</td>
                        <td>Cardiología</td>
                        <td>1:00 PM - 5:00 PM</td>
                        <td>
                            <span class="badge bg-success">
                                Disponible
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>Mariana Torres</td>
                        <td>Pediatría</td>
                        <td>9:00 AM - 1:00 PM</td>
                        <td>
                            <span class="badge bg-secondary">
                                Horario de ejemplo
                            </span>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

        <a href="agendar-cita.php" class="btn btn-primary">
            <i class="fas fa-calendar-plus me-1"></i>
            Agendar cita
        </a>

    </div>
</div>

<?php include "footer.php"; ?>
