<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personas=Persona::paginate(2);

       /** Redirecciono al index persona */
       return view('persona.index')
               ->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        /** Redirecciono al formulario persona */
        return view('persona.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /**  Valido campos que sean obligatorios y maximo caracteres */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|max:45',
            'apellidos' => 'required|max:45',
            'identificacion' => 'required|max:3',
            'e_mail' => 'required|max:45',
            'direcccion' => 'required|max:45',
            'telefono' => 'required|max:12',
            'fecha_nacimiento' => 'required',
            'genero' => 'required|max:1'
        ]);
        /** Creo una persona en la base datos y Retorno al index  */
        $persona=Persona::create($request->only('nombres','apellidos','identificacion','e_mail','direcccion','telefono','fecha_nacimiento','genero'));
        
        /** variable session para mensajes en pantalla */
        Session::flash('mensaje','Registro creado con éxito');
        return redirect()->route('persona.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return view('persona.form')
        ->with('persona',$persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombres' => 'required|max:45',
            'apellidos' => 'required|max:45',
            'identificacion' => 'required|max:3',
            'e_mail' => 'required|max:45',
            'direcccion' => 'required|max:45',
            'telefono' => 'required|max:12',
            'fecha_nacimiento' => 'required',
            'genero' => 'required|max:1'
        ]);
        $persona->nombres=$request['nombres'];
        $persona->apellidos=$request['apellidos'];
        $persona->identificacion=$request['identificacion'];
        $persona->e_mail=$request['e_mail'];
        $persona->direcccion=$request['direcccion'];
        $persona->telefono=$request['telefono'];
        $persona->fecha_nacimiento=$request['fecha_nacimiento'];
        $persona->genero=$request['genero'];

        $persona->save();
        /** variable session para mensajes en pantalla */
        Session::flash('mensaje','Registro editado con éxito');
        return redirect()->route('persona.index');
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
        Session::flash('mensaje','Registro eliminado con éxito');
        return redirect()->route('persona.index');
    }
}
