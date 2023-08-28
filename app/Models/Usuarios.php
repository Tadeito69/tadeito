<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'usuario', 'contrasena', 'email', 'crear_u', 'actualizar_u', 'borrar_u'];

    protected $useTimestamps = false;
    protected $createdField = 'crear_u';
    protected $updatedField = 'actualizar_u';
    protected $deletedField = 'borrar_u';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}


class Usuarios
{
   public function obtenerUsuario()
    {
        // Aquí implementa la lógica para obtener un usuario según las condiciones
        // Debe devolver los datos del usuario en algún formato, como un arreglo
 }   
}


