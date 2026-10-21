<?= $this->extend('layouts/cliente_layout') ?>

<?= $this->section('titulo') ?>
Detalle de Actividad
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="clearfix detalle-catalogo">
    <h2><?= esc($nombre) ?></h2>
    <img src="<?= esc(base_url('images/' . $imagen), 'attr') ?>" alt="Imagen" class="col-md-6 float-md-end mb-3 ms-md-3">
    <p>
        Tipo: <?= esc($categoria) ?><br>
        Ubicacion: <?= esc($ubicacion) ?><br>
        Cupos disponibles para reservar: <?= esc($cupos) ?><br>
        Precio unitario: <?= esc($precio) ?><br>
        Información extra: <?= esc($informacion) ?><br>
    </p>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        ¿Querés reservar?
    </button>
</div>

<?= $this->endSection() ?>

<?= $this->section('modales') ?>
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form id="reserva-form" action="<?= site_url('cliente/store_reserva') ?>" method="post"
              data-unit-price="<?= esc(number_format((float) $precio, 2, '.', ''), 'attr') ?>">
            <?= csrf_field() ?>

            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">Vas a reservar: <?= esc($nombre) ?></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="tipo" value="actividad">
                    <input type="hidden" name="item_id" value="<?= esc($id) ?>">

                    <label for="cantidad">Cantidad de cupos:</label>
                    <input type="number" name="cantidad" id="cantidad" min="1"
                           max="<?= esc($cupos, 'attr') ?>" required>
                    <p class="mt-3">
                        Total estimado:
                        <output id="reserva-total" aria-live="polite">$0,00</output>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Reservar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    const reservaForm = document.getElementById('reserva-form');
    const cantidadInput = document.getElementById('cantidad');
    const totalOutput = document.getElementById('reserva-total');
    const precioUnitario = Number(reservaForm.dataset.unitPrice);
    const formatoMoneda = new Intl.NumberFormat('es-AR', {
        style: 'currency',
        currency: 'ARS'
    });

    cantidadInput.addEventListener('input', () => {
        const cantidad = Number(cantidadInput.value);
        totalOutput.textContent = formatoMoneda.format(
            Number.isFinite(cantidad) && cantidad > 0 ? cantidad * precioUnitario : 0
        );
    });
</script>
<?= $this->endSection() ?>