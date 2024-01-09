<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiabetesPredictionController;

# Dipake kalo mau nampilin hasil prediksi di halaman web dengan memanggil fungsi predict di DiabetesPredictionController
// Route::post('/predict', [DiabetesPredictionController::class, 'predict']);
Route::post('/predict', [DiabetesPredictionController::class, 'predict']);