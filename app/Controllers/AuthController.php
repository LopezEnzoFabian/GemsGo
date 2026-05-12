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
        $model = new UsuarioModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $model->where('email', $email)->first();

        if ($usuario && $usuario['password'] == $password) {

            session()->set([
                'id_usuario' => $usuario['id_usuario'],
                'email' => $usuario['email'],
                'logged_in' => true
            ]);

            return redirect()->to('/productos');

        } else {
            return view('auth/login', [
                'error' => 'Datos incorrectos'
            ]);
        }
    }

    public function logout()
{
    session()->destroy(); // cerrar session

    return redirect()->to('/login');
}
}