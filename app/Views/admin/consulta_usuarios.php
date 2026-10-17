<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Consulta de Usuarios
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Consulta de Usuarios</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= esc($u['id']) ?></td>
                    <td><?= esc($u['nombre']) ?></td>
                    <td><?= esc($u['usuario']) ?></td>
                    <td><?= esc($u['rol']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>