<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Editar Actividad
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Editar Actividad</h1>
        <form method="post" action="<?= site_url('admin/update_actividad/' .$actividad['id']) ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre de la actividad:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= esc($actividad['nombre']) ?>" required>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Categoría:</legend>
                <div class="col-sm-7">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="espacio_verde" value="Espacio verde" <?= $actividad['categoria'] === 'Espacio verde' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="espacio_verde">Espacio Verde</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="museo" value="Museo" <?= $actividad['categoria'] === 'Museo' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="museo">Museo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="bar" value="Bar" <?= $actividad['categoria'] === 'Bar' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="bar">Bar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="restaurante" value="Restaurante" <?= $actividad['categoria'] === 'Restaurante' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="restaurante">Restaurante</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="centro_cultural" value="Centro cultural" <?= $actividad['categoria'] === 'Centro cultural' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="centro_cultural">Centro Cultural</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="navegacion_fluvial" value="Navegación fluvial" <?= $actividad['categoria'] === 'Navegación fluvial' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="navegacion_fluvial">Navegación Fluvial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="cafeteria" value="Cafetería" <?= $actividad['categoria'] === 'Cafetería' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="cafeteria">Cafetería</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="otro" value="Otro" <?= $actividad['categoria'] === 'Otro' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="otro">Otro</label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="informacion" class="col-sm-2 col-form-label">Detalles:</label>
                <div class="col-sm-7">
                    <textarea class="form-control" id="informacion" name="informacion" rows="3" maxlength="300" value="<?= esc($actividad['informacion']) ?>" placeholder="Más información sobre la actividad"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ubicacion" class="col-sm-2 col-form-label">Ubicación:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="<?= esc($actividad['ubicacion']) ?>" placeholder="calle 123, barrio" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-7">
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="<?= esc($actividad['precio']) ?>" placeholder="Ej. 1549.15" required>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cupos" class="col-sm-2 col-form-label">Cupos Disponibles:</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="cupos" name="cupos" value="<?= esc($actividad['cupos']) ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
<?= $this->endSection() ?>