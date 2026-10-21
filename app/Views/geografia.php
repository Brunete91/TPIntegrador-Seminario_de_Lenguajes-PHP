<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Clima
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="contenedor-info">
    <h1>Clima</h1>
    <p>Temperatura <i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i> y curiosidades de una ciudad con buen clima todo el año.</p>
    <h4>¡Te esperamos en cualquier época del año!</h4>
    <ul>
        <li>Con una temperatura media anual de 18ºC (64°F), son escasos los días de calor y frío intensos, lo que permite visitar la 
        ciudad en cualquier época del año.</li>
        <li>El mes más frío es julio. Aunque no se presentan heladas, es necesario salir con un abrigo de lana, una campera o sobretodo 
        y bufanda.</li>
        <li>En invierno el frío es moderado durante el día pero por las noches baja considerablemente la temperatura.</li>
        <li>En verano el calor es húmedo. Las mañanas son calurosas, mientras que hacia el mediodía y las primeras horas de la tarde las 
        temperaturas aumentan de manera significativa. A la noche, el calor disminuye levemente, por lo que se usa ropa fresca y liviana 
        y no hay necesidad de abrigos.</li>
        <li>Las temporadas más lluviosas son el otoño y la primavera (de marzo a junio y de septiembre a diciembre). Son generalmente 
        lloviznas o lluvias breves que no impiden el desarrollo de las distintas actividades y permiten caminar por la calle con paraguas 
        o impermeable.</li>
        <li>En los días soleados de otoño y primavera las mañanas son frescas, la temperatura aumenta en forma agradable hacia el 
        mediodía y desciende por la noche.</li>
    </ul>
    <h4>Rarezas climáticas</h4>
    <ul>
        <li>Veranito de San Juan: alrededor del 24 de junio (fecha de nacimiento de San Juan el Bautista), en pleno invierno, la 
        temperatura puede llegar a alcanzar los 24°C (75°F). El fenómeno se extiende entre 3 y 7 días. Es común observar a la gente 
        asolearse en plazas de la ciudad, como si hubiera llegado la primavera.</li>
        <li>Tormenta de Santa Rosa: ciclo de lluvias y tormentas eléctricas que irrumpe con la llegada de la primavera, al terminar la 
        estación del frío. Ocurre en los días próximos al 30 de agosto, festividad de Santa Rosa.</li>
        <li>Nieve en Buenos Aires: la historia porteña registra solamente dos nevadas: la primera fue en la noche del 22 al 23 de junio 
        de 1918 y la segunda durante el día feriado del 9 de julio de 2007.</li>
    </ul>
    <h4>Estaciones</h4>
    <ul>
        <li>Verano (21 de diciembre a 20 de marzo).</li>
        <li>Otoño (21 de marzo a 20 de junio).</li>
        <li>Invierno (21 de junio a 20 de septiembre).</li>
        <li>Primavera (21 de septiembre a 20 de diciembre).</li>
    </ul>
</div>

<?= $this->endSection() ?>