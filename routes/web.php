<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PreEnrolmentController;
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

Route::post('/action/pre-enrollment-online-event', [PreEnrolmentController::class, 'apply']);
Route::post('/action/contact-us', [ContactController::class, 'contact']);

Route::get('/{any}', [FrontController::class, 'index'])->where('any', '.*');
