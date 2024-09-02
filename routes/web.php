<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/documentation', [HomeController::class, 'index'])->name('index');
Route::get('/documentation/backoffice', [HomeController::class, 'backOffice'])->name('backoffice');
Route::get('/documentation/ppob', [HomeController::class, 'ppob'])->name('ppob');
Route::get('/documentation/whatsapp', [HomeController::class, 'whatsapp'])->name('whatsapp');

