<?php

use Illuminate\Routing\Controller as BaseController;

namespace App\Http\Controllers;

class MiControlador extends Controller
{
    
    public function saludar($nombre, $apellido = null)
    {
        
       // return route('panel.saludos');

       return "Hola {$nombre} {$apellido}";
    }
}
