<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoControlador extends Controller
{
    public function principal($nombre = null)
    {
        return 'hola mundo';
    }
}
