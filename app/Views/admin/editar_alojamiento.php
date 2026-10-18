<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Editar Alojamiento
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Editar Alojamiento</h1>
        <form method="post" action="<?= site_url('admin/update_alojamiento/' .$alojamiento['id']) ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre del alojamiento:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= esc($alojamiento['nombre']) ?>" required>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Categoría:</legend>
                <div class="col-sm-7">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="hotel_3_estrellas" value="Hotel 3 estrellas" <?= $alojamiento['categoria'] === 'Hotel 3 estrellas' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="hotel_3_estrellas">Hotel 3 Estrellas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="hotel_4_estrellas" value="Hotel 4 estrellas" <?= $alojamiento['categoria'] === 'Hotel 4 estrellas' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="hotel_4_estrellas">Hotel 4 Estrellas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="hotel_5_estrellas" value="Hotel 5 estrellas" <?= $alojamiento['categoria'] === 'Hotel 5 estrellas' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="hotel_5_estrellas">Hotel 5 Estrellas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="apart_hotel" value="Apart Hotel" <?= $alojamiento['categoria'] === 'Apart Hotel' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="apart_hotel">Apart Hotel</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="hotel_boutique" value="Hotel Boutique" <?= $alojamiento['categoria'] === 'Hotel Boutique' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="hotel_boutique">Hotel Boutique</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="hostal" value="Hostal" <?= $alojamiento['categoria'] === 'Hostal' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="hostal">Hostal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="categoria" id="otro_categoria_alojamiento" value="Otro alojamiento" <?= $alojamiento['categoria'] === 'Otro alojamiento' ? 'checked' : '' ?> required>
                        <label class="form-check-label" for="otro_categoria_alojamiento">Otro</label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="ubicacion" class="col-sm-2 col-form-label">Ubicación:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="<?= esc($alojamiento['ubicacion']) ?>" placeholder="calle 123, barrio" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-7">
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="<?= esc($alojamiento['precio']) ?>" placeholder="Ej. 1235.12" required>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cupos" class="col-sm-2 col-form-label">Cupos Disponibles:</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="cupos" name="cupos" value="<?= esc($alojamiento['cupos']) ?>" required>
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