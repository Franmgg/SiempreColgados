<?php
  
namespace App\Http\Controllers;
  
use PDF;
use Mail;
use Dompdf\Dompdf;
use Dompdf\Options;
  
class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $data["email"] = "smr.frangg@gmail.com";
        $data["title"] = "SiempreColgados - FMGG";
        $data["body"] = "This is Demo";
  
        $pdf = PDF::loadView('main', $data);
  
        Mail::send('main', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "text.pdf");
        });
  
        return redirect('cuota');
    }
    public static function  verPDF($email,$cuota){
    
    
        $data["email"] = $email;
        $data["title"] = "SiempreColgados - FMGG";
        $data["fecha_emision"] = $cuota->fecha_emision;
        $data["concepto"] = $cuota->concepto;
        $data["importe"] = $cuota->importe;
        $data["pagada"] = $cuota->pagada;
        $data["notas"] = $cuota->notas;

        return PDF::loadView('pdf', $data)->stream('pdf.pdf');
        

    }
}