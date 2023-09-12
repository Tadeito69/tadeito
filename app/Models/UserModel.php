<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'email', 'contrasena', 'usuario'];

    public function crear($data)
    {
        return $this->insert($data);
    }
    public function obtenerUsuario($data)
    {
        $Usuario = $this->db->table('usuarios');
        $Usuario->where($data);
        return $Usuario->get()->getRow();
    }
}
