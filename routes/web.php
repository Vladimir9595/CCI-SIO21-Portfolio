<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProjectController;

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
Route::get('/mes-projets', [MonController::class, 'projects'])->name('projects');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::resources([
        'article' => ArticleController::class,
        'project' => ProjectController::class
    ]);
});




// Route::post('/admin', [AdminController::class, 'admin'])->name('admin');
// Route::post('/admin/new', [AdminController::class, 'new'])->name('new');
// Route::post('/admin/edit/{id}', [AdminController::class, 'edit'])->name('edit');
// Route::post('/admin/delete/{id}', [AdminController::class, 'delete'])->name('delete');

// Route::get('/posts/{id}', [MonController::class, 'show'])->name('id');
// Route::get('/contactez-nous', [MonController::class, 'contact'])->name('contact');
// Route::get('/informations', [MonController::class, 'information'])->name('info');

/* Route::get('/', function () {
    return view('welcome');
}); */
