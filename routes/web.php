<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\colorController;
use App\Http\Controllers\paletteController;
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

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect('/generate', 'generate');
Route::resource('generate', colorController::class);

Route::redirect('/palettes', 'palettes');
Route::resource('palettes', paletteController::class);

require __DIR__.'/auth.php';
