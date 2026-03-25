<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function generate($value)
    {
        return response(
            QrCode::format('svg')
                ->size(300)
                ->margin(1)
                ->errorCorrection('H')
                ->generate($value),
            200,
            ['Content-Type' => 'image/svg+xml']
        );
    }
}