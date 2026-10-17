<nav class="navbar navbar-translucent md:navbar-expand" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
        <img src="<?= esc(base_url('images/logotipo.png'), 'attr') ?>" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Urbano Viajes
    </span>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/'), 'attr') ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/lugares_historicos'), 'attr') ?>">Lugares Históricos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/gastronomia_actividades'), 'attr') ?>">Gastronomía y Actividades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/geografia'), 'attr') ?>">Geografía y Clima</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/cont_sociocultural'), 'attr') ?>">Contexto Sociocultural</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/info_turista'), 'attr') ?>">Información para Turistas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= esc(base_url('/login'), 'attr') ?>">Iniciar Sesión</a>
      </li>
    </ul>
  </div>
</nav>