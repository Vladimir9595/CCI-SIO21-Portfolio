<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonController;
use App\Http\Controllers\AdminController;

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
Route::get('/veille-technologique', [MonController::class, 'articles'])->name('articles');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/admin', [AdminController::class, 'admin'])->name('admin');
Route::post('/admin/new/', [AdminController::class, 'new'])->name('new');
Route::post('/admin/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('/admin/delete/{id}', [AdminController::class, 'delete'])->name('delete');

// Route::get('/posts/{id}', [MonController::class, 'show'])->name('id');
// Route::get('/contactez-nous', [MonController::class, 'contact'])->name('contact');
// Route::get('/informations', [MonController::class, 'information'])->name('info');

/* Route::get('/', function () {
    return view('welcome');
}); */
