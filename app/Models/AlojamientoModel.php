<?php
namespace App\Models;
use CodeIgniter\Model;

class AlojamientoModel extends Model
{
    protected $table = 'alojamientos';
    protected $allowedFields = ['nombre', 'categoria', 'ubicacion', 'cupos', 'precio', 'imagen', 'informacion'];

    public function getAlojamientos()
    {
        return $this->findAll();
    }

    public function getAlojamiento($id)
    {
        return $this->where('id', $id)->first();
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