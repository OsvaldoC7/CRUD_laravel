<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller {

    public function presentacion($nombre = null, $apellido = null) {
        $nombre_completo = strtoupper($nombre . ' ' . $apellido);
        return view('presentacion', compact('nombre', 'apellido'))
            ->with(['nombre_completo' => $nombre_completo]);
    }

    public function contacto() {
        return view('contacto');
    }

    public function informacion() {
        return view('informacion');
    }

}
