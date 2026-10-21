<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Consulta de Usuarios
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="container-tabla">
    <h1>Consulta de Usuarios</h1>
    <table class="table table-bordered gestion-tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= esc($u['id']) ?></td>
                    <td><?= esc($u['nombre']) ?></td>
                    <td><?= esc($u['email']) ?></td>
                    <td><?= esc($u['rol']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>