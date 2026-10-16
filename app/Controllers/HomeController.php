<?php

namespace App\Controllers;

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
}
