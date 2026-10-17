<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Editar Alojamiento
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Editar Alojamiento</h1>
        <form method="post" action="<?= site_url('admin/update_alojamiento/' .$alojamiento['id']) ?>" enctype="multipart/form-data">
            <label for="nombre">Nombre del alojamiento:</label>
            <input type="text" id="nombre" name="nombre" value="<?= esc($alojamiento['nombre']) ?>" required><br><br>
            <label for="categoria">Categoría:</label>
            <input type="text" id="categoria" name="categoria" value="<?= esc($alojamiento['categoria']) ?>" required><br><br>
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" value="<?= esc($alojamiento['ubicacion']) ?>" required><br><br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" value="<?= esc($alojamiento['precio']) ?>" required><br><br>
            <label for="cupos">Cupos Disponibles:</label>
            <input type="number" id="cupos" name="cupos" value="<?= esc($alojamiento['cupos_disponibles']) ?>" required><br><br>  
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen"><br><br>
            <button type="submit">Guardar Cambios</button>
        </form>
<?= $this->endSection() ?>