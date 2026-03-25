<?php

namespace App\Http\Controllers;

use Picqer\Barcode\BarcodeGeneratorPNG;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    // Function to generate barcode
    public function generateBarcode($barcodeValue)
    {
        dd("hello");
        // Initialize the barcode generator
        $generator = new BarcodeGeneratorPNG();

        // Generate the barcode image
        $barcodeImage = $generator->getBarcode($barcodeValue, $generator::TYPE_CODE_128);

        // Return the barcode image as a response with a PNG header
        return response($barcodeImage)
            ->header('Content-Type', 'image/png');
    }
}