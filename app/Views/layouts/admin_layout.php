<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('titulo') ?></title>
</head>
<body>
    <?= view('partials/navbar_admin') ?>
    <main>
        <?= $this->renderSection('contenido') ?>
    </main>
    <?= view('partials/footer') ?>
</body>
</html>