<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
{
    $data['titulo'] = 'Inicio';

    return view('home', $data);
}
}
