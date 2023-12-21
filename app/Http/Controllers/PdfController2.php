<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;

//Para generar el pdf sin datos del usuario
class PdfController2 extends Controller
{
    public function generatePdf()
    {
        //Se genera un id unico para cada pdf
        $uniqueCode = uniqid();
        //El QR también llevara el código unico que se genero
        $qrCode = QrCode::size(100)->generate($uniqueCode); // Ajusta el tamaño según tus preferencias
        //Se generan los datos que va a tener predeterminados el pdf
        $data = [
            'title' => 'CERTIFICACION',
            'content' => 'Contenido del PDF',
            'uniqueCode' => $uniqueCode,
            'qrCode' => $qrCode,
        ];
        //Se carga la vista del pdf
        $pdf = PDF::loadView('pdf_template', $data);
        //Se da un nombre al pdf
        return $pdf->stream('certificado.pdf');
    }

}
