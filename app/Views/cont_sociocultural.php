<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Historia
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="clearfix contenedor-info">
    <img src="<?= esc(base_url('images/images.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
    <h1>Historia de Buenos Aires</h1>
    <p>Un recorrido por la historia de la Ciudad de Buenos Aires, sus costumbres e impronta cultural, desde sus orígenes hasta la 
    modernidad de hoy.<br>La Ciudad de Buenos Aires fue fundada dos veces. La primera fundación la realizó el español Pedro de Mendoza 
    en 1536, quien la llamó Ciudad de la Santísima Trinidad y Puerto de Santa María del Buen Ayre. Allí se instaló el primer asentamiento, 
    que según los relatos de un tripulante, no prosperó debido a las difíciles condiciones de vida que imperaban y a la resistencia de 
    los nativos Querandíes.<br>La segunda fundación sucedió en 1580. Esta vez fue Juan de Garay quien, en nombre de la Corona española, 
    la bautizó como Ciudad de Trinidad, donde se empezó a desarrollar, a nivel social y político, en los actuales terrenos de la Plaza 
    de Mayo. En 1776 se la designó como capital del reciente Virreinato del Río de la Plata, permitiendo que se posicione en el mercado 
    comercial: su puerto y sus conexiones con las ciudades del interior se convirtieron entonces en su mayor fortaleza.<br>
    Luego, llegaron tiempos de revoluciones buscando la independencia y Buenos Aires fue partícipe necesario de la tan ansiada 
    Independencia argentina. El 25 de Mayo de 1810 los criollos buscaron dar fin con el gobierno virreinal español y conformar el Primer 
    Gobierno Patrio, para que luego, el 9 de Julio de 1816 se diera, en Tucumán, el paso fundamental hacia la Independencia definitiva.<br>
    Con la aparición de las industrias y el ferrocarril, durante la segunda mitad del siglo XIX, el puerto de Buenos Aires se convirtió 
    en el punto estratégico de la actividad económica de un país que se lo conocía como “el granero del mundo”. Además, fue la puerta 
    de ingreso de la llegada de la primera gran corriente migratoria para poblar la nación que impulsó el Estado argentino dando lugar 
    a una cultura ecléctica. La misma estuvo nutrida por españoles, italianos, sirios, libaneses, polacos y rusos. Surgió el tango -hoy 
    reconocido como Patrimonio Cultural Inmaterial de la Humanidad-, mientras que los “conventillos” y los hoteles de inmigrantes fueron 
    el escenario ideal para que naciera algo tan especial y característico de Buenos Aires como “el lunfardo”.<br>
    Más adelante, durante el siglo XX, se dio un continuo de oleadas migratorias que llegaron desde el interior del país, de países 
    latinoamericanos e incluso de Asia. Así, se terminó de gestar esta ciudad en la que hoy conviven personas de diferentes culturas y 
    religiones.<br>La Ciudad tuvo que pasar por numerosas epidemias por causa de la pobreza, la falta de higiene y el hacinamiento. 
    En los años que cuenta la historia, la peor fue la de fiebre amarilla, que sacudió a Buenos Aires en 1871, pero siempre la Ciudad 
    logró reponerse.<br>En 1880 se convirtió en la Capital Federal de la República Argentina y, entrando al siglo XX de la mano del 
    progreso, fue reconocida como una de las grandes metrópolis del mundo: desde entonces se la llamó “la París de Sudamérica”, gracias 
    a su arquitectura, parques y bulevares que diseñaron las elites porteñas con una fuerte impronta francesa.<br>Ante la celebración 
    del Centenario de la Revolución de Mayo, en 1910, la Avenida de Mayo, los Bosques de Palermo y el Teatro Colón destacaron en los 
    festejos. Siendo fiel a la vanguardia que la caracteriza, años después Buenos Aires inauguró la primera línea de subterráneos de 
    Latinoamérica y la decimoprimera en todo el mundo.<br>En los años ´30 apareció el Obelisco, ícono porteño por excelencia y, un 
    tiempo después, la Avenida 9 de Julio se convirtió en la arteria más importante de la Ciudad.<br>En 1994 Buenos Aires logró sancionar 
    su propia constitución y tener un gobierno autónomo, elegido por sus ciudadanos, como resultado de la Reforma de la Constitución 
    Argentina.<br>Esto es solo parte de sus más de 400 años de historia, en los que Buenos Aires se erigió como la ciudad cosmopolita, 
    compleja y dinámica que es en el día de hoy.</p>
</div>

<?= $this->endSection() ?>