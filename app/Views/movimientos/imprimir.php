<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Etiqueta de Movimiento</title>
    <style>
        body {
            width: 10cm;
            height: 7.5cm;
            font-family: Arial, sans-serif;
            text-align: center;
            border: 1px solid black;
            padding: 10px;
        }
        img {
            width: 100%;
        }
    </style>
</head>
<body onload="window.print();">
    <h2><?= esc($movimiento['tipo']) ?></h2>
    <p><strong>Código:</strong> <?= esc($movimiento['codigo']) ?></p>
    <p><strong>Ubicación:</strong> <?= esc($movimiento['nombre_ubicacion']) ?></p>
    <p><strong>Cantidad:</strong> <?= esc($movimiento['cantidad']) ?></p>
    <img src="data:image/png;base64,<?= $codigoBarras ?>" alt="Código de barras">
</body>
</html>
