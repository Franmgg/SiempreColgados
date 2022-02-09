<?php

namespace App\Http\Controllers;

use App\Models\Cuota;
use Illuminate\Http\Request;
use App\Models\Cuotas;

class cuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cuotas.index', [
            'cuotas' => Cuotas::orderBy('id', 'desc')->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuotas = new Cuotas;
        $cuotas->concepto = $request->concepto;
        $cuotas->fecha_emision = $request->fecha_emision;
        $cuotas->importe = $request->importe;
        $cuotas->pagada = $request->pagada;
        $cuotas->fecha_pago = $request->fecha_pago;
        $cuotas->notas = $request->notas;
        $cuotas->cliente_id = $request->cliente_id;
        $cuotas->save();
        return redirect()->route('cuotas.index')
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
        return view('coutas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuotas $cuota)
    {
        return view('coutas.edit', compact('cuota'));
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
        $cuotas = Cuotas::find($id);
        $cuotas->concepto = $request->concepto;
        $cuotas->fecha_emision = $request->fecha_emision;
        $cuotas->importe = $request->importe;
        $cuotas->pagada = $request->pagada;
        $cuotas->fecha_pago = $request->fecha_pago;
        $cuotas->notas = $request->notas;
        $cuotas->cliente_id = $request->cliente_id;
        $cuotas->save();
        return redirect()->route('cutoas.index')
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
        Cuotas::destroy($id);
        return redirect()->route('cuotas.index')
        ->with('success', 'Se eliminó correctamente');
    }
}
