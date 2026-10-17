<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Editar Actividad
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Editar Actividad</h1>
        <form method="post" action="<?= site_url('admin/update_actividad/' .$actividad['id']) ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <label for="nombre">Nombre de la actividad:</label>
            <input type="text" id="nombre" name="nombre" value="<?= esc($actividad['nombre']) ?>" required><br><br>
            <label for="categoria">Categoría:</label>
            <input type="text" id="categoria" name="categoria" value="<?= esc($actividad['categoria']) ?>" required><br><br>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" value="<?= esc($actividad['ubicacion']) ?>" required><br><br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" value="<?= esc($actividad['precio']) ?>" required><br><br>
            <label for="cupos">Cupos Disponibles:</label>
            <input type="number" id="cupos" name="cupos" value="<?= esc($actividad['cupos']) ?>" required><br><br>  
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen"><br><br>
            <button type="submit">Guardar Cambios</button>
        </form>
<?= $this->endSection() ?>