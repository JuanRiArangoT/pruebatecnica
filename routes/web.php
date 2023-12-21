<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PdfController2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Ruta para el pdf con los datos traidos desde la bd
Route::post('/generate-pf', [PdfController::class, 'generatePdf']);
//Ruta para el pdf con los datos predeterminados sin ninguna informacion de usuario
Route::get('/generate-pdf', [PdfController2::class, 'generatePdf']);
