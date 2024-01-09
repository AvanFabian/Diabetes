<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiabetesPredictionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diabetes', function () {
    return view('FormDiabetes.index');
});

# Dipake kalo mau nampilin hasil prediksi di halaman web dengan memanggil fungsi predict di DiabetesPredictionController
// Route::post('/predict', [DiabetesPredictionController::class, 'predict']);

Route::group(['middleware' => 'web'], function () {
    // Route-route web lainnya dengan proteksi CSRF
    Route::group(['middleware' => 'web', 'except' => 'csrf'], function () {
        // Route untuk komunikasi dengan Flask
        Route::post('/predict', [DiabetesPredictionController::class, 'predict']);
    });
});


