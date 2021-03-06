<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuotas;
use App\Models\Clientes;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\PDFController;

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
        return view('cuotas.create',[
            'clientes'=>Clientes::all()
        ]);
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
        $cliente = new Clientes;
        $c=$cliente::find($request->cliente_id);
        $email = new SendEmailController($request);
        $email->sendEmail($c,$request);
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
        $cuotas = Cuotas::where('id',$id)->first();
        $cliente = new Clientes;
        $c=$cliente::find($cuotas->cliente_id);
        $pdf=new PDFController;
        return  $pdf::verPDF($c,$cuotas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuotas $cuota)
    {
        return view('cuotas.edit', compact('cuota'));
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
            'concepto' => 'required',
            'fecha_emision' => 'required',
            'fecha_pago' => 'required',
            'pagada' => 'required',
            'cliente_id' => 'required',
            'notas' => 'required',
            'importe' => 'required'   
        ]);
        $cuotas = cuotas::find($id);
        $cuotas->concepto = $request->concepto;
        $cuotas->fecha_emision = $request->fecha_emision;
        $cuotas->importe = $request->importe;
        $cuotas->pagada = $request->pagada;
        $cuotas->fecha_pago = $request->fecha_pago;
        $cuotas->notas = $request->notas;
        $cuotas->cliente_id = $request->cliente_id;
        $cuotas->save();
        return redirect()->route('cuotas.index')
            ->with('success', 'Se ha editado satisfactoriamente')  ;
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
