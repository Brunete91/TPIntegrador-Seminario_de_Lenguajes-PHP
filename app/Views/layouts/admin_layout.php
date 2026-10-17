<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <title><?= $this->renderSection('titulo') ?></title>
</head>
<body>
    <?= view('partials/navbar_admin') ?>
    <div class="glow-background"></div>

    <div class="content">
        <main>
            <?= $this->renderSection('contenido') ?>
        </main>
        <?= view('partials/footer') ?>
    </div>
</body>
</html>