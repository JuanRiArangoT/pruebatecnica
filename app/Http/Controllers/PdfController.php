<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\employee;

class PdfController extends Controller
{
    public function generatePdf(Request $request)
{
    $dni = $request->input('dni'); // Aquí debes va el dni que viene desde la url por medio del input
    $employee = Employee::where('dni', $dni)->first(); //Se obtiene los datos del usuario desde la bd con el dni que se especifico

    // Verifica si se encontró el empleado
    if ($employee) {
        //Se genera un id unico para cada pdf
        $uniqueCode = uniqid();
        //El QR también llevara el código unico que se genero
        $qrCode = QrCode::size(100)->generate($uniqueCode);// Ajusta el tamaño según tus preferencias
        //Se generan los datos que va a tener predeterminados el pdf
        // Utiliza los métodos definidos en el modelo Employee
        $fullName = $employee->getFullName();
        $dni = $employee->getDni();
        $dniType = $employee->getDni_type();

        $data = [
            'title' => 'CERTIFICACION',
            'fullName' => $fullName,
            'dni' => $dni,
            'dniType' => $dniType,
            'uniqueCode' => $uniqueCode,
            'qrCode' => $qrCode,
        ];
        //Se carga la vista del pdf
        $pdf = PDF::loadView('pdf_template', $data);
        //Se da un nombre al pdf
        return $pdf->stream('certificado.pdf');
    } else {
        // Manejar el caso en el que no se encuentra el empleado
        return response()->json(['message' => 'Empleado no encontrado'], 404);
    }
}
}
?>
