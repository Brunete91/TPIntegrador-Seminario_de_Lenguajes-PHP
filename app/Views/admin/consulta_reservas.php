<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Consulta de Reservas
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="container-tabla">
    <h1>Consulta de Reservas</h1>
    <table class="table table-bordered gestion-tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Usuario</th>
                <th>ID Actividad</th>
                <th>ID Alojamiento</th>
                <th>Fecha de Reserva</th>
                <th>Cantidad</th>
                <th>Pago</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservas as $res): ?>
                <tr>
                    <td><?= esc($res['id']) ?></td>
                    <td><?= esc($res['id_usuario']) ?></td>
                    <td><?= esc($res['id_actividad']) ?></td>
                    <td><?= esc($res['id_alojamiento']) ?></td>
                    <td><?= esc($res['fecha_reserva']) ?></td>
                    <td><?= esc($res['cantidad']) ?></td>
                    <td><?= esc('$' . number_format((float) $res['pago'], 2, ',', '.')) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>