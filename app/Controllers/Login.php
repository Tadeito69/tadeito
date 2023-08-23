<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        echo view('common/header');
        echo view('login', ["mensaje" => $mensaje]);
        //echo view('common/footer');
    }
    public function do_login()
    {

        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $contrasena = $this->request->getPost('contrasena');

        $data = [
            'email' => $email,
            'contrasena' => $contrasena
        ];

        $r = $userModel->obtenerUsuario($data);

        if (count($r) > 0) {
            $data = [
                'id' => $r[0]['id'],
                'nombre' => $r[0]['nombre'],
                'email' => $r[0]['email'],
                'isLoggedIn' => true
            ];

            $session = session();
            $session->set($data);
            return redirect()->to('/dashboard1');
        } else {
            $session = session();
            $session->setFlashdata('mensaje', 'Usuario o contraseña incorrectos');
            return redirect()->to('/login');
        }
    }
}
