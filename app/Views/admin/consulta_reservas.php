<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Consulta de Reservas
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Consulta de Reservas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Actividad/Alojamiento</th>
                <th>Fecha de Reserva</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservas as $res): ?>
                <tr>
                    <td><?= esc($res['id']) ?></td>
                    <td><?= esc($res['usuario']) ?></td>
                    <td><?= esc($res['actividad_alojamiento']) ?></td>
                    <td><?= esc($res['fecha_reserva']) ?></td>
                    <td><?= esc($res['cantidad']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>