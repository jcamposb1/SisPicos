<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?= view('layouts/header') ?>
    
    <div class="container mt-5" style="min-height: calc(100vh - 150px);">
        <h2 class="text-center">Bienvenido al Sistema de Picos</h2>
        <div class="row mt-5 justify-content-center">
            <!-- Ingresos -->
            <div class="col-md-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-box-open fa-3x mb-3"></i>
                        <h5 class="card-title">INGRESOS</h5>
                        <p class="card-text">Ingresos de picos.</p>
                        <a href="<?= base_url('ingresos') ?>" class="btn btn-primary">Ir a Ingresos</a>
                    </div>
                </div>
            </div>
            <!-- Egresos -->
            <div class="col-md-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-truck fa-3x mb-3"></i>
                        <h5 class="card-title">EGRESOS</h5>
                        <p class="card-text">Egresos de picos .</p>
                        <a href="<?= base_url('egresos') ?>" class="btn btn-primary">Ir a Egresos</a>
                    </div>
                </div>
            </div>
            <!-- Saldos -->
            <div class="col-md-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-archive fa-3x mb-3"></i>
                        <h5 class="card-title">SALDOS</h5>
                        <p class="card-text">Saldos de Bodega.</p>
                        <a href="#" class="btn btn-primary">Ir a Saldos</a>
                    </div>
                </div>
            </div>
            <!-- Ubicaciones -->
            <div class="col-md-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-boxes fa-3x mb-3"></i>
                        <h5 class="card-title">UBICACIONES</h5>
                        <p class="card-text">Ubicaciones de Bodega.</p>
                        <a href="<?= base_url('ubicaciones')?>" class="btn btn-primary">Ir a ubicaciones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('layouts/footer') ?>
</body>

</html>