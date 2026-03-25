<?php
use App\Http\Controllers\BarcodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;
use Picqer\Barcode\BarcodeGeneratorPNG;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addVisa/get', [App\Http\Controllers\VisaController::class, 'index'])->name('addVisa');
Route::post('/visa/store', [App\Http\Controllers\VisaController::class, 'store'])->name('visa-store');
// Route::get('/Visa/Show', [App\Http\Controllers\VisaController::class, 'show'])->name('show');
Route::get('/e-visa/verifyD/{id}', [App\Http\Controllers\VisaController::class, 'show']);
Route::get('/visConfirmation-delete/{id}', [App\Http\Controllers\VisaController::class, 'delete']);
// Route::get('generate-barcode/{barcodeValue}', [BarcodeController::class, 'generateBarcode']);
// Route::get('generate-barcode/{value}', function ($value) {
//     $generator = new BarcodeGeneratorPNG();
//     $barcode = $generator->getBarcode($value, $generator::TYPE_CODE_128);

//     return response($barcode)
//         ->header('Content-Type', 'image/png');
// });
Route::get('/generate-qr/{value}', [QrController::class, 'generate']);
