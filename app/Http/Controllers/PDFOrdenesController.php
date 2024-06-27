<?php

namespace App\Http\Controllers;

use App\Models\Ordenes;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Illuminate\Support\Carbon;

class PDFOrdenesController extends Controller
{
    public function downloadPDF($id)
    {
        $record = Ordenes::findOrFail($id);
        $date = $record->date;
        $year = Carbon::parse($date)->year; 
        $data = [
            'date' => $record->date,
            'number' => $record->number,
            'client_signature' => $record->client_signature,
            'year' => $year,
            'cliente' => $record->client,
            'tipo_servicio' => $record->type_service,
            'tecnico' => $record->tecnico,
            'horaEntrada' => $record->hour_in,
            'horaSalida' => $record->hour_out,
            'descripcion' => $record->service_description,
            'trabajoRealizado' => $record->work_done,
            'components' => $record->used_components,
            'observaciones' => $record->observations,
        ];


        $pdf = Pdf::loadView('pdfOrdenes_template', $data);

        return $pdf->download('record_'.$id.'.pdf');
    }
}
