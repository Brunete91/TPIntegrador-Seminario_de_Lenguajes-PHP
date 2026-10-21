<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Urbano Viajes - Página Principal
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= esc(base_url('images/obelisco.jpg'), 'attr') ?>" class="d-block w-100" alt="Imagen">
    </div>
    <div class="carousel-item">
      <img src="<?= esc(base_url('images/puente-mujer.jpg'), 'attr') ?>" class="d-block w-100" alt="Imagen">
    </div>
    <div class="carousel-item">
      <img src="<?= esc(base_url('images/zanjon.jpg'), 'attr') ?>" class="d-block w-100" alt="Imagen">
    </div>
    <div class="carousel-item">
      <img src="<?= esc(base_url('images/calle-museo-caminito-dic2025-1500x610.jpg'), 'attr') ?>" class="d-block w-100" alt="Imagen">
    </div>
    <div class="carousel-item">
      <img src="<?= esc(base_url('images/ateneo.jpg'), 'attr') ?>" class="d-block w-100" alt="Imagen">
    </div>
    <div class="carousel-item">
      <img src="<?= esc(base_url('images/cafe-tortoni.jpg'), 'attr') ?>" class="d-block w-100" alt="Imagen">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="contenedor-principal">
  <h1>¡Conoce la Ciudad de Buenos Aires con nosotros!</h1>
  <h2>Actividades Destacadas</h2>
  <div class="fila">
    <div class="top-act">
      <img src="<?= esc(base_url('images/detrasdeescenaelcuidadodeltapirecoparque600x350.jpg'), 'attr') ?>" alt="Imagen">
      <h4>DETRÁS DE ESCENA: EL CUIDADO DEL TAPIR</h4>
      <i class="fa fa-calendar" aria-hidden="true"></i>Martes, jueves, sábados y domingos, 12 h.<br>
      <i class="fa fa-map-marker" aria-hidden="true"></i>Av. Santa Fe y Av. Sarmiento, Palermo<br>
      Te invitamos a conocer de cerca todo sobre el cuidado de nuestros tapires: cómo abordamos su atención veterinaria, su nutrición 
      y sus procesos de entrenamiento. | Duración: 40 min.
    </div>
    <div class="top-act">
      <img src="<?= esc(base_url('images/generica-cementerio-recoleta-600x350.jpg'), 'attr') ?>" alt="Imagen">
      <h4>CEMENTERIO DE LA RECOLETA</h4>
      <i class="fa fa-calendar" aria-hidden="true"></i>Todos los días, de 9 a 17 h.<br>
      <i class="fa fa-map-marker" aria-hidden="true"></i>Junín 1760, Recoleta<br>
      Recorré el Cementerio de la Recoleta y descubrí numerosos e imponentes mausoleos y bóvedas, pertenecientes a muchos de los 
      principales protagonistas de la historia argentina. Es una actividad gratuita para turistas nacionales (particulares) y 
      arancelada para turistas internacionales. | Duración: 2 h.
    </div>
    <div class="top-act">
      <img src="<?= esc(base_url('images/observacion-telescopio.amigos-astronomia600x350.jpg'), 'attr') ?>" alt="Imagen">
      <h4>OBSERVACIÓN POR TELESCOPIOS</h4>
      <i class="fa fa-calendar" aria-hidden="true"></i>Jueves, 20.30 h. Viernes y sábados, 20.30 y 21.30 h.<br>
      <i class="fa fa-map-marker" aria-hidden="true"></i>Av. Patricias Argentinas 550, Caballito<br>
      Vení a observar distintos astros por telescopios y con la ayuda de nuestros guías. Vas a aprender sobre los astros y a conocer 
      la historia de la astronomía en nuestro país al utilizar instrumentos históricos para la observación. | Duración: 1 h.
    </div>
  </div>
  ¿Querés reservar alguna de las actividades disponibles? <a href="<?= esc(base_url('/login'), 'attr') ?>">Entrá y conocé más</a>.<br><br>
  <h2>Alojamientos Destacados</h2>
  <div class="fila">
    <div class="top-act">
      <img src="<?= esc(base_url('images/hotelmadero-distinguidos600x350.jpg'), 'attr') ?>" alt="Imagen">
      <h4>HOTEL MADERO</h4>
      <i class="fa fa-map-marker" aria-hidden="true"></i>Rosario Vera Peñaloza 360, Puerto Madero<br>
      Alojamiento | Hotel 5 estrellas.</p>
    </div>
    <div class="top-act">
      <img src="<?= esc(base_url('images/hotelintersurrecoleta-distinguidos600x350.jpg'), 'attr') ?>" alt="Imagen">
      <h4>HOTEL INTERSUR RECOLETA</h4>
      <i class="fa fa-map-marker" aria-hidden="true"></i>Av. Callao 1764, Recoleta<br>
      Alojamiento | Hotel 4 estrellas</p>
    </div>
    <div class="top-act">
      <img src="<?= esc(base_url('images/casacalma-distinguidos600x350.jpg'), 'attr') ?>" alt="Imagen">
      <h4>CASA CALMA</h4>
      <i class="fa fa-map-marker" aria-hidden="true"></i>Suipacha 1015, Retiro<br>
      Alojamiento | Hotel Boutique</p>
    </div>
  </div>
  ¿Querés reservar alguno de los alojamientos disponibles? <a href="<?= esc(base_url('/login'), 'attr') ?>">Entrá y conocé más</a>.
</div>

<?= $this->endSection() ?>