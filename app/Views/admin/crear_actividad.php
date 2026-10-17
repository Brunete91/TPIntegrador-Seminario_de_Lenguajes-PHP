<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Agregar Actividad
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Datos de la actividad</h1>
        <form method="post" action="<?= site_url('admin/store_actividad') ?>" enctype="multipart/form-data">
            <label for="nombre">Nombre de la actividad:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="categoria">Categoría:</label>
            <input type="text" id="categoria" name="categoria" required><br><br>
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