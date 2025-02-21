<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Cargar jQuery antes del Datepicker -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <style>
        .navbar-custom {
            background-color: #343a40;
            /* Color oscuro */
        }

        .navbar-custom .navbar-brand img {
            max-height: 45px;
            /* Tamaño del logo */
        }

        .navbar-custom .nav-link {
            color: white;
        }

        .navbar-custom .dropdown-menu {
            right: 0;
            left: auto;
        }
    </style>
</head>

<body>

    <!-- Barra de navegación fija superior -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container-fluid">
            <!-- Logo y Nombre de la Empresa -->
            <a class="navbar-brand" href="<?= base_url('dashboard') ?>">
                <img src="<?= base_url('img/supralive.jpg') ?>" alt="Logo">
                SUPRALIVE
            </a>

            <!-- Usuario Logueado y Menú de Cerrar Sesión -->
            <div class="dropdown ms-auto">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle"></i> <?= session('usuario') ?> <!-- Nombre de usuario -->
                </a>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
        
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-5 pt-5">