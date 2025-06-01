<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function registro()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registro_view');
        echo view('front/footer_view');
    }

    public function productos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/productos_view');
        echo view('front/footer_view');
    }

    public function login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login_view');
        echo view('front/footer_view');
    }

    public function nosotros()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_view');
        echo view('front/footer_view');
    }
}
