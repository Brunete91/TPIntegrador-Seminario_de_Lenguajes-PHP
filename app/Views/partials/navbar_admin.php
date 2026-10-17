<nav class="navbar navbar-translucent md:navbar-expand" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
        <img src="<?= esc(base_url('images/logotipo.png'), 'attr') ?>" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Urbano Viajes
    </span>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/admin/gestion_activid_alojam'), 'attr') ?>">Gestión de Actividades y Alojamientos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/admin/consulta_reservas'), 'attr') ?>">Consulta de Reservas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/admin/consulta_usuarios'), 'attr') ?>">Consulta de Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/logout'), 'attr') ?>">Cerrar Sesión</a>
      </li>
      <span class="navbar-text">
          Administrador: <?= esc(session()->get('username'), 'html') ?>
      </span>
    </ul>
  </div>
</nav>