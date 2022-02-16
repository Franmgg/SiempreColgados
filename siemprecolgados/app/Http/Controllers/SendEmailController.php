<?php

 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\Correo;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public static function sendEmail($email,$request){
         Mail::to($email)->send(new Correo($request));
    }
}
