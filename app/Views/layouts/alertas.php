<div class="container mt-3">
    <!-- Modal -->
    <div class="modal fade" id="alertaModal" tabindex="-1" aria-labelledby="alertaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertaModalLabel">AVISO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="alertaMensaje">
                    <!-- Aquí muestro el mensaje Jcampos 25/02/2025 -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const mensaje = "<?= session()->get('success') ?: session()->get('error') ?>";
        if (mensaje) {
            const alertaModal = new bootstrap.Modal(document.getElementById('alertaModal'));
            document.getElementById('alertaMensaje').textContent = mensaje;
            alertaModal.show();
        }
    });

    function confirmarEliminacionIng(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción cambiará el estado del registro a inactivo.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, cambiar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('ingresos/eliminar/') ?>" + id;
            }
        });
    }
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebarMenu");

        if (menuToggle && sidebar) {
            menuToggle.addEventListener("click", function () {
                sidebar.classList.toggle("active");
            });
        }
    });
    function confirmarEliminacionEgr(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción cambiará el estado del registro a inactivo.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, cambiar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('egresos/eliminar/') ?>" + id;
            }
        });
    }
</script>
