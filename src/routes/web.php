<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::prefix('/')->group(function(){
    Route::get('', [ContactController::class, 'confirm']);
    Route::post('', [ContactController::class, 'confirm'])->name('form');
    Route::get('contact', [ContactController::class, 'contact']);
    Route::post('contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('thanks', [ContactController::class, 'thanks']);
    Route::post('thanks', [ContactController::class, 'thanks'])->name('thanks');
    Route::get('manege', [ContactController::class, 'manege'])->name('manege');
    Route::delete('manege', [ContactController::class, 'destory']);

});

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

