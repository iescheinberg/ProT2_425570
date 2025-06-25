<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'pagina principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function registro()
    {
        helper('form');
        $data['titulo'] = 'registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/registro');
        echo view('front/footer_view');
    }

    public function productos()
    {
        if (!session()->has('usuario')) {
            return redirect()->to(base_url('login'))->with('error', 'Debe iniciar sesión para acceder');
        }

        $data['titulo'] = 'productos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/productos_view');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo'] = 'login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/login_view');
        echo view('front/footer_view');
    }

    public function nosotros()
    {
        if (!session()->has('usuario')) {
            return redirect()->to(base_url('login'))->with('error', 'Debe iniciar sesión para acceder');
        }

        $data['titulo'] = 'nosotros';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_view');
        echo view('front/footer_view');
    }
}
