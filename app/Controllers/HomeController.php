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
        return view('registrar_usuario');
    }

    public function storeUsuario()
    {
        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $rol = 'cliente';
        $this->userModel->saveUser($nombre, $email, $password, $rol);

        return redirect()->to('/login');
    }

    public function mas_info()
    {
        return view('mas_info');
    }
}
