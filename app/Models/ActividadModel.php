<?php
namespace App\Models;
use CodeIgniter\Model;

class ActividadModel extends Model
{
    protected $table = 'actividades';
    protected $allowedFields = ['nombre', 'categoria', 'ubicacion', 'cupos', 'precio', 'imagen'];

    public function getActividades()
    {
        return $this->findAll();
    }

    public function getActividad($id)
    {
        return $this->where('id', $id)->first();
    }

    public function saveActividad($nombre, $categoria, $ubicacion, $cupos, $precio, $imagen)
    {
        $this->save([
            'nombre' => $nombre,
            'categoria' => $categoria,
            'ubicacion' => $ubicacion,
            'cupos' => $cupos,
            'precio' => $precio,
            'imagen' => $imagen
        ]);
    }

    public function updateActividad($id, $newNombre, $newCategoria, $newUbicacion, $newCupos, $newPrecio, $newImagen)
    {
        $this->update($id, [
            'nombre' => $newNombre,
            'categoria' => $newCategoria,
            'ubicacion' => $newUbicacion,
            'cupos' => $newCupos,
            'precio' => $newPrecio,
            'imagen' => $newImagen
        ]);
    }

    public function deleteActividad($id)
    {
        $this->delete($id);
    }
}