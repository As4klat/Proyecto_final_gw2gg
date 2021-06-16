<?php

namespace App\Http\Controllers;

use App\Models\Solicitudes;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {
        return view('solicitud');
    }

    public function save(){

        request()->validate([
            'cuenta' => 'required|max:50',
            'clases' => 'required|max:254',
            'motivo' => 'required|max:254'
        ]);

        Solicitudes::create([
            'nombre_cuenta' => request('cuenta'),
            'clases' => request('clases'),
            'motivo' => request('motivo'),
            'aceptado' => 0
        ]);

        return back()->with('message', 'Solicitud enviada !');
    }
}
