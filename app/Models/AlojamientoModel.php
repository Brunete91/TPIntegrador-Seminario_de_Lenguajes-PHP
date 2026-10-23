<?php
namespace App\Models;
use CodeIgniter\Model;

class AlojamientoModel extends Model
{
    protected $table = 'alojamientos';
    protected $allowedFields = ['nombre', 'categoria', 'ubicacion', 'cupos', 'precio', 'imagen', 'informacion'];

    public function getIdMasReservada()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('reservas');
    
        $builder->select('id_alojamiento, SUM(cantidad) as total_cupos_vendidos');
        $builder->where('id_alojamiento IS NOT NULL', null, false);
        $builder->groupBy('id_alojamiento');
        $builder->orderBy('total_cupos_vendidos', 'DESC');
        $builder->limit(1);
    
        $resultado = $builder->get()->getRow();
    
        return $resultado ? $resultado->id_alojamiento : null;
    }

    public function getAlojamientosConEstado()
    {
        $alojamientos = $this->findAll();
        $idMasReservada = $this->getIdMasReservada();

        foreach ($alojamientos as &$alojamiento) {
            $alojamiento['es_mas_elegido'] = $idMasReservada !== null && $alojamiento['id'] == $idMasReservada;

            if ($alojamiento['cupos'] == 0) {
                $alojamiento['mensaje_estado'] = 'Sin cupo';
                $alojamiento['clase_badge'] = 'text-bg-danger';
            } elseif ($alojamiento['cupos'] <= 4) {
                $alojamiento['mensaje_estado'] = 'Últimos cupos';
                $alojamiento['clase_badge'] = 'text-bg-warning';
            } else {
                $alojamiento['mensaje_estado'] = 'Disponible';
                $alojamiento['clase_badge'] = 'text-bg-secondary';
            }
        }
        return $alojamientos;
    }

    public function getAlojamiento($id)
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

    public function saveAlojamiento($nombre, $categoria, $ubicacion, $cupos, $precio, $imagen, $informacion)
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

    public function updateAlojamiento($id, $newNombre, $newCategoria, $newUbicacion, $newCupos, $newPrecio, $newImagen, $newInformacion)
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

    public function deleteAlojamiento($id)
    {
        $this->delete($id);
    }
}