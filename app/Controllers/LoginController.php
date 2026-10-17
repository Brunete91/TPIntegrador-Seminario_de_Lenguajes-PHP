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
        $datos = $this->request->getPost(['email', 'password']);
        $user = $this->userModel->getUserEmail($datos['email']);

        if (! $this->validateData($datos, [
            'email' => 'required|valid_email',
            'password' => 'required|max_length[128]',
        ])) {
            session()->setFlashdata('mensaje', 'Completá el email y la contraseña con valores válidos.');

            return redirect()->to(site_url('login'));
        }

        if (
            !$user || !password_verify($datos['password'], $user['password'])
        ) {
            session()->setFlashdata('mensaje', 'Email o contraseña incorrectos.');

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