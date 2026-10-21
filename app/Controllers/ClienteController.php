<?php

namespace App\Controllers;
Use App\Models\AlojamientoModel;
Use App\Models\ActividadModel;
use App\Models\ReservaModel;

class ClienteController extends BaseController
{
    public function __construct()
    {
        $this->alojamientoModel = new AlojamientoModel();
        $this->actividadModel = new ActividadModel();
        $this->reservaModel = new ReservaModel();
    }

    public function verActividades()
    {
        $data ['actividades'] = $this->actividadModel->getActividadesConEstado();

        return view('cliente/catalogo-actividades', $data);
    }

    public function verAlojamientos()
    {
        $data ['alojamientos'] = $this->alojamientoModel->getAlojamientosConEstado();

        return view('cliente/catalogo-alojamientos', $data);
    }

    public function detalle_alojamiento($id)
    {
        $alojamiento = $this->alojamientoModel->getAlojamiento($id);

        return view('cliente/detalle-alojamiento', $alojamiento);
    }

    public function detalle_actividad($id)
    {
        $actividad = $this->actividadModel->getActividad($id);

        return view('cliente/detalle-actividad', $actividad);
    }

    public function historial_reservas()
    {
        $data ['reservas'] = $this->reservaModel->getReservasPorUsuario(session()->get('usuario_id'));

        return view('cliente/historial-reservas', $data);
    }

    public function storeReserva()
    {
        $datos = $this->request->getPost(['tipo', 'item_id', 'cantidad']);

        if (
            ! in_array($datos['tipo'] ?? null, ['actividad', 'alojamiento'], true)
            || ! ctype_digit((string) ($datos['item_id'] ?? ''))
            || ! ctype_digit((string) ($datos['cantidad'] ?? ''))
            || (int) $datos['item_id'] < 1
            || (int) $datos['cantidad'] < 1
        ) {
            session()->setFlashdata('mensaje', 'Los datos de la reserva no son válidos.');
            return redirect()->back()->withInput();
        }

        $itemId = (int) $datos['item_id'];
        $cantidad = (int) $datos['cantidad'];

        if ($datos['tipo'] === 'actividad'){
            $item = $this->actividadModel->getActividad($itemId);
            $actividadId = $itemId;
            $alojamientoId = null;
            $modeloItem = $this->actividadModel;
        } else {
            $item = $this->alojamientoModel->getAlojamiento($itemId);
            $actividadId = null;
            $alojamientoId = $itemId;
            $modeloItem = $this->alojamientoModel;
        }

        if (! $item) {
            session()->setFlashdata('mensaje', 'No se encontró el alojamiento o la actividad.');
            return redirect()->back()->withInput();
        }

        if ($cantidad > $item['cupos']){
            session()->setFlashdata('mensaje', 'No hay suficientes cupos disponibles');
            return redirect()->back()->withInput();
        }

        $usuarioId = session()->get('usuario_id'); 
        $fechaReserva = date('Y-m-d');
        $pago = $item['precio'] * $cantidad;

        $db = \Config\Database::connect();
        $db->transBegin();

        if (! $modeloItem->descontarCupos($itemId, $cantidad)) {
            $db->transRollback();
            session()->setFlashdata('mensaje', 'No hay suficientes cupos disponibles.');
            return redirect()->back()->withInput();
        }

        $reservaGuardada = $this->reservaModel->saveReserva(
            $usuarioId,
            $actividadId,
            $alojamientoId,
            $fechaReserva,
            $cantidad,
            $pago
        );

        if ($reservaGuardada === false || ! $db->transCommit()) {
            $db->transRollback();
            session()->setFlashdata('mensaje', 'No se pudo guardar la reserva.');
            return redirect()->back()->withInput();
        }

        return redirect()->to(base_url('cliente/historial-reservas'));
    }
}