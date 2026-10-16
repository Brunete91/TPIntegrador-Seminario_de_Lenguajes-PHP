<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\HTTP\RedirectResponse;

class LoginController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login(): string|RedirectResponse
    {
        if (session()->get('logueado') === true) {
            $user = $this->userModel->getUserId(session()->get('usuario_id'));

            if ($user['rol'] === 'admin') {
                return redirect()->to(site_url('admin/gestion_activid_alojam'));
            } else {
                return redirect()->to(site_url('usuario/catalogo_activid_alojam'));
            }
        }

        return view('login', [
            'mensaje' => session()->getFlashdata('mensaje'),
        ]);
    }

    public function autenticar(): RedirectResponse
    {
        $datos = $this->request->getPost(['usuario', 'password']);
        $user = $this->userModel->getUserUsuario($datos['usuario']);

        if (! $this->validateData($datos, [
            'usuario' => 'required|max_length[45]',
            'password' => 'required|max_length[90]',
        ])) {
            session()->setFlashdata('mensaje', 'Completá el usuario y la contraseña con valores válidos.');

            return redirect()->to(site_url('login'));
        }

        if (
            !$user || !password_verify($datos['password'], $user['password'])
        ) {
            session()->setFlashdata('mensaje', 'Usuario o contraseña incorrectos.');

            return redirect()->to(site_url('login'));
        }

        session()->regenerate(true);
        session()->set([
            'usuario_id' => $user['id'],
            'nombre' => $user['nombre'],
            'logueado' => true,
        ]);
        session()->setFlashdata('mensaje', 'Inicio de sesión exitoso.');

        if ($user['rol'] === 'admin') {
            return redirect()->to(site_url('admin/gestion_activid_alojam'));
        } else {
            return redirect()->to(site_url('usuario/catalogo_activid_alojam'));
        }
    }

    public function logout(): RedirectResponse
    {
        session()->destroy();

        return redirect()->to(site_url('login'));
    }
}