<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LobbyController;
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

Route::get('/', [LobbyController::class, 'index'])->name('index');;
Route::get('/about', [LobbyController::class, 'about'])->name('about');;

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/{id}', [BlogController::class, 'show'])->name('blog.show');
});


Route::get('/store', [LobbyController::class, 'store'])->name('store');


Route::get('/contact-us', [LobbyController::class, 'contactUs'])->name('contactUs');;
Route::post('/contact-us', [ContactUsController::class, 'submitForm'])->name('contactUs.request');;
