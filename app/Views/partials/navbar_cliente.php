<nav class="navbar navbar-expand bg-dark bg-opacity-75 border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
        <img src="<?= esc(base_url('images/logotipo.png'), 'attr') ?>" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Urbano Viajes
    </span>
    <div class="navbar-collapse" id="navBar">
      <ul class="navbar-nav w-100 align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/cliente/catalogo-actividades'), 'attr') ?>">Catálogo de Actividades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/cliente/catalogo-alojamientos'), 'attr') ?>">Catálogo de Alojamientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/cliente/historial-reservas'), 'attr') ?>">Mis reservas</a>
        </li>
        <li class="nav-item ms-auto">
          <span class="navbar-text">
            Cliente: <?= esc(session()->get('nombre'), 'html') ?>
          </span>
        </li>
        <li class="nav-item border-start ps-3 ms-2">
          <form class="mb-0" action="<?= esc(site_url('logout'), 'attr') ?>" method="post">
            <?= csrf_field() ?>
            <button class="nav-link" type="submit">Cerrar Sesión</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>