<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Agregar Actividad
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Datos de la actividad</h1>
        <form method="post" action="<?= site_url('admin/store_actividad') ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre de la actividad:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Categoría:</legend>
                <div class="col-sm-7">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="espacio_verde" value="Espacio verde" required>
                        <label class="form-check-label" for="espacio_verde">Espacio Verde</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="museo" value="Museo" required>
                        <label class="form-check-label" for="museo">Museo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="bar" value="Bar" required>
                        <label class="form-check-label" for="bar">Bar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="restaurante" value="Restaurante" required>
                        <label class="form-check-label" for="restaurante">Restaurante</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="centro_cultural" value="Centro cultural" required>
                        <label class="form-check-label" for="centro_cultural">Centro Cultural</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="navegacion_fluvial" value="Navegación fluvial" required>
                        <label class="form-check-label" for="navegacion_fluvial">Navegación Fluvial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="cafeteria" value="Cafetería" required>
                        <label class="form-check-label" for="cafeteria">Cafetería</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="otro_categoria" value="Otro" required>
                        <label class="form-check-label" for="otro_categoria">Otro</label>
                    </div>
            </fieldset>
            <div class="row mb-3">
                <label for="ubicacion" class="col-sm-2 col-form-label">Ubicación:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="calle 124, localidad" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-7">
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" placeholder="Ej. 1245.12" required>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cupos" class="col-sm-2 col-form-label">Cupos Disponibles:</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="cupos" name="cupos" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
<?= $this->endSection() ?>