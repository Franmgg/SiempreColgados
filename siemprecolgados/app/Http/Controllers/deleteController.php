<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes;


class deleteController extends Controller
{
    

/**
 * Vamos a eliminar algo
 *
 * @param [type] $id
 * @return void
 */
    public function __invoke()
    
        

    {
        //Tengo que pasarle el id de cliente y eso
        return view('clientes.delete');
    }


}
