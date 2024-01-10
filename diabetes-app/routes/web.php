<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiabetesPredictionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
})->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

Route::post('/fitur-diabetes', [DiabetesPredictionController::class, 'predict'])->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

# register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
# login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

include 'fromController.php';


