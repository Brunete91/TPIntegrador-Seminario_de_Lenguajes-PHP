<?php
namespace App\Models;
use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table = 'reservas';
    protected $allowedFields = ['id_usuario', 'id_alojamiento', 'id_actividad', 'fecha_reserva'];

    public function getReservas()
    {
        return $this->findAll();
    }
}