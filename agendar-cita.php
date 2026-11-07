
<?php
$titulo = "Agendar Cita";
$pagina = "citas";
include "header.php";
?>

<h1 class="mt-4">Agendar Cita Médica</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">
        <a href="index.php">Inicio</a>
    </li>
    <li class="breadcrumb-item active">Agendar cita</li>
</ol>

<div class="row">
    <div class="col-lg-8">

        <div class="card mb-4">

            <div class="card-header">
                <i class="fas fa-calendar-plus me-1"></i>
                Formulario de Citas
            </div>

            <div class="card-body">

                <div class="alert alert-info">
                    Este formulario es demostrativo.
                    No almacena citas ni información personal.
                </div>

                <form>

                    <div class="mb-3">
                        <label for="paciente" class="form-label">
                            Nombre del paciente
                        </label>

                        <input
                            type="text"
                            id="paciente"
                            class="form-control"
                            placeholder="Ingrese el nombre del paciente"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">
                            Fecha de la cita
                        </label>

                        <input
                            type="date"
                            id="fecha"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="hora" class="form-label">
                            Hora de la cita
                        </label>

                        <input
                            type="time"
                            id="hora"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="doctor" class="form-label">
                            Seleccionar doctor
                        </label>

                        <select id="doctor" class="form-select">
                            <option value="">Seleccione un doctor</option>
                            <option value="1">Laura Pérez</option>
                            <option value="2">Carlos Rodríguez</option>
                            <option value="3">Mariana Torres</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="motivo" class="form-label">
                            Motivo de la consulta
                        </label>

                        <textarea
                            id="motivo"
                            class="form-control"
                            rows="3"
                            placeholder="Descripción general de la consulta"></textarea>
                    </div>

                    <button type="button"
                            class="btn btn-primary"
                            onclick="alert('Demostración: la cita no se ha guardado.')">
                        <i class="fas fa-calendar-check me-1"></i>
                        Agendar cita
                    </button>

                    <a href="index.php" class="btn btn-secondary">
                        Volver al inicio
                    </a>

                </form>

            </div>
        </div>

    </div>
</div>

<?php include "footer.php"; ?>
