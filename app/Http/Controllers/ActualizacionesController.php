<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualizacionesController extends Controller
{
    public function index()
    {
        return view('actualizaciones');
    }
}
