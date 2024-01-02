<?php

namespace App\Http\Controllers;

use App\Models\Spot;

use  PDF;


class PDFController extends Controller
{
    public function generatePDF(Spot $spot)
    {

        $data = [
            'name' => $spot->name,
            'cost' => $spot->cost,
            'city' => $spot->city,
            'description' => $spot->description,
            'path' => public_path('storage/images/' . $spot->path)
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download($spot->name . 'FT.pdf');
    }
}
