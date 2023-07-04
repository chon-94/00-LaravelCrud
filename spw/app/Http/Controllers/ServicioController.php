<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function servicio()
    {
        return view('web.servicio');
    }
}
