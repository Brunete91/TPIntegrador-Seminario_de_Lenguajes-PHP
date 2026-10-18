<?php
namespace App\Models;
use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table = 'reservas';
    protected $allowedFields = ['usuario', 'actividad_alojamiento', 'fecha_reserva', 'cantidad', 'pago'];

    public function getReservas()
    {
        return $this->findAll();
    }
}