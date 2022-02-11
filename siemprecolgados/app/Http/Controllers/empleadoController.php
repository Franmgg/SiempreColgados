<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.index', [
            'empleados' => Empleados::orderBy('id', 'desc')->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new Empleados;
        $empleados->nombre = $request->nombre;
        $empleados->password = $request->password;
        $empleados->dni = $request->dni;
        $empleados->correo = $request->correo;
        $empleados->telefono = $request->telefono;
        $empleados->direccion = $request->direccion;
        $empleados->fecha_alta = $request->fecha_alta;
        $empleados->tipo = $request->tipo;
        $empleados->save();
        return redirect()->route('empleados.index')
            ->with('success', 'Se ha editado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('empleados.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleados $empleado)
    {
        return view('empleados.edit', compact('empleado'));
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
        $empleados = empleados::find($id);
        $empleados->nombre = $request->nombre;
        $empleados->password = $request->password;
        $empleados->dni = $request->dni;
        $empleados->correo = $request->correo;
        $empleados->telefono = $request->telefono;
        $empleados->direccion = $request->direccion;
        $empleados->fecha_alta = $request->fecha_alta;
        $empleados->tipo = $request->tipo;
        $empleados->save();
        return redirect()->route('empleados.index')
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
        Empleados::destroy($id);
        return redirect()->route('empleados.index')
        ->with('success', 'Se eliminó correctamente');
    }
}
