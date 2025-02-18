<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicaciones</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?= view('layouts/header') ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Ubicaciones de Bodega</h2>

        <!-- Mensajes de éxito o error -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Formulario para agregar ubicaciones -->
        <form action="<?= base_url('ubicaciones/guardar') ?>" method="post" class="mb-4">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="ubicacion" class="form-control" placeholder="Ingrese una nueva ubicación" required>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus"></i> Agregar Ubicación
                    </button>
                </div>
            </div>
        </form>

        <!-- Tabla de ubicaciones -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ubicaciones as $ubicacion) : ?>
                    <tr>
                        <td><?= esc($ubicacion['ubicacion']) ?></td>
                        <td class="text-center">
                            <button class="btn btn-danger btn-sm eliminar-btn" data-url="<?= base_url('ubicaciones/eliminar/' . $ubicacion['IDubicacion']) ?>">
                                <i class="fas fa-trash"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- En cualquier vista donde necesites paginación -->
         
        <?= $pager->links('default', 'bootstrap') ?>


        <a href="<?= base_url('dashboard') ?>" class="btn btn-secondary mt-3">
            <i class="fas fa-arrow-left"></i> Volver al Dashboard
        </a>

    </div>
    </div>

    <!-- Script para confirmación de eliminación con SweetAlert2 -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".eliminar-btn").forEach(button => {
                button.addEventListener("click", function() {
                    const url = this.getAttribute("data-url");

                    Swal.fire({
                        title: "¿Estás seguro?",
                        text: "Esta acción no se puede deshacer.",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Sí, eliminar",
                        cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = url;
                        }
                    });
                });
            });
        });
    </script>

    <?= view('layouts/footer') ?>

</body>

</html>