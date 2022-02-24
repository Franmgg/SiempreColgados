<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Models\formClient;
use App\Models\Tareas;
use App\Models\Paises;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formClient.index',
        [ 'paises'=>Paises::all()]);
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
        $checktlf=Clientes::where('telefono',$request->telefono)->get();
        $checkcif=Clientes::where('cif',$request->cif)->get();
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'descripcion' => 'required',
            'correo' => 'required|email',
            'cuenta_corriente' => 'required'
        ]);

    
        if($checktlf->count()==1&&$checkcif->count()==1){
           
        //Formulario Tareas cliente;
        $tareas = new Tareas;
        $tareas->cliente_id = $checkcif[0]->id;
        $tareas->nombre = $request->nombre;
        $tareas->cif = $request->cif;
        $tareas->pais = $checkcif[0]->pais;
        $tareas->correo = $request->correo;
        $tareas->telefono = $request->telefono;
        $tareas->cuenta_corriente = $request->cuenta_corriente;
        $tareas->descripcion = $request->descripcion;
        $tareas->save();
        return redirect()->route('cliente.index')
            ->withSuccess('Aviso entragado con exito!');
        }else{
            return back()->withInput($request->all());
        }
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
