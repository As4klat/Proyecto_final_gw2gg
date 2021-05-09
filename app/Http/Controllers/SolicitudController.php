<?php

namespace App\Http\Controllers;

use App\Models\solicitudes;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {
        return view('solicitud');
    }

    public function save(){

        request()->validate([
            'cuenta' => 'required',
            'clases' => 'required',
            'motivo' => 'required'
        ]);

        solicitudes::create([
            'nombre_cuenta' => request('cuenta'),
            'clases' => request('clases'),
            'motivo' => request('motivo')
        ]);

        return back();
    }
}
