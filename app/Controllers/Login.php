<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function verificar()
    {
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');

        $usuariosModel = new Usuarios();
        $usuarioEncontrado = $usuariosModel->obtenerUsuarioPorNombre($usuario);

        if ($usuarioEncontrado && password_verify($contrasena, $usuarioEncontrado['contrasena'])) {
            // Iniciar sesión aquí si es necesario
            // return redirect()->to(base_url('iniciar')); // Credenciales correctas, redirigir al inicio
            return view('inicio');
        } else {
            return redirect()->to(base_url('login'))->with('mensaje', 'Credenciales incorrectas');
            // Credenciales incorrectas, mantener al usuario en la vista de login
        }
    }
}
