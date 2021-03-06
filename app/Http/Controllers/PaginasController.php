<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    
    public function recibeContacto(Request $request) {

        $request->validate([
            'correo' => 'required|email',
            'comentario' => ['required', 'min:5', 'max:500'],
            'telefono' => 'numeric'
        ]);

        $contacto = new Contacto();
        $contacto->correo = $request->correo;
        $contacto->telefono = $request->telefono;
        $contacto->comentario = $request->comentario;
        $contacto->save();

        // DB::table('contactos')->insert([
        //     'correo' => $request->correo,
        //     'telefono' => $request->telefono,
        //     'comentario' => $request->comentario,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        return redirect()->route('contacto');

    }

}
