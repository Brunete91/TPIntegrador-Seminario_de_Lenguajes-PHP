<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('titulo') ?>
Gestión de Actividades y Alojamientos
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<h1>Gestión de Actividades y Alojamientos</h1><br>
        <h3>Actividades</h3>
        <a href="<?= esc(site_url('admin/crear_actividad'), 'attr') ?>">Añadir Actividad</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Ubicación</th>
                    <th>Precio</th>
                    <th>Cupos Disponibles</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($actividades as $act): ?>
                    <tr>
                        <td><img src="<?= esc(base_url('images/' . $act['imagen']), 'attr') ?>" alt="Imagen" width="100"></td>
                        <td><?= esc($act['nombre']) ?></td>
                        <td><?= esc($act['categoria']) ?></td>
                        <td><?= esc($act['ubicacion']) ?></td>
                        <td><?= esc('$' . number_format((float) $act['precio'], 2, ',', '.')) ?></td>
                        <td><?= esc($act['cupos']) ?></td>
                        <td>
                            <a href="<?= esc(site_url('admin/editar_actividad/' . $act['id']), 'attr') ?>"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                            <form action="<?= esc(site_url('admin/delete_actividad/' . $act['id']), 'attr') ?>" method="post" style="display:inline;">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3>Alojamientos</h3>
        <a href="<?= esc(site_url('admin/crear_alojamiento'), 'attr') ?>">Añadir Alojamiento</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Ubicación</th>
                    <th>Precio</th>
                    <th>Cupos Disponibles</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alojamientos as $al): ?>
                    <tr>
                        <td><img src="<?= esc(base_url('images/' . $al['imagen']), 'attr') ?>" alt="Imagen" width="100"></td>
                        <td><?= esc($al['nombre']) ?></td>
                        <td><?= esc($al['categoria']) ?></td>
                        <td><?= esc($al['ubicacion']) ?></td>
                        <td><?= esc('$' . number_format((float) $al['precio'], 2, ',', '.')) ?></td>
                        <td><?= esc($al['cupos']) ?></td>
                        <td>
                            <a href="<?= esc(site_url('admin/editar_alojamiento/' . $al['id']), 'attr') ?>"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                            <form action="<?= esc(site_url('admin/delete_alojamiento/' . $al['id']), 'attr') ?>" method="post" style="display:inline;">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<?= $this->endSection() ?>