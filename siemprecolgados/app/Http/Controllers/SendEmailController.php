<?php

 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\Correo;
use Illuminate\Support\Facades\Mail;
use PDF;

class SendEmailController extends Controller
{
    public static function sendEmail($email,$request){
        $data["email"] = $email;
        $data["title"] = "SiempreColgados - FMGG";
        $data["fecha_emision"] = $request->fecha_emision;
        $data["concepto"] = $request->concepto;
        $data["importe"] = $request->importe;
        $data["pagada"] = $request->pagada;
        $data["notas"] = $request->notas;

        $pdf = PDF::loadView('pdf', $data);

         Mail::send('pdf',$data,function($message)use($data,$pdf){
            $message->to($data["email"],$data['email'])
                    ->subject($data['title'])
                    ->attachData($pdf->output(),"Cuotas.pdf");
         });
        
          return redirect('cuota');
    }
}
