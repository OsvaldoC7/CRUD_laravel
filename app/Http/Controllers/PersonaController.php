<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class PersonaController extends Controller {

    // Ejemplo middleware
    /*public function __construct() {
        $this->middleware('auth')->except('index');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        //$personas = Persona::with('areas')->get();
        //$personas = Persona::where('user_id', Autht::id()->get())
        
        $personas = Auth::user()->personas;
        //$personas = Auth::user()->personas()->get();

        return view('personas/personasIndex', compact('personas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('personas/personasForm', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $request->validate([

            'nombre' => 'required|max:255',
            'apellido_paterno' => 'required|max:255',
            'apellido_materno' => 'max:255',
            'codigo' => 'required|max:255|unique:App\Models\Persona,codigo',
            'correo' => 'email|max:255',
            'telefono' => 'max:50'

        ]);
        
        $request->merge([
            'user_id' => Auth::id(),
            'apellido_materno' => $request->apellido_materno ?? ''
        ]);
        $persona = Persona::create($request->all());
        $persona->areas()->attach($request->area_id);

        // $persona = new Persona();
        // $persona->nombre = $request->nombre;
        // $persona->apellido_paterno = $request->apellido_paterno;
        // $persona->apellido_materno = $request->apellido_materno ?? '';
        // $persona->codigo = $request->codigo;
        // $persona->telefono = $request->telefono ?? '';
        // $persona->correo = $request->correo ?? '';
        // $persona->save();

        return redirect()->route('persona.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona) {

        return view('personas.personasShow', compact('persona'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona) {

        $areas = Area::all();
        return view('personas.personasForm', compact('persona', 'areas'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona) {

        $request->validate([

            'nombre' => 'required|max:255',
            'apellido_paterno' => 'required|max:255',
            'apellido_materno' => 'max:255',
            'codigo' => [
                        'required',
                        Rule::unique('personas')->ignore($persona->id)
                    ],
            'correo' => 'email|max:255',
            'telefono' => 'max:50'

        ]);

        $request->merge(['apellido_materno' => $request->apellido_materno ?? '']);
        Persona::where('id', $persona->id)->update($request->except('_token', '_method', 'area_id'));
        $persona->areas()->sync($request->area_id);

        /*$persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno ?? '';
        $persona->codigo = $request->codigo;
        $persona->telefono = $request->telefono ?? '';
        $persona->correo = $request->correo ?? '';
        $persona->save();*/

        return redirect()->route('persona.show', $persona);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index');
    }
}