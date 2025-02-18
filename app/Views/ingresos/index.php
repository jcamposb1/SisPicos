<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresos</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?= view('layouts/header') ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Ingresos de Picos de Bodega</h2>
        
        <table class="table table-striped table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th>Número de Ingreso</th>
                    <th>Fecha de Ingreso</th>
                    <th>Código</th>
                    <th>Ubicación</th>
                    <th>Cantidad Ingresada</th>
                    <th>Observaciones</th>
                    <th>Responsable</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>001</td>
                    <td>2024-02-14</td>
                    <td>PT45865</td>
                    <td>O1</td>
                    <td>50</td>
                    <td>Ingreso de bodega</td>
                    <td>Hernan Teran</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>2024-02-15</td>
                    <td>PT85560</td>
                    <td>E25</td>
                    <td>100</td>
                    <td>Ingreso de Bodega</td>
                    <td>Hernan Teran</td>
                </tr>
            </tbody>
        </table>
        
        <a href="<?= base_url('dashboard') ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Volver al Dashboard
        </a>
    </div>

    <?= view('layouts/footer') ?>
</body>
</html>
