<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'confirm']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::get('/manege', [ContactController::class, 'manege']);

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

