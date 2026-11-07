
            </div>
        </main>

        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">
                        MediCitas &copy; 2026
                    </div>
                    <div class="text-muted">
                        Proyecto académico de demostración
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>

<?php if (($pagina ?? '') === 'pacientes'): ?>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabla = document.getElementById("datatablesSimple");

    if (tabla && typeof simpleDatatables !== "undefined") {
        new simpleDatatables.DataTable(tabla, {
            searchable: true,
            perPage: 10
        });
    }
});
</script>
<?php endif; ?>

<?php if (($pagina ?? '') === 'estadisticas'): ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.8/dist/chart.umd.min.js"></script>

<script>
const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"];

new Chart(document.getElementById("graficoCitas"), {
    type: "line",
    data: {
        labels: meses,
        datasets: [{
            label: "Citas registradas",
            data: [12, 18, 15, 25, 22, 30],
            borderColor: "#0d6efd",
            backgroundColor: "rgba(13,110,253,0.12)",
            fill: true,
            tension: 0.3
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

new Chart(document.getElementById("graficoDoctores"), {
    type: "bar",
    data: {
        labels: ["Medicina General", "Cardiología", "Pediatría", "Dermatología"],
        datasets: [{
            label: "Citas por especialidad",
            data: [30, 18, 24, 12],
            backgroundColor: ["#0d6efd", "#198754", "#ffc107", "#6f42c1"]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

new Chart(document.getElementById("graficoEstados"), {
    type: "doughnut",
    data: {
        labels: ["Confirmadas", "Pendientes", "Canceladas"],
        datasets: [{
            data: [55, 30, 15],
            backgroundColor: ["#198754", "#ffc107", "#dc3545"]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});
</script>
<?php endif; ?>

</body>
</html>
