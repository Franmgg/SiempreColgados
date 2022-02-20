<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\formClient;
class main extends Controller
{
    public function index()
    {
        $avisos=formClient::where('user_id',null)->get();
        $number=$avisos->count();
        return view('main',['number'=>$number]);
    }
}
