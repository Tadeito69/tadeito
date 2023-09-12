<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function do_register()
    {
        $userModel = new UserModel();

        $nombre = $this->request->getPost('nombre');
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');
        $email = $this->request->getPost('email');

        $existingUser = $userModel->where('usuario', $usuario)->first();

        if ($existingUser) {
            return redirect()->to(base_url('/register'))->with('mensaje', 'El nombre de usuario ya está en uso.');
        } else {
            $contrasena = password_hash($contrasena, PASSWORD_BCRYPT);

            $data = [
                'nombre' => $nombre,
                'contrasena' => $contrasena,
                'email' => $email,
                'usuario' => $usuario
            ];

            $result = $userModel->insert($data);

            if ($result) {
                return redirect()->to(base_url('/login'))->with('mensaje', 'Usuario registrado correctamente');
            } else {
                return redirect()->to(base_url('/register'))->with('mensaje', 'Error al registrar el usuario');
            }
        }
    }
}
