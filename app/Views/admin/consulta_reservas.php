<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Reservas</title>
</head>
<body>
    <h1>Consulta de Reservas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Actividad/Alojamiento</th>
                <th>Fecha de Reserva</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservas as $res): ?>
                <tr>
                    <td><?= esc($res['id']) ?></td>
                    <td><?= esc($res['usuario']) ?></td>
                    <td><?= esc($res['actividad_alojamiento']) ?></td>
                    <td><?= esc($res['fecha_reserva']) ?></td>
                    <td><?= esc($res['cantidad']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>