<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tareas;

class main extends Controller
{
    public function index()
    {
        $avisos=Tareas::where('user_id',null)->get();
        $number=$avisos->count();
        return view('main',['number'=>$number]);
    }
}
