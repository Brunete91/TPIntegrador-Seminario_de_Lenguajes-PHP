<nav class="navbar navbar-expand bg-dark bg-opacity-75 border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
        <img src="<?= esc(base_url('images/logotipo.png'), 'attr') ?>" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Urbano Viajes
    </span>
    <div class="navbar-collapse" id="navBar">
      <ul class="navbar-nav w-100">
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/'), 'attr') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/lugares_historicos'), 'attr') ?>">Lugares Históricos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/gastronomia_actividades'), 'attr') ?>">Gastronomía</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/geografia'), 'attr') ?>">Clima</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/cont_sociocultural'), 'attr') ?>">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/info_turista'), 'attr') ?>">Transporte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= esc(base_url('/mas_info'), 'attr') ?>">Más Información</a>
        </li>
        <li class="nav-item ms-auto">
          <a class="nav-link" href="<?= esc(base_url('/login'), 'attr') ?>">Iniciar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>