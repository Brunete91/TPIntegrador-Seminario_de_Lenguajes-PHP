<?= $this->extend('layouts/cliente_layout') ?>

<?= $this->section('titulo') ?>
Historial de Reservas
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="container-tabla">
    <h1>Historial de Reservas</h1>
    <table class="table table-bordered gestion-tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Actividad</th>
                <th>Alojamiento</th>
                <th>Fecha de Reserva</th>
                <th>Cantidad</th>
                <th>Pago</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservas as $res): ?>
                <tr>
                    <td><?= esc($res['id']) ?></td>
                    <td><?= esc($res['actividad_nombre'] ?? '') ?></td>
                    <td><?= esc($res['alojamiento_nombre'] ?? '') ?></td>
                    <td><?= esc($res['fecha_reserva']) ?></td>
                    <td><?= esc($res['cantidad']) ?></td>
                    <td><?= esc('$' . number_format((float) $res['pago'], 2, ',', '.')) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>