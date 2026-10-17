<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Registro de usuario
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Registro de usuario</h1>
<form action="<?= site_url('/store_usuario') ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Registrar</button>
</form>
<?= $this->endSection() ?>