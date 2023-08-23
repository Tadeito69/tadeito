<?php

namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function mostrarVista($id)
    { {
            $data['id'] = $id;
            return view('mi_vista', $data);
        }
        echo view('common/header');
        return view('dashboard1');
    }
}
