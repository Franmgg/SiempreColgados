<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Empleados = Empleados::all();
        return view('laraveljs.Empleados', ['Empleados' => $Empleados]);
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
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
        ]);

        $Empleados = Empleados::updateOrCreate(['id' => $request->id], [
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json(['code' => 200, 'message' => 'Empleados Created successfully', 'data' => $Empleados], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Empleados = Empleados::find($id);

        return response()->json($Empleados);
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
        $Empleados = Empleados::find($id)->delete();

        return response()->json(['success' => 'Empleados Deleted successfully']);
    }
}