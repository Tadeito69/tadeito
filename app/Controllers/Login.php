<?php

namespace App\Controllers;

use App\Models\Usuarios;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        echo view('common/header');
        echo view('login');
        // echo view('common/footer');
    }

    public function do_login()
    {
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if (!empty($datosUsuario) && password_verify($contrasena, $datosUsuario[0]['contrasena'])) {
            $data = [
                "usuario" => $datosUsuario[0]['usuario'],
                "type" => $datosUsuario[0]['type']
            ];
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/inicio'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
