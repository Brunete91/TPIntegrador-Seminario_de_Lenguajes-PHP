<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Agregar Alojamiento
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Datos del alojamiento</h1>
        <form method="post" action="<?= site_url('admin/store_alojamiento') ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <label for="nombre">Nombre del alojamiento:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="categoria">Categoría:</label>
            <input type="radio" id="categoria" name="categoria" value="Hotel 3 estrellas" required> Hotel 3 Estrellas
            <input type="radio" id="categoria" name="categoria" value="Hotel 4 estrellas" required> Hotel 4 Estrellas
            <input type="radio" id="categoria" name="categoria" value="Hotel 5 estrellas" required> Hotel 5 Estrellas
            <input type="radio" id="categoria" name="categoria" value="Apart Hotel" required> Apart Hotel
            <input type="radio" id="categoria" name="categoria" value="Hotel Boutique" required> Hotel Boutique
            <input type="radio" id="categoria" name="categoria" value="Hostal" required> Hostal
            <input type="radio" id="categoria" name="categoria" value="Otro" required> Otro<br><br>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" required><br><br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required><br><br>
            <label for="cupos">Cupos Disponibles:</label>
            <input type="number" id="cupos" name="cupos" required><br><br>  
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen"><br><br>
            <button type="submit">Guardar</button>
        </form>
<?= $this->endSection() ?>