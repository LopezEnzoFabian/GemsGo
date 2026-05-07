<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UsuarioModel();
        $user = $userModel->where('email', $email)
                          ->where('password', $password)
                          ->first();

        if ($user) {
            session()->set('usuario_id', $user['id']);
            return redirect()->to('/productos');
        } else {
            return "Credenciales incorrectas";
        }
    }
}