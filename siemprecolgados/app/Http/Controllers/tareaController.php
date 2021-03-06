<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Models\Tareas;
use App\Models\formClient;
use App\Models\User;

class tareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tareas.index', [
            'tareas' => Tareas::orderBy('id', 'desc')->paginate(4),
            
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas.create',[
            'clientes'=>Clientes::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //He dejado que pueda poner otro nombre que no sea el cliente por si quiero que sea un empleado de un cliente el 
        //que hace una petición 
        $tareas = new Tareas;
        $p= Clientes::where('id',$request->cliente_id)->get();
        $tareas->cliente_id = $request->cliente_id;
        $tareas->nombre = $request->nombre;
        $tareas->telefono = $request->telefono;
        $tareas->descripcion = $request->descripcion;
        $tareas->correo = $request->correo;
        $tareas->pais =$p[0]->paises->id;
        $tareas->cuenta_corriente=$p[0]->cuenta_corriente;
        $tareas->dir = $request->dir;
        $tareas->estado = $request->estado;
        $tareas->fecha_crea = $request->fecha_crea;
        $tareas->fecha_rea = $request->fecha_rea;
        $tareas->anotaciones_anteriores = $request->anotaciones_anteriores;
        $tareas->anotaciones_posteriores = $request->anotaciones_posteriores;
        $tareas->fichero = $request->fichero;
        $tareas->save();
        return redirect()->route('tareas.index')
        ->with('success','Añadido con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('tareas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tareas $tarea)
    {
        $usuario=User::all()->where('privilege',0);
        return view('tareas.edit', compact('tarea','usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tareas = tareas::find($id);
        $tareas->cliente_id = $request->cliente_id;
        $tareas->nombre = $request->nombre;
        $tareas->telefono = $request->telefono;
        $tareas->descripcion = $request->descripcion;
        $tareas->correo = $request->correo;
        $tareas->dir = $request->dir;
        $tareas->estado = $request->estado;
        $tareas->fecha_crea = $request->fecha_crea;
        $tareas->fecha_rea = $request->fecha_rea;
        $tareas->anotaciones_anteriores = $request->anotaciones_anteriores;
        $tareas->anotaciones_posteriores = $request->anotaciones_posteriores;
        $tareas->fichero = $request->fichero;
        $tareas->save();
        return redirect()->route('tareas.index')
            ->with('success', 'Se ha editado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tareas::destroy($id);
        return redirect()->route('tareas.index')
        ->with('success', 'Se eliminó correctamente');
    }
}
