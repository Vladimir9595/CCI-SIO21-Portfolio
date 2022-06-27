<?php

use App\Http\Controllers\MonController;
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

Route::get('/', [MonController::class, 'index'])->name('accueil');
Route::get('/mentions-légales', [MonController::class, 'mention'])->name('mentions');
// Route::get('/posts/{id}', [MonController::class, 'show'])->name('id');
// Route::get('/contactez-nous', [MonController::class, 'contact'])->name('contact');
// Route::get('/informations', [MonController::class, 'information'])->name('info');

/* Route::get('/', function () {
    return view('welcome');
}); */
