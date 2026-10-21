<?php
namespace App\Models;
use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table = 'reservas';
    protected $allowedFields = ['id_usuario', 'id_actividad', 'id_alojamiento', 'fecha_reserva', 'cantidad', 'pago'];

    public function getReservas()
    {
        return $this->findAll();
    }

    public function getReservasPorUsuario($id_usuario)
    {
        return $this->select('reservas.*, actividades.nombre AS actividad_nombre, alojamientos.nombre AS alojamiento_nombre')
            ->join('actividades', 'actividades.id = reservas.id_actividad', 'left')
            ->join('alojamientos', 'alojamientos.id = reservas.id_alojamiento', 'left')
            ->where('reservas.id_usuario', $id_usuario)
            ->findAll();
    }

    public function saveReserva($usuarioId, $actividadId, $alojamientoId, $fechaReserva, $cupos, $precio)
    {
        return $this->save([
        'id_usuario' => $usuarioId,
        'id_actividad' => $actividadId ?? null,
        'id_alojamiento' => $alojamientoId ?? null,
        'fecha_reserva' => $fechaReserva,
        'cantidad' => $cupos,
        'pago' => $precio,
        ]);
    }
}