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
        $url="https://v2.jokeapi.dev/joke/Programming?lang=es&blacklistFlags=nsfw,religious,political,sexist,explicit&type=twopart";
        $json = file_get_contents($url);
        
        return view('main',['number'=>$number])->with('joke',json_decode($json,true));
    }
}
