<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresos</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">


</head>

<body>
    <?= view('layouts/header') ?>
    <?= view('layouts/alertas') ?>
    <div class="container">
        <h2>Ingreso de Movimientos</h2>

        <!-- Tabla con formulario en la primera fila -->
        <div class="table-container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Fecha Ingreso</th>
                        <th>Código</th>
                        <th>Ubicación</th>
                        <th>Cantidad</th>
                        <th>Observaciones</th>
                        <th>Responsable</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fila para agregar un nuevo ingreso -->
                    <tr>
                        <form action="<?= base_url('ingresos/guardar') ?>" method="post">
                            <?= csrf_field() ?>
                            <td><input type="date" class="form-control" name="fechaingreso" required></td>
                            <td><input type="text" class="form-control" name="codigo" placeholder="Código" required></td>
                            <td>
                                <select class="form-control" name="ubicacion" required>
                                    <?php foreach ($ubicaciones as $ubicacion): ?>
                                        <option value="<?= $ubicacion['IDubicacion'] ?>"><?= $ubicacion['ubicacion'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" class="form-control" name="cantidad" required></td>
                            <td><input type="text" class="form-control" name="observaciones"></td>
                            <td><input type="text" class="form-control" name="responsable" required></td>
                            <td><button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button></td>
                        </form>
                    </tr>

                    <!-- Filas con ingresos existentes -->
                    <?php foreach ($ingresos as $ingreso): ?>
                        <tr>
                            <td><?= date('Y-m-d', strtotime($ingreso['fechaingreso'])) ?></td>
                            <td><?= $ingreso['codigo'] ?></td>
                            <td><?= $ingreso['nombre_ubicacion'] ?></td>
                            <td><?= $ingreso['cantidad'] ?></td>
                            <td><?= $ingreso['observaciones'] ?></td>
                            <td><?= $ingreso['responsable'] ?></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-danger" onclick="confirmarEliminacion(<?= $ingreso['IDmovimiento'] ?>)">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Paginación con el estilo bootstrap -->
        <?= $pager->links('default', 'bootstrap') ?>
    </div>


    <?= view('layouts/footer') ?>

</body>

<script>
    function confirmarEliminacion(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción no se puede deshacer.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('ingresos/eliminar/') ?>" + id;
            }
        });
    }
</script>

</html>