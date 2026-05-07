<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    $data['titulo'] = 'Inicio';

    echo view('layouts/header', $data);
    echo view('home', $data);
    echo view('layouts/footer');
    }
}
