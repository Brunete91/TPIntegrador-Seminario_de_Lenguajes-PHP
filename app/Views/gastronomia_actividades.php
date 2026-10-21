<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Gastronomía
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="contenedor-info">
    <h1>Estos son los corredores y zonas gastronómicas más destacadas:</h1>
    <div class="clearfix top-info">
        <img src="<?= esc(base_url('images/imagen1.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>Palermo</h3>
        <p>Una parte del extenso barrio de Palermo se ha transformado en el polo gastronómico más activo de la Ciudad de Buenos Aires. Lo 
        que hoy se llama Palermo Hollywood, delimitado por la Av.Juan B. Justo, Dorrego, Av.Santa Fe y Av.Córdoba, durante décadas estuvo 
        reservado casi exclusivamente a residencias de familias de clase media y talleres de reparación de automóviles. Pero tras la llegada 
        al barrio, a principios del actual siglo, de productoras y canales de televisión con sus respectivas pos productoras, recibió el 
        nombre que tiene actualmente. Junto con el desembarco de las primeras empresas artísticas también comenzó a gestarse un nuevo 
        fenómeno, el gastronómico.<br>Pocos años antes, en un área aledaña, del otro lado de la Av.Juan B. Justo, se gestó lo que hoy se llama 
        Palermo Soho, delimitado por las Avenidas Scalabrini Ortiz, Córdoba, Juan B. Justo y Santa Fe. El nombre, que alude al barrio del 
        Soho de las ciudades de Nueva York y Londres, se le dio por su orientación al diseño y a la moda, aunque no son pocos los 
        restaurantes de la zona.</p>
    </div>
    <div class="clearfix top-info">
        <img src="<?= esc(base_url('images/imagen2.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>Las Cañitas</h3>
        <p>A principios de la década de 1990, sobre la calle Báez y las calles aledañas, en el barrio de Palermo, supo nuclearse una serie de 
        restaurantes que materializaron un pujante polo gastronómico que aún subsiste. El hecho de estar en una zona residencial lindera 
        a las canchas de polo de Palermo le da un atractivo adicional. El reciente rediseño de las aceras y calzadas realizados por el 
        Gobierno de la Ciudad de Buenos Aires facilitó mucho la circulación por la zona.</p>
    </div>
    <div class="clearfix top-info">
        <img src="<?= esc(base_url('images/imagen3.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>Puerto Madero</h3>
        <p>Los antiguos docks del puerto de Buenos Aires, creado en 1900 siguiendo el modelo inglés, supieron salir del abandono y del olvido 
        para convertirse en un pujante centro residencial y gastronómico. Los desarrolladores inmobiliarios aprovecharon los amplios espacios, 
        la interesante arquitectura preexistente, la ubicación céntrica y la cotizada vista para establecer viviendas e interesantes 
        restaurantes que vale la pena visitar.</p>
    </div>
    <div class="clearfix top-info">
        <img src="<?= esc(base_url('images/imagen4.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>Recoleta</h3>
        <p>Recoleta es el primero y el más viejo de los polos gastronómicos de Buenos Aires. Supo conocer su gloria durante la década de 1970, 
        y si bien su fisonomía culinaria ha variado y le han surgido competidores, aún se mantienen instituciones como La Biela, muy 
        frecuentada por turistas de todas las nacionalidades.</p>
    </div>
    <div class="clearfix top-info">
        <img src="<?= esc(base_url('images/imagen5.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>San Telmo</h3>
        <p>Este es uno de los barrios más antiguos de Buenos Aires, y en su momento también supo ser el más aristocrático. Basta recorrer sus 
        calles para gozar del antiguo esplendor de sus construcciones. Todo cambió en 1871 con la epidemia de fiebre amarilla que puso en 
        fuga a las familias más acomodadas, que se desplazaron más al norte de la Ciudad. Pero después de varias décadas de olvido, San 
        Telmo recuperó buena parte de su antiguo esplendor. Aquí se encuentran el refinamiento y la bohemia que perdió Palermo, junto a 
        ese bouquet decadente que lo hace atractivo a los ojos de los turistas europeos. El barrio está reviviendo un boom inmobiliario 
        y los restaurantes no son ajenos a ese suceso. Actualmente hay unos 150 restaurantes, varios de ellos más que interesantes y que 
        bien ameritan una visita.</p>
    </div>
</div>
<?= $this->endSection() ?>