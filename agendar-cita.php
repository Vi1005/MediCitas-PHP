
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita - MediCitas</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <main class="container mt-5">
        <h1>Agendar cita médica</h1>
        <p>Formulario de ejemplo para solicitar una cita.</p>

        <form>
            <div class="mb-3">
                <label for="paciente" class="form-label">
                    Nombre del paciente
                </label>
                <input id="paciente" type="text"
                       class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">
                    Fecha de la cita
                </label>
                <input id="fecha" type="date"
                       class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="doctor" class="form-label">
                    Doctor
                </label>
                <select id="doctor" class="form-select">
                    <option>Laura Pérez</option>
                    <option>Carlos Rodríguez</option>
                </select>
            </div>

            <button type="button" class="btn btn-primary">
                Agendar cita
            </button>
        </form>

        <p class="text-muted mt-3">
            Formulario demostrativo. No guarda información.
        </p>

        <a href="index.php">Volver al inicio</a>
    </main>
</body>
</html>
