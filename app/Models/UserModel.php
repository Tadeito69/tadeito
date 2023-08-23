<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'contrasena', 'email', 'crear_u', 'actualizar_u', 'borrar_u'];

    protected $useTimestamps = false;
    protected $createdField = 'crear_u';
    protected $updatedField = 'actualizar_u';
    protected $deletedField = 'borrar_u';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;



    public function crear($data)
    {
        $Usuario = $this->db->table('usuarios');
        $Usuario->insert($data);
        return $this->db->insertID();
    }
    //{
    //$Usuario = $this->db->table('usuarios');
    // $Usuario->where($data);
    // return $Usuario->get()->getResultArray();
    //}
}
