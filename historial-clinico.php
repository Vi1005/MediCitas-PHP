
<?php
$titulo = "Historial Clínico";
$pagina = "historial";
include "header.php";
?>

<h1 class="mt-4">Historial Clínico</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">
        <a href="index.php">Inicio</a>
    </li>
    <li class="breadcrumb-item active">
        Historial Clínico
    </li>
</ol>

<div class="alert alert-info">
    Registros médicos de demostración.
    Toda la información es ficticia.
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-notes-medical me-1"></i>
        Historial de Consultas
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>Código</th>
                        <th>Paciente</th>
                        <th>Especialidad</th>
                        <th>Doctor</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>HC-001</td>
                        <td>Ana Martínez</td>
                        <td>Medicina General</td>
                        <td>Laura Pérez</td>
                        <td>12/11/2026</td>
                        <td>
                            <span class="badge bg-secondary">
                                Ejemplo
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>HC-002</td>
                        <td>José Ramírez</td>
                        <td>Cardiología</td>
                        <td>Carlos Rodríguez</td>
                        <td>13/11/2026</td>
                        <td>
                            <span class="badge bg-secondary">
                                Ejemplo
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>HC-003</td>
                        <td>María Fernández</td>
                        <td>Medicina General</td>
                        <td>Laura Pérez</td>
                        <td>14/11/2026</td>
                        <td>
                            <span class="badge bg-secondary">
                                Ejemplo
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
