<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use App\Models\User;
use App\Models\formClient;

class avisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('avisos.index', [
            'tareas' => formClient::where('user_id', null)
            ->orderByDesc('id')
            ->paginate(4)
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea=formClient::findOrFail($id);
        $usuario =User::all()->where('privilege',"0");
       return view('avisos.edit', compact('tarea','usuario'));
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
        $tarea = formClient::find($id);
        $tarea->nombre = $request->nombre;
        $tarea->cif=$request->cif;
        $tarea->pais = $request->pais;
        $tarea->correo = $request->correo;
        $tarea->telefono = $request->telefono;
        $tarea->cuenta_corriente = $request->cuenta_corriente;
        $tarea->descripcion = $request->descripcion;
        $tarea->user_id = $request->user_id;
        $tarea->save();
        return redirect()->route('avisos.index')
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
        formClient::destroy($id);
        return redirect()->route('avisos.index')
            ->with('success', 'Se eliminó correctamente');
    }
}
