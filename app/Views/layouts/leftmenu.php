<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">

<!-- Icono del menú hamburguesa -->
<div id="menu-toggle" class="menu-icon">
    <i class="fas fa-bars"></i>
</div>

<!-- Menú lateral -->
<nav id="sidebarMenu" class="sidebar"> 
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('dashboard') ?>"><i class="fas fa-home"></i> Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('ingresos') ?>"><i class="fas fa-box-open"></i> Ingreso</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('egresos') ?>"><i class="fas fa-truck"></i> Egreso</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('saldos') ?>"><i class="fas fa-archive"></i> Saldos</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('ubicaciones') ?>"><i class="fas fa-boxes"></i> Ubicaciones</a></li>
    </ul>
</nav>
