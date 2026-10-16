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
            'alojamientos' => $this->alojamientoModel->getAlojamientos(),
            'actividades' => $this->actividadModel->getActividades(),
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
        if (empty($_FILES['imagen']['name'])) {
            $nombreImagen = 'default.jpg';
        } else {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('imagen')) {
                $nombreImagen = 'default.jpg';
            } else {
                $data = $this->upload->data();
                $nombreImagen = $data['file_name'];
            }
        }

        $nombre = $this->request->getPost('nombre');
        $categoria = $this->request->getPost('categoria');
        $ubicacion = $this->request->getPost('ubicacion');
        $cupos = $this->request->getPost('cupos');
        $precio = $this->request->getPost('precio');
        $this->actividadModel->saveActividad($nombre, $categoria, $ubicacion, $cupos, $precio, $nombreImagen);

        return redirect()->to(base_url('admin/gestion_activid_alojam'))->with('mensaje', 'Actividad creada con éxito');
    }

    public function storeAlojamiento()
    {
        if (empty($_FILES['imagen']['name'])) {
            $nombreImagen = 'default.jpg';
        } else {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('imagen')) {
                $nombreImagen = 'default.jpg';
            } else {
                $data = $this->upload->data();
                $nombreImagen = $data['file_name'];
            }
        }    

        $nombre = $this->request->getPost('nombre');
        $categoria = $this->request->getPost('categoria');
        $ubicacion = $this->request->getPost('ubicacion');
        $precio = $this->request->getPost('precio');
        $cupos = $this->request->getPost('cupos');
        $this->alojamientoModel->saveAlojamiento($nombre, $categoria, $ubicacion, $cupos, $precio, $nombreImagen);

        return redirect()->to(base_url('admin/gestion_activid_alojam'))->with('mensaje', 'Alojamiento creado con éxito');
    }

    public function updateAlojamiento($id)
    {
        $nombre = $this->request->getPost('nombre');
        $categoria = $this->request->getPost('categoria');
        $ubicacion = $this->request->getPost('ubicacion');
        $precio = $this->request->getPost('precio');
        $cupos = $this->request->getPost('cupos');

        if($this->request->getFile('imagen') == null){
            $alojamiento = $this->alojamientoModel->getAlojamiento($id);
            $nombreImagen = $alojamiento['imagen'];
        } else {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            $data = $this->upload->data();
            $nombreImagen = $data['file_name'];
        }

        $this->alojamientoModel->updateAlojamiento($id, $nombre, $categoria, $ubicacion, $precio, $cupos, $nombreImagen);

        return redirect()->to(base_url('admin/gestion_activid_alojam'))->with('mensaje', 'Alojamiento actualizado con éxito');
    }

    public function updateActividad($id)
    {
        $nombre = $this->request->getPost('nombre');
        $categoria = $this->request->getPost('categoria');
        $ubicacion = $this->request->getPost('ubicacion');
        $cupos = $this->request->getPost('cupos');
        $precio = $this->request->getPost('precio');

        if($this->request->getFile('imagen') == null){
            $actividad = $this->actividadModel->getActividad($id);
            $nombreImagen = $actividad['imagen'];
        } else {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            $data = $this->upload->data();
            $nombreImagen = $data['file_name'];
        }
        
        $this->actividadModel->updateActividad($id, $nombre, $categoria, $ubicacion, $cupos, $precio, $nombreImagen);
        return redirect()->to(base_url('admin/gestion_activid_alojam'))->with('mensaje', 'Actividad actualizada con éxito');
    }

    public function deleteAlojamiento($id)
    {
        $this->alojamientoModel->deleteAlojamiento($id);

        return redirect()->to(base_url('admin/gestion_activid_alojam'))->with('mensaje', 'Alojamiento eliminado con éxito');
    }

    public function deleteActividad($id)
    {
        $this->actividadModel->deleteActividad($id);

        return redirect()->to(base_url('admin/gestion_activid_alojam'))->with('mensaje', 'Actividad eliminada con éxito');
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
