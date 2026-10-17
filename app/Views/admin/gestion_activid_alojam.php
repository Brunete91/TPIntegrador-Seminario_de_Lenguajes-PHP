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
                        <td><?= esc($act['precio']) ?></td>
                        <td><?= esc($act['cupos_disponibles']) ?></td>
                        <td>
                            <a href="<?= esc(site_url('admin/editar_actividad/' . $act['id']), 'attr') ?>">Editar</a>
                            <form action="<?= esc(site_url('admin/eliminar_actividad/' . $act['id']), 'attr') ?>" method="post" style="display:inline;">
                                <?= csrf_field() ?>
                                <button type="submit">Eliminar</button>
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
                        <td><?= esc($al['precio']) ?></td>
                        <td><?= esc($al['cupos_disponibles']) ?></td>
                        <td>
                            <a href="<?= esc(site_url('admin/editar_alojamiento/' . $al['id']), 'attr') ?>">Editar</a>
                            <form action="<?= esc(site_url('admin/eliminar_alojamiento/' . $al['id']), 'attr') ?>" method="post" style="display:inline;">
                                <?= csrf_field() ?>
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div>
            <form action="<?= esc(site_url('logout'), 'attr') ?>" method="post">
                <?= csrf_field() ?>
                <button type="submit">Cerrar sesión</button>
            </form>
        </div>
<?= $this->endSection() ?>