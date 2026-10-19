<?= $this->extend('layouts/main') ?>

<?= $this->section('titulo') ?>
Inicio de sesión
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div class="login-container">
    <div class="card text-center login-card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <h3 class="card-title">Iniciar sesión</h3>

            <?php if ($mensaje !== null): ?>
                <p><?= esc($mensaje) ?></p>
            <?php endif; ?>

            <form action="<?= esc(site_url('login'), 'attr') ?>" method="post">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email" maxlength="50" placeholder="Ingrese su email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="password" name="password" maxlength="120" placeholder="Ingrese su contraseña" autocomplete="current-password" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>

            <div class="card-footer">
                <p>¿No tienes una cuenta? <a class="link-registro" href="<?= esc(site_url('registrar_usuario'), 'attr') ?>">Regístrate aquí</a>.</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>