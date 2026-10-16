<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
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
    </section>
</body>
</html>