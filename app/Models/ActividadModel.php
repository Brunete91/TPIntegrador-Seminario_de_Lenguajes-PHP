<?php
namespace App\Models;
use CodeIgniter\Model;

class ActividadModel extends Model
{
    protected $table = 'actividades';
    protected $allowedFields = ['nombre', 'categoria', 'ubicacion', 'cupos', 'precio', 'imagen', 'informacion'];

    public function getActividades()
    {
        return $this->findAll();
    }

    public function getActividad($id)
    {
        return $this->where('id', $id)->first();
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