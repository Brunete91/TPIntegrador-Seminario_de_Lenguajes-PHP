<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Cómo llegar y cómo moverse
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="contenedor-info">
    <img src="<?= esc(base_url('images/avion1500x610.jpg'), 'attr') ?>" alt="Imagen">
    <h1>Cómo llegar y cómo moverse</h1>
    <h2>¿Cómo llegar a Buenos Aires?</h2>
    <p>Existen diversas maneras de arribar a la Ciudad: en avión, en ómnibus, en tren, en barco, en crucero o en auto.<br>¿Planeás visitar 
    la Ciudad? Existen diversas maneras de llegar a Buenos Aires. Según la distancia de origen y tu presupuesto, podés hacerlo en avión, 
    en ómnibus, en tren, en auto, en crucero o en barco.</p>
    <h3>En auto</h3>
    <p>Para circular por las autopistas de la Ciudad de Buenos Aires es obligatorio contar con TelePASE. El TelePASE es un servicio que 
    te permite pasar por los peajes sin detenerte y sin necesidad de usar dinero en efectivo. Funciona a partir de la lectura del 
    dispositivo autoadhesivo que se coloca en el parabrisas de los vehículos y en el parabrisas o arriba de la óptica de las motos.<br>
    ¿Qué pasa si no tenés TelePASE?<br>Si no contás con TelePASE, tenés dos alternativas para circular por las autopistas porteñas sin 
    incurrir en infracción. Una opción es TelePASE por patente: solo tenés que registrarte en la web de TelePASE con los datos del vehículo 
    y un medio de pago. Podés comenzar a usarlo sin necesidad de dispositivo y después retirarlo de forma gratuita en los centros de 
    atención de AUSA.<br>La otra alternativa es el Pase Diario, que se gestiona de manera online en pasediario.com.ar. Este pase te habilita 
    a usar toda la red de autopistas de la Ciudad en una fecha específica. El sistema asocia automáticamente la patente y el pago se realiza 
    con tarjeta de crédito o débito. Es importante que lo compres al menos tres horas antes de ingresar a la autopista. Cada vehículo puede 
    usarlo hasta 20 veces al año y, con él, podés circular tanto por las vías TelePASE como por los peajes convencionales, sin detenerte 
    en cabinas ni barreras.</p>
    <div class="clearfix">
        <img src="<?= esc(base_url('images/aeroparque1500x610.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>En avión</h3>
        <p>Si volás a Buenos Aires, aterrizarás en los aeropuertos de Ezeiza o de Aeroparque, según de dónde vengas.<br>
        - Aeropuerto Internacional Ministro Pistarini - Ezeiza<br>Es el más importante del país, donde arriba la mayoría de los vuelos 
        internacionales y algunos vuelos domésticos. El aeropuerto se encuentra en la localidad de Ezeiza, a 32 km de la ciudad, a unos 50 minutos 
        del centro porteño.<br>- Aeroparque Jorge Newbery<br>La particularidad de este aeropuerto es que está ubicado dentro de la Ciudad y a 
        unos 25 minutos de los principales hoteles. Aquí arriban los vuelos provenientes de las provincias argentinas o de algún país limítrofe, 
        ya que opera mayoritariamente con vuelos domésticos y algunos vuelos regionales.<br>
        <strong>¿Cómo llegar desde los aeropuertos a la Ciudad?</strong><br>En ambos aeropuertos, podés elegir diversas maneras de trasladarse:</p>
        <ul>
            <li>Shuttles y transfers privados: es posible reservarlos con anticipación o al momento de llegar. La empresa Tienda León ofrece 
            servicios desde ambos aeropuertos hasta la terminal de Puerto Madero, en el centro de la Ciudad.</li>
            <li>Taxis: hay distintas paradas disponibles dentro de los aeropuertos.</li>
            <li>Remises: Varias compañías ofrecen sus servicios desde el aeropuerto.</li>
            <li>Transporte público: a ambos aeropuertos llegan líneas de colectivos que los unen con el centro de la Ciudad. Tené en cuenta 
            que para utilizar el transporte público,  necesitás contar con la <a href="https://www.argentina.gob.ar/sube" target="_blank" 
            rel="noopener noreferrer">tarjeta SUBE</a>, que podés comprarla online o en un punto SUBE.</li>
        </ul>
    </div>
    <div class="clearfix">
        <img src="<?= esc(base_url('images/crucero1500x610.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>En barco</h3>
        <p>Desde Uruguay, podés cruzar a Buenos Aires en barco y en poco tiempo. Si viajás desde más lejos, el crucero será la mejor opción.<br>
        - Ferries<br>Las terminales de las empresas de ferries se encuentran en el barrio de Puerto Madero y La Boca. Las compañías que podrás 
        elegir son:</p>
        <ul>
            <li>Buquebus</li>
            <li>Colonia Express</li>
        </ul>
        <p>- Cruceros<br>Numerosas líneas de cruceros operan desde el puerto de Buenos Aires, convirtiéndolo en uno de los de mayor recambio 
        de la región. Si llegás en crucero, lo vas a hacer en la terminal de pasajeros “Quinquela Martín”, en el barrio de Retiro, considerada 
        como la mejor en su tipo en toda Sudamérica. Está a una corta distancia del centro y de los principales atractivos turísticos. Vas a 
        encontrar taxis y remises disponibles</p>
    </div>
    <h3>En tren</h3>
    <p>Si venís desde algunas ciudades de la provincia de Buenos Aires (las cabeceras son Bahía Blanca, Mar del Plata y Pehuajó), o de 
    Santa Fe, Córdoba, San Luis, Santiago del Estero o Tucumán, podés llegar en ferrocarril.<br>El tren que llega desde Bahía Blanca y 
    Mar del Plata te deja en Constitución. El que viene desde Pehuajó, en Once.<br>El resto, en la estación de Retiro.<br>
    Todas las estaciones tienen una gran conectividad a través de las distintas modalidades de transporte público.</p>
    <h3>En ómnibus</h3>
    <p>Esta es otra opción para quienes vienen desde las distintas provincias de Argentina o desde algún país limítrofe. Los servicios 
    de larga distancia incluyen asientos muy confortables y catering. La terminal de ómnibus se encuentra en el barrio de Retiro y cuenta 
    con fácil acceso a la red de transporte público de la Ciudad.<br>Para cualquier duda, podés acercarte al Centro de Atención al Turista 
    de Retiro, en el local 83 de la terminal de ómnibus.</p>
    <p><strong>Y ahora que llegaste…</strong><br>
    Para consultar cómo llegar desde un punto a otro, te recomendamos ingresar al <a href="https://mapa.buenosaires.gob.ar/" target="_blank" 
    rel="noopener noreferrer">mapa de Buenos Aires</a>.</p>
    <h2>Moverse por la Ciudad</h2>
    <p>Conocé el sistema de transporte que se despliega en Buenos Aires. Múltiples opciones para que puedas recorrer cada rincón del mapa.<br>
    Para trasladarte por la Ciudad de Buenos Aires y disfrutar de todos sus barrios, existen diversas posibilidades que van desde la 
    bicicleta hasta el colectivo, pasando por los taxis, los remises o el subterráneo.<br>Conocé más sobre cada una de estas alternativas.</p>
    <div class="clearfix">
        <img src="<?= esc(base_url('images/metrobus_9_de_julio_1200.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>Red de colectivos</h3>
        <p>El colectivo es el medio de transporte más característico de Buenos Aires. Permite que llegues a cualquier punto de la Ciudad. Para 
        utilizarlo es necesario adquirir una tarjeta SUBE y cargarle dinero.<br>A su vez, la Ciudad de Buenos Aires cuenta con 9 corredores de 
        Metrobus, un sistema de transporte que combina colectivos articulados y tradicionales con carriles exclusivos. Además de mejorar la 
        seguridad vial y reducir los tiempos de viaje, contribuyen a que los colectivos emitan menos dióxido de carbono y contaminen menos.</p>
        <ul>
            <li>Metrobus Juan B. Justo</li>
            <li>Metrobus 9 de Julio</li>
            <li>Metrobus del Bajo</li>
            <li>Metrobus del Bajo 2</li>
            <li>Metrobus Norte</li>
            <li>Metrobus Norte 2</li>
            <li>Metrobus San Martín</li>
            <li>Metrobus Sur</li>
            <li>Metrobus AU 25 de Mayo</li>
        </ul>
        <p>Conocé todos sus <a href="https://www.buenosaires.gob.ar/movilidad/metrobus/red-de-metrobus" target="_blank" rel="noopener noreferrer">
        recorridos</a>.</p>
    </div>
    <div class="clearfix">
        <img src="<?= esc(base_url('images/subte_1200_2.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>Red de subterráneos</h3>
        <p>Buenos Aires fue la primera ciudad del hemisferio sur en construir una red de subterráneos. Aquello empezó en 1913, con la línea A, 
        que iba desde Plaza de Mayo hasta Plaza Miserere (Once).<br>Hoy, el tendido cuenta con 6 líneas y un premetro, y posee una extensión 
        total de más de 64 km y 108 estaciones operativas.<br>Para viajar en subte, podés utilizar tarjetas de crédito, débito, o celulares 
        a través de billeteras electrónicas, siempre que tengan teconología NFC. Además, podés utilizar la tarjeta SUBE, disponible en kioscos 
        y estaciones.<br>Conocé el <a href="https://www.buenosaires.gob.ar/subte/mapa-y-combinaciones" target="_blank" rel="noopener noreferrer">
        mapa de la red</a>.</p>
    </div>
    <h3>Buses eléctricos</h3>
    <p>Buenos Aires cuenta con buses completamente eléctricos, un nuevo modo de transporte en el Microcentro. Conectan la Plaza San Martín, 
    en Retiro, con el Parque Lezama, mejorando la conectividad de los barrios de Retiro, San Nicolás, Monserrat, San Telmo y La Boca. 
    Funcionan de manera silenciosa, sin generar vibraciones ni emisiones de gases ni compuestos nocivos para la salud y el ambiente. 
    Además, son accesibles para personas con movilidad reducida, lo que mejorará significativamente la experiencia de viaje. </p>
    <h3>Buses turísticos</h3>
    <p>Para recorrer Buenos Aires, podés subirte al bus amarillo o al bus rojo. Hacen dos circuitos diferentes con los que vas a aprovechar 
    al máximo tu tiempo en la Ciudad. El servicio ofrece audioguías en distintos idiomas y tiene la modalidad hop-on hop-off, que permite 
    que, dentro de la duración de tu ticket -hay pases de 24 o de 48 horas-, desciendas y vuelvas a subir tantas veces como desees y 
    en cualquiera de las paradas. Son vehículos accesibles para personas con discapacidad motriz y cuentan con el relato en lengua de señas 
    de la guía turística que podrás ver a través de las pantallas.</p>
    <h3>Trambus: prueba piloto</h3>
    <p>Desde mediados de noviembre de 2025, la Ciudad puso en marcha las primeras unidades del Trambus. Se trata del nuevo sistema de movilidad 
    100 % eléctrico, silencioso y sustentable, que mejorará la conectividad y bajará hasta un 40% los tiempos de viaje entre el norte y el sur 
    de la Ciudad.<br>En esta etapa de prueba piloto, circula por la Av. Juan B. Justo, conectando el Aeroparque Jorge Newbery con Liniers. 
    Esto significa que atraviesa una zona altamente conectada con otros medios de transporte, con la comodidad que supone que puedas 
    combinarlos y llegar más rápido y mejor a tu destino: el recorrido actual está próximo a diversas estaciones del ferrocarril Sarmiento, 
    San Martín y Mitre, de las líneas B y D de subte, del Metrobús de la Av. San Martín y de la Av. Juan B. Justo, y de postas de Ecobici.<br>
    En 2026, el servicio se extenderá uniendo la Costanera con Pompeya, y en 2027, cubrirá un trayecto transversal de norte a sur, hacia 
    el oeste de la Ciudad.<br>Estos vehículos están equipados con un paquete tecnológico que garantiza la sustentabilidad, la seguridad vial 
    y la comodidad de los usuarios. Además, son accesibles para personas con movilidad reducida, ya que disponen de piso bajo, suspensión 
    neumática y rampas.<br>Podés abonar el pasaje con cualquier medio de pago digital habilitado (SUBE, tarjetas de débito, crédito o NFC).</p>
    <h3>En auto o en moto</h3>
    <p>Para circular por las autopistas de la Ciudad de Buenos Aires es obligatorio contar con TelePASE. El TelePASE es un servicio que 
    te permite pasar por los peajes sin detenerte y sin necesidad de usar dinero en efectivo. Funciona a partir de la lectura del 
    dispositivo autoadhesivo que se coloca en el parabrisas de los vehículos y en el parabrisas o arriba de la óptica de las motos.</p>
    <div class="clearfix">
        <img src="<?= esc(base_url('images/bici_24hs_1200_v.jpg'), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
        <h3>Una ciudad con bicicletas </h3>
        <p>La Ciudad de Buenos Aires cuenta con 300 km de ciclovías y bicisendas que hacen que moverte en bicicleta, sea una alternativa segura. 
        Pueden utilizarse con bicicleta propia o también mediante el programa “BA EcoBici”, el sistema público de bicicletas.<br>
        BA EcoBici cuenta con 360 estaciones y 3.700 bicicletas distribuidas por toda la Ciudad, disponibles las 24 horas del día, los 365 días del año.<br>
        Los residentes de cualquier rincón de la Argentina tienen diversas opciones de pases:<br>
        > Gratuito: de lunes a viernes, hasta 4 viajes gratuitos de 30 minutos por día.<br>
        > Pago:<br>
        De lunes a viernes, 1 viaje de hasta 45 minutos.<br>
        De lunes a viernes, 4 viajes de hasta 60 minutos cada uno.<br>
        Todo el mes, 4 viajes de hasta 60 minutos cada uno.<br>
        Sábados, domingos y feriados, 1 viaje de hasta 45 minutos.<br>
        Sábados, domingos y feriados, 4 viajes de hasta 60 minutos cada uno durante 1 día.<br>
        Los turistas extranjeros también pueden adquirir su pase, con costo, a través de la app. Existen diferentes alternativas:<br>
        Viaje único: 1 viaje por día de hasta 45 minutos.<br>
        Diario: viajes ilimitados de hasta 90 minutos.</p>
    </div>
    <h3>Taxis y remises</h3>
    <p>Es uno de los servicios de transporte más costosos de la Ciudad. La cantidad de  taxis que circulan por la Ciudad es muy grande y se 
    los reconoce fácilmente porque están pintados de negro y amarillo. Los podés detener y tomar directamente en la calle o solicitar por 
    teléfono. Los radiotaxis (provistos de sistemas de radio) son considerados más seguros. La tarifa se compone de un precio inicial 
    (lo que se conoce como “bajada de bandera”) y de un adicional por distancia y por tiempo.<br>
    Además, el Gobierno de la Ciudad de Buenos Aires lanzó BA Taxi: una app para conectar pasajeros y taxistas sin necesidad de llamar ni 
    de parar un vehículo en la calle. Además de poder saber en forma anticipada el valor aproximado de lo que va a costar el viaje, tener 
    el nombre del conductor y personalizar el viaje de acuerdo a las necesidades del pasajero. Además, permite abonar con todos los medios 
    de pago.<br>
    Otra alternativa es solicitar por teléfono un remis a una agencia, un servicio de auto con chofer con algunas características similares 
    al taxi, aunque sus vehículos no poseen ningún color en especial que los identifique. El precio del viaje dependerá de la distancia que 
    se va a recorrer y se pacta con la agencia antes de iniciarlo.</p>
    <h3>Alquiler de autos</h3>
    <p>Existen numerosas agencias de alquiler de coches sin chofer, muchas de ellas pertenecientes a compañías internacionales. Para alquilar 
    un vehículo se necesita ser mayor de 21 años, tener licencia de conducir vigente con dos años de antigüedad y una tarjeta de crédito 
    con cupo suficiente para cubrir el alquiler y la garantía.</p>
</div>

<?= $this->endSection() ?>