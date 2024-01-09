<?php

use Illuminate\Support\Facades\Route;

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

// landingPage
Route::get('/dashboard', function () {
    return view('landingPage.landing');
});

Route::get('/', function () {
    return view('landingPage.landing');
});



Route::get('/fitur-diabetes', function () {
    return view('fitur.cekDiabetes');
});



include 'fromController.php';


