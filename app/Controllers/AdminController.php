<?php

namespace App\Controllers;
Use App\Models\AlojamientoModel;
Use App\Models\ActividadModel;
Use App\Models\ReservaModel;
Use App\Models\UserModel;
Use CodeIgniter\HTTP\Files\UploadedFile;

class AdminController extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->alojamientoModel = new AlojamientoModel();
        $this->actividadModel = new ActividadModel();
        $this->reservaModel = new ReservaModel();
    }

    public function gestion_actividades_alojamiento()
    {   
        $data = [
            'alojamientos' => $this->alojamientoModel->getAlojamientosConEstado(),
            'actividades' => $this->actividadModel->getActividadesConEstado(),
        ];

        return view('admin/gestion_activid_alojam', $data);
    }

    public function createAlojamiento()
    {
        return view('admin/crear_alojamiento');
    }

    public function createActividad()
    {
        return view('admin/crear_actividad');
    }

    public function editAlojamiento($id)
    {
        $alojamiento = $this->alojamientoModel->getAlojamiento($id);

        return view('admin/editar_alojamiento', ['alojamiento' => $alojamiento]);
    }

    public function editActividad($id)
    {
        $actividad = $this->actividadModel->getActividad($id);

        return view('admin/editar_actividad', ['actividad' => $actividad]);
    }

    public function storeActividad()
    {
        $imagen = $this->request->getFile('imagen');
        $tipoImagenPermitido = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];

        if ($imagen->getError() === UPLOAD_ERR_NO_FILE) {
            $nombreImagen = 'logotipo.png';
        } elseif (!in_array($imagen->getMimeType(), $tipoImagenPermitido)) {
            $nombreImagen = 'logotipo.png';
        } else {
            $imagen->move(FCPATH . 'images');
            $nombreImagen = $imagen->getName();
        }

        $nombre = $this->request->getPost('nombre');
        $categoria = $this->request->getPost('categoria');
        $ubicacion = $this->request->getPost('ubicacion');
        $cupos = $this->request->getPost('cupos');
        $precio = $this->request->getPost('precio');
        $informacion = $this->request->getPost('informacion');
        $this->actividadModel->saveActividad($nombre, $categoria, $ubicacion, $cupos, $precio, $nombreImagen, $informacion);

        return redirect()->to(base_url('admin/gestion_activid_alojam'));
    }

    public function storeAlojamiento()
    {
        $imagen = $this->request->getFile('imagen');
        $tipoImagenPermitido = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];

        if ($imagen->getError() === UPLOAD_ERR_NO_FILE) {
            $nombreImagen = 'logotipo.png';
        } elseif (!in_array($imagen->getMimeType(), $tipoImagenPermitido)) {
            $nombreImagen = 'logotipo.png';
        } else {
            $imagen->move(FCPATH . 'images');
            $nombreImagen = $imagen->getName();
        }
  
        $nombre = $this->request->getPost('nombre');
        $categoria = $this->request->getPost('categoria');
        $ubicacion = $this->request->getPost('ubicacion');
        $precio = $this->request->getPost('precio');
        $cupos = $this->request->getPost('cupos');
        $informacion = $this->request->getPost('informacion');
        $this->alojamientoModel->saveAlojamiento($nombre, $categoria, $ubicacion, $cupos, $precio, $nombreImagen, $informacion);

        return redirect()->to(base_url('admin/gestion_activid_alojam'));
    }

    public function updateAlojamiento($id)
    {
        $nombre = $this->request->getPost('nombre');
        $categoria = $this->request->getPost('categoria');
        $ubicacion = $this->request->getPost('ubicacion');
        $precio = $this->request->getPost('precio');
        $cupos = $this->request->getPost('cupos');
        $informacion = $this->request->getPost('informacion');

        $imagen = $this->request->getFile('imagen');
        $alojamiento = $this->alojamientoModel->getAlojamiento($id);

        $nombreImagen = $alojamiento['imagen'];
        $tipoImagenPermitido = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];

        if ($imagen->getError() !== UPLOAD_ERR_NO_FILE) {
            if (!in_array($imagen->getMimeType(), $tipoImagenPermitido)) {
                $nombreImagen = $alojamiento['imagen'];
            } else {
                $imagen->move(FCPATH . 'images');
                $nombreImagen = $imagen->getName();
            }
        }

        $this->alojamientoModel->updateAlojamiento($id, $nombre, $categoria, $ubicacion, $cupos, $precio, $nombreImagen, $informacion);

        return redirect()->to(base_url('admin/gestion_activid_alojam'));
    }

    public function updateActividad($id)
    {
        $nombre = $this->request->getPost('nombre');
        $categoria = $this->request->getPost('categoria');
        $ubicacion = $this->request->getPost('ubicacion');
        $cupos = $this->request->getPost('cupos');
        $precio = $this->request->getPost('precio');
        $informacion = $this->request->getPost('informacion');

        $imagen = $this->request->getFile('imagen');
        $actividad = $this->actividadModel->getActividad($id);

        $nombreImagen = $actividad['imagen'];
        $tipoImagenPermitido = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];

        if ($imagen->getError() !== UPLOAD_ERR_NO_FILE) {
            if (!in_array($imagen->getMimeType(), $tipoImagenPermitido)) {
                $nombreImagen = $actividad['imagen'];
            } else {
                $imagen->move(FCPATH . 'images');
                $nombreImagen = $imagen->getName();
            }
        }
        
        $this->actividadModel->updateActividad($id, $nombre, $categoria, $ubicacion, $cupos, $precio, $nombreImagen, $informacion);
        return redirect()->to(base_url('admin/gestion_activid_alojam'));
    }

    public function deleteAlojamiento($id)
    {
        $this->alojamientoModel->deleteAlojamiento($id);

        return redirect()->to(base_url('admin/gestion_activid_alojam'));
    }

    public function deleteActividad($id)
    {
        $this->actividadModel->deleteActividad($id);

        return redirect()->to(base_url('admin/gestion_activid_alojam'));
    }

    public function consulta_reservas()
    {
        $data['reservas'] = $this->reservaModel->getReservas();

        return view('admin/consulta_reservas', $data);
    }

    public function consulta_usuarios()
    {
        $data['usuarios'] = $this->userModel->getUsuarios();

        return view('admin/consulta_usuarios', $data);
    }
}
