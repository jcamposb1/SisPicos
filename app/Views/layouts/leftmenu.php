<style>
        /* Asegurarse de que el sidebar esté pegado al lado izquierdo */
        #sidebarMenu {
            position: fixed;
            top: 56px;
            left: 0;
            height:  calc(100vh - 56px);
            z-index: 100;
            background-color: #f8f9fa;
            width: 210px;
        }

        /* Asegura que el contenido principal tenga el espacio adecuado */
        main {
            margin-left: 210px;
            padding-top: 15px; /* Ajusta esto dependiendo del ancho de tu sidebar */
        }
        footer {
            z-index: 101;
            position: relative;
        }

        header {
            z-index: 101;
            position: relative;
        }
    </style>
<div class="container-fluid" >
        <div class="row">
            <!-- Menú lateral fijo -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('rutas') ?>">
                                <i class="fas fa-home"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('rutas/puntos') ?>">
                                <i class="fas fa-road"></i>
                                Puntos de Gestión
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('rutas/empresa') ?>">
                                <i class="fas fa-building"></i>
                                Lugar o Empresa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('rutas/eventuales') ?>">
                                <i class="fas fa-users"></i>
                                Eventuales
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>