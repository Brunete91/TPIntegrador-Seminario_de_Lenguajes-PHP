<?php
namespace App\Models;
use CodeIgniter\Model;

class ActividadModel extends Model
{
    protected $table = 'actividades';
    protected $allowedFields = ['nombre', 'categoria', 'ubicacion', 'cupos', 'precio', 'imagen', 'informacion'];

    public function getIdMasReservada()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('reservas');
    
        $builder->select('id_actividad, SUM(cantidad) as total_cupos_vendidos');
        $builder->groupBy('id_actividad');
        $builder->orderBy('total_cupos_vendidos', 'DESC');
        $builder->limit(1);
    
        $resultado = $builder->get()->getRow();
    
        return $resultado ? $resultado->id_actividad : null;
    }

    public function getActividadesConEstado()
    {
        $actividades = $this->findAll();
        $idMasReservada = $this->getIdMasReservada();

        foreach ($actividades as &$actividad) {
            if ($actividad['id'] == $idMasReservada && $idMasReservada !== null){
                $actividad['mensaje_estado'] = 'Más elegido';
                $actividad['clase_badge'] = 'text-bg-success';
            } elseif ($actividad['cupos'] == 0) {
                $actividad['mensaje_estado'] = 'Sin cupo';
                $actividad['clase_badge'] = 'text-bg-danger';
            } elseif ($actividad['cupos'] <= 4) {
                $actividad['mensaje_estado'] = 'Últimos cupos';
                $actividad['clase_badge'] = 'text-bg-warning';
            } else {
                $actividad['mensaje_estado'] = 'Disponible';
                $actividad['clase_badge'] = 'text-bg-secondary';
            }
        }
        return $actividades;
    }

    public function getActividad($id)
    {
        return $this->where('id', $id)->first();
    }

    public function descontarCupos($id, $cantidad): bool
    {
        $builder = $this->builder();
        $builder->set('cupos', 'cupos - ' . (int) $cantidad, false)
            ->where('id', $id)
            ->where('cupos >=', $cantidad)
            ->update();

        return $this->db->affectedRows() === 1;
    }

    public function saveActividad($nombre, $categoria, $ubicacion, $cupos, $precio, $imagen, $informacion)
    {
        $this->save([
            'nombre' => $nombre,
            'categoria' => $categoria,
            'ubicacion' => $ubicacion,
            'cupos' => $cupos,
            'precio' => $precio,
            'imagen' => $imagen,
            'informacion' => $informacion
        ]);
    }

    public function updateActividad($id, $newNombre, $newCategoria, $newUbicacion, $newCupos, $newPrecio, $newImagen, $newInformacion)
    {
        $this->update($id, [
            'nombre' => $newNombre,
            'categoria' => $newCategoria,
            'ubicacion' => $newUbicacion,
            'cupos' => $newCupos,
            'precio' => $newPrecio,
            'imagen' => $newImagen,
            'informacion' => $newInformacion
        ]);
    }

    public function deleteActividad($id)
    {
        $this->delete($id);
    }
}