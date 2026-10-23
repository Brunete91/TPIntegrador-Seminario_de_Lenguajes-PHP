<?php

namespace App\Controllers;
use App\Models\UserModel;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function contexto_sc()
    {
        return view('cont_sociocultural');
    }

    public function catalogo()
    {
        return view('gastronomia_actividades');
    }

    public function zona_geo()
    {
        return view('geografia');
    }

    public function info_practica()
    {
        return view('info_turista');
    }

    public function lugares_imp()
    {
        return view('lugares_historicos');
    }
    
    public function login()
    {
        return view('login', [
            'mensaje' => session()->getFlashdata('mensaje'),
        ]);
    }

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function registrar_usuario()
    {
        return view('registrar_usuario', [
            'mensaje' => session()->getFlashdata('mensaje'),
        ]);
    }

    public function storeUsuario()
    {
        $datos = $this->request->getPost(['nombre', 'email', 'password']);

        if (! $this->validateData($datos, [
            'nombre' => 'required|max_length[75]',
            'email' => 'required|valid_email|max_length[50]|is_unique[users.email]',
            'password' => 'required|max_length[128]',
        ], [
            'email' => [
                'is_unique' => 'Ese email ya está registrado.',
            ],
        ])) {
            session()->setFlashdata('mensaje', implode(' ', $this->validator->getErrors()));

            return redirect()->to(site_url('registrar_usuario'));
        }

        $rol = 'cliente';
        $this->userModel->saveUser($datos['nombre'], trim($datos['email']), $datos['password'], $rol);

        return redirect()->to(site_url('login'));
    }

    public function mas_info()
    {
        return view('mas_info');
    }
}
