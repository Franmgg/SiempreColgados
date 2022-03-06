<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'empleados' => User::orderBy('id', 'desc')->paginate(4)
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
        
        $request->validate([
            'name' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'privilege' => 'required'   
        ]);

        $data['name']=$request->name;
        $data['telefono']=$request->telefono;
        $data['email']=$request->email;
        $data['password']=$request->password;
        $data['privilege']=$request->password;

            User::create([
            'name' => $data['name'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'privilege'=> 1,
        ]);
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
    public function edit(User $empleado)
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
        $request->validate([
            'name' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'privilege' => 'required'   
        ]);

        $empleados = User::find($id);
        $empleados->name = $request->name;
        $empleados->password;
        $empleados->telefono = $request->telefono;
        $empleados->email = $request->email;
        $empleados->privilege = $request->privilege;
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
        User::destroy($id);
        return redirect()->route('empleados.index')
        ->with('success', 'Se eliminó correctamente');
    }
}
