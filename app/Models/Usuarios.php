<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'email', 'contrasena', 'usuario'];

    public function obtenerUsuarioPorNombre($usuario)
    {
        return $this->where('usuario', $usuario)->first();
    }
    public function insert($data = null, bool $returnID = true)
    {
        if (isset($data['contrasena'])) {
            $data['contrasena'] = password_hash($data['contrasena'], PASSWORD_DEFAULT);
        }

        return parent::insert($data, $returnID);
    }
}
