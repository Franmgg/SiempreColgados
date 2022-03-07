<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\PDFController;

use App\Models\Cuotas;

class cuotasE extends Controller
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
        return view('cuotasE.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cliente = new Clientes;
        $c = $cliente->all();
        foreach($c as $clientes){  
            $cuotas = new Cuotas;
             $email = new SendEmailController();
             $email->sendEmail($clientes,$request);
             $cuotas->concepto = $request->concepto;
             $cuotas->fecha_emision = $request->fecha_emision;
             $cuotas->importe = $request->importe;
             $cuotas->pagada = $request->pagada;
             $cuotas->fecha_pago = $request->fecha_pago;
             $cuotas->notas = $request->notas;
             $cuotas->cliente_id = $clientes->id;
             $cuotas->save();   
        }
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
        //
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
        //
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
