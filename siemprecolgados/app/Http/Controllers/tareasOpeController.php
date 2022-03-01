<?php

namespace App\Http\Controllers;

use App\Models\formClient;
use App\Models\Paises;
use Illuminate\Http\Request;
use App\Models\Tareas;
use FormClient as GlobalFormClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
            'tareas' => Tareas::where('user_id', Auth::id())
            ->where('terminada',null)
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
      return redirect("tareasOpe");

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
    public function edit($id)
    {
        $tarea=Tareas::findOrFail($id);
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
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'pais' => 'required',
            'cif' => 'required',
            'telefono' => 'required',
            'cuenta_corriente' => 'required',
            'descripcion' => 'required',
        ]);



        if($request->has('check'))$check=1;
        $p = Paises::where('nombre',$request->pais)->get();
        $tareas = Tareas::find($id);
        $tareas->nombre = $request->nombre;
        $tareas->cif = $request->cif;
        $tareas->pais = $p[0]->id;
        $tareas->correo = $request->correo;
        $tareas->telefono = $request->telefono;
        $tareas->cuenta_corriente = $request->cuenta_corriente;
        $tareas->descripcion = $request->descripcion;
        $tareas->terminada = $check ?? null;
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
