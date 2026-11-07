
<?php
$titulo = "Pacientes";
$pagina = "pacientes";
include "header.php";
?>

<h1 class="mt-4">Pacientes Registrados</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">
        <a href="index.php">Inicio</a>
    </li>
    <li class="breadcrumb-item active">Pacientes</li>
</ol>

<div class="card mb-4">

    <div class="card-header">
        <i class="fas fa-users me-1"></i>
        Listado de Pacientes
    </div>

    <div class="card-body">

        <p>
            En esta sección se muestran pacientes ficticios
            utilizados para demostrar el funcionamiento de MediCitas.
        </p>

        <div class="table-responsive">

            <table id="datatablesSimple">

                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Documento</th>
                        <th>Edad</th>
                        <th>Doctor</th>
                        <th>Fecha de cita</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Ana Martínez</td>
                        <td>PAC-001</td>
                        <td>25</td>
                        <td>Laura Pérez</td>
                        <td>12/11/2026</td>
                        <td>Confirmada</td>
                    </tr>

                    <tr>
                        <td>José Ramírez</td>
                        <td>PAC-002</td>
                        <td>42</td>
                        <td>Carlos Rodríguez</td>
                        <td>13/11/2026</td>
                        <td>Pendiente</td>
                    </tr>

                    <tr>
                        <td>María Fernández</td>
                        <td>PAC-003</td>
                        <td>31</td>
                        <td>Laura Pérez</td>
                        <td>14/11/2026</td>
                        <td>Confirmada</td>
                    </tr>

                    <tr>
                        <td>Pedro López</td>
                        <td>PAC-004</td>
                        <td>38</td>
                        <td>Carlos Rodríguez</td>
                        <td>16/11/2026</td>
                        <td>Pendiente</td>
                    </tr>

                    <tr>
                        <td>Lucía Gómez</td>
                        <td>PAC-005</td>
                        <td>29</td>
                        <td>Laura Pérez</td>
                        <td>17/11/2026</td>
                        <td>Confirmada</td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>
</div>

<?php include "footer.php"; ?>
