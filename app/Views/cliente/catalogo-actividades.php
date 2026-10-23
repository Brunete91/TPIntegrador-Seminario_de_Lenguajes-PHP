<?= $this->extend('layouts/cliente_layout') ?>

<?= $this->section('titulo') ?>
Catálogo de Actividades
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($actividades as $item): ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?= esc(base_url('images/' . $item['imagen']), 'attr') ?>" alt="Imagen" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title"><?= esc($item['nombre']) ?></h3>
                    <p class="card-text">
                        Categoría: <?= esc($item['categoria']) ?><br>
                        Ubicación: <?= esc($item['ubicacion']) ?><br>
                        Precio: $<?= esc($item['precio']) ?><br>
                        <?php if ($item['es_mas_elegido']): ?>
                            <span class="badge text-bg-success">Más elegido</span>
                        <?php endif; ?>
                        <span class="badge <?= esc($item['clase_badge'], 'attr') ?>">
                            <?= esc($item['mensaje_estado']) ?>
                        </span>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="<?= esc(site_url('cliente/detalle_actividad/' . $item['id']), 'attr') ?>" class="btn btn-primary">Ver Detalle y Reservar</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>