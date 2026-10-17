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
        <div>
            <label for="usuario">Usuario</label>
            <input id="usuario" name="usuario" type="text" maxlength="50" autocomplete="username" required>
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input id="password" name="password" type="password" maxlength="128" autocomplete="current-password" required>
        </div>

        <button type="submit">Ingresar</button>
    </form>

    <p>¿No tienes una cuenta? <a href="<?= esc(site_url('registrar_usuario'), 'attr') ?>">Regístrate aquí</a>.</p>
    </section>
<?= $this->endSection() ?>