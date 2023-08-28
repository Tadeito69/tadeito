<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index(): string
    {
        echo view('common/header');
        return view('register');
        echo view('common/footer');
    }


    public function do_register()
    {
        $userModel = new UserModel();

        $nombre = $this->request->getPost('nombre');
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');
        $email = $this->request->getPost('email');


        $contrasena = password_hash("$contrasena", PASSWORD_BCRYPT);

        $data = [
            'nombre' => $nombre,
            'contrasena' => $contrasena,
            'email' => $email,
            'usuario' => $usuario
        ];

        $r = $userModel->crear($data);

        //$r = $userModel->insert($data);

        if ($r) {
            echo "Usuario registrado correctamente";
        } else {
            echo "Error al registrar el usuario";
        }

        //return redirect()->to('/login');
    }
}
