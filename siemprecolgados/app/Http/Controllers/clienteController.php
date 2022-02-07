<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.index', [
            'clientes' => Clientes::orderBy('id', 'desc')->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Clientes;
        $clientes->nombre = $request->nombre;
        $clientes->cif = $request->cif;
        $clientes->telefono = $request->telefono;
        $clientes->correo = $request->correo;
        $clientes->cuenta_corriente = $request->cuenta_corriente;
        $clientes->pais = $request->pais;
        $clientes->moneda = $request->telefono;
        $clientes->importe = 0;
        $clientes->save();
        return redirect()->route('clientes.index')
            ->with('success', 'Añadido con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('clientes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $cliente)
    {
        return view('clientes.edit', compact('cliente'));
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
        $clientes = clientes::find($id);
        $clientes->nombre = $request->nombre;
        $clientes->cif = $request->cif;
        $clientes->telefono = $request->telefono;
        $clientes->correo = $request->correo;
        $clientes->cuenta_corriente = $request->cuenta_corriente;
        $clientes->pais = $request->pais;
        $clientes->moneda = $request->telefono;
        $clientes->importe = $request->importe;
        $clientes->save();
        return redirect()->route('clientes.index')
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
        Clientes::destroy($id);
        return redirect()->route('clientes.index')
            ->with('success', 'Se eliminó correctamente');
    }
}
