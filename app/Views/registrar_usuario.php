<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Registro de usuario
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Registro de usuario</h1>
<form action="<?= site_url('/store_usuario') ?>" method="post">
    <?= csrf_field() ?>
    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-7">
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
        <div class="col-sm-7">
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
<?= $this->endSection() ?>