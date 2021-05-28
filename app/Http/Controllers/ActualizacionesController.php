<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ScrapingController as ControllersScrapingController;
use App\Models\Actualizaciones;
use Illuminate\Http\Request;

class ActualizacionesController extends Controller
{
    public function index()
    {
        route('scraping');
        $actualizaciones = Actualizaciones::latest()->paginate(10);
        return view('actualizaciones.index', compact('actualizaciones'));
    }

    public function show(Actualizaciones $actualizacion)
    {
        return view('actualizaciones.show', [
            'actualizacion' => $actualizacion
        ]);
    }
}
