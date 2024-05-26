<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function sobreNosotros()
    {
        return view('sobre-nosotros');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
