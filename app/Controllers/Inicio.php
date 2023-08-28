<?php

namespace App\Controllers;


class Inicio extends BaseController
{
    public function index()
    {
        echo view('common/header'); // Puedes cargar tu encabezado aquí
        echo view('inicio'); // Aquí renderiza la vista de la página de inicio
        //echo view('common/footer'); // Puedes cargar tu pie de página aquí
    }
}
