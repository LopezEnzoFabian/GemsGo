<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class ProductoController extends BaseController
{
    public function index()
    {
        if (!session()->get('id_usuario')) {
            return redirect()->to('/login');
        }

        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->findAll();

        return view('productos/lista', $data);
    }
}