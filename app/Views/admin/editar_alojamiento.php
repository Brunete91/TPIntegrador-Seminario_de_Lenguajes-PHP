<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Editar Alojamiento
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Editar Alojamiento</h1>
        <form method="post" action="<?= site_url('admin/update_alojamiento/' .$alojamiento['id']) ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <label for="nombre">Nombre del alojamiento:</label>
            <input type="text" id="nombre" name="nombre" value="<?= esc($alojamiento['nombre']) ?>" required><br><br>
            <label for="categoria">Categoría:</label>
            <input type="radio" id="categoria" name="categoria" value="Hotel 3 estrellas" <?= $alojamiento['categoria'] === 'Hotel 3 estrellas' ? 'checked' : '' ?> required> Hotel 3 Estrellas
            <input type="radio" id="categoria" name="categoria" value="Hotel 4 estrellas" <?= $alojamiento['categoria'] === 'Hotel 4 estrellas' ? 'checked' : '' ?> required> Hotel 4 Estrellas
            <input type="radio" id="categoria" name="categoria" value="Hotel 5 estrellas" <?= $alojamiento['categoria'] === 'Hotel 5 estrellas' ? 'checked' : '' ?> required> Hotel 5 Estrellas
            <input type="radio" id="categoria" name="categoria" value="Apart Hotel" <?= $alojamiento['categoria'] === 'Apart Hotel' ? 'checked' : '' ?> required> Apart Hotel
            <input type="radio" id="categoria" name="categoria" value="Hotel Boutique" <?= $alojamiento['categoria'] === 'Hotel Boutique' ? 'checked' : '' ?> required> Hotel Boutique
            <input type="radio" id="categoria" name="categoria" value="Hostal" <?= $alojamiento['categoria'] === 'Hostal' ? 'checked' : '' ?> required> Hostal
            <input type="radio" id="categoria" name="categoria" value="Otro" <?= $alojamiento['categoria'] === 'Otro' ? 'checked' : '' ?> required> Otro<br><br>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" value="<?= esc($alojamiento['ubicacion']) ?>" required><br><br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" value="<?= esc($alojamiento['precio']) ?>" required><br><br>
            <label for="cupos">Cupos Disponibles:</label>
            <input type="number" id="cupos" name="cupos" value="<?= esc($alojamiento['cupos']) ?>" required><br><br>  
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen"><br><br>
            <button type="submit">Guardar Cambios</button>
        </form>
<?= $this->endSection() ?>