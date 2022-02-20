<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

class tareasOpeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tareasOpe.index', [
            'tareas' => Tareas::orderBy('id', 'desc')->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('tareasOpe.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tareas $tarea)
    {
        return view('tareasOpe.edit', compact('tarea'));
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
        return redirect()->route('tareasOpe.index')
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
        //
    }
}
