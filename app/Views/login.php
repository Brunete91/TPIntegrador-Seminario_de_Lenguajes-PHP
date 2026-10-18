<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Inicio de sesión
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Login</h1>
    <section>
    <h2>Iniciar sesión</h2>

    <?php if ($mensaje !== null): ?>
        <p><?= esc($mensaje) ?></p>
    <?php endif; ?>

    <form action="<?= esc(site_url('login'), 'attr') ?>" method="post">
        <?= csrf_field() ?>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-7">
                <input type="email" class="form-control" id="email" name="email" maxlength="50" placeholder="Ingrese su email" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
            <div class="col-sm-7">
                <input type="password" class="form-control" id="password" name="password" maxlength="120" placeholder="Ingrese su contraseña" autocomplete="current-password" required>
            </div>
        </div>

        <p>¿No tienes una cuenta? <a href="<?= esc(site_url('registrar_usuario'), 'attr') ?>">Regístrate aquí</a>.</p>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

    </section>
<?= $this->endSection() ?>