<?php

 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\Correo;
use App\Models\Clientes;
use App\Models\Paises;
use Illuminate\Support\Facades\Mail;
use PDF;

class SendEmailController extends Controller
{
    public static function sendEmail($email,$request){
        $cliente = new Clientes;
        $c=$cliente::find($request->cliente_id);
        $json = file_get_contents('https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/eur.json');
        $data = json_decode($json,true);
        $data["email"] = $email;
        $data["title"] = "SiempreColgados - FMGG";
        $data["fecha_emision"] = $request->fecha_emision;
        $data["concepto"] = $request->concepto;
        $data["importe"] = $data['eur'][strtolower($c->moneda)]*$request->importe;
        $data["importeiva"] = ($data['eur'][strtolower($c->moneda)]*$request->importe)*1.21;
        $data["pagada"] = $request->pagada;
        $data["notas"] = $request->notas;

        $pdf = PDF::loadView('pdf', $data);

        Mail::send('mail',$data,function($message)use($data,$pdf){
            $message->to($data["email"],$data['email'])
                    ->subject($data['title'])
                    ->attachData($pdf->output(),"Cuotas.pdf");
         });
         
          return redirect('cuota');
    }
}
