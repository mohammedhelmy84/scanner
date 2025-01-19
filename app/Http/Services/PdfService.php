<?php

namespace App\Http\Services;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfService
{
    public function createPdf($data)
    {
        $pdfFile = uniqid() . ".pdf";
        // Load the view and pass the data
        $pdf = Pdf::loadView('pdf.card', ['data' => $data]);
        // Save the PDF to the specified path
        Storage::put("/pdf/$pdfFile", $pdf->output());

        return Storage::url("pdf/$pdfFile");
    }
}
