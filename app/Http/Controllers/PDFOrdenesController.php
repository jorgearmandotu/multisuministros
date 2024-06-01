<?php

namespace App\Http\Controllers;

use App\Models\Ordenes;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class PDFOrdenesController extends Controller
{
    public function downloadPDF($id)
    {
        $record = Ordenes::findOrFail($id);

        $data = [
            'date' => $record->date,
            'number' => $record->number,
        ];


        $pdf = Pdf::loadView('pdf_template', $data);

        return $pdf->download('record_'.$id.'.pdf');
    }
}
