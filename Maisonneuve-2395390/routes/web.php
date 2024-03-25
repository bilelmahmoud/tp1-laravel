<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DocumentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [EtudiantController::class,'index'])->name('etudiant.index');
Route::get('/etudiants', [EtudiantController::class,'index'])->name('etudiant.index');
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/create/etudiant', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/create/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('/edit/etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/edit/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');
Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/registration', [AuthController::class, 'create'])->name('user.create');
Route::post('/registration', [AuthController::class, 'store'])->name('user.store');

Route::get('/edit/user/{user}', [UserController::class, 'edit'])->name('user.edit');

Route::get('/lang/{locale}', [SetLocaleController::class, 'index'])->name('lang');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

//forum 
Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::middleware('auth')->group(function () {
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
});
Route::post('/articles', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('article.show')->middleware('auth');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');
Route::get('/articles/{article}/PDF', [ArticleController::class, 'showPdf'])->name('showPdf');

Route::get('/documents', [DocumentController::class, 'index'])->name('document.index')->middleware('auth');
Route::get('/create/document', [DocumentController::class, 'create'])->name('document.create')->middleware('auth');
Route::post('/create/document', [DocumentController::class, 'store'])->name('document.store')->middleware('auth');
Route::get('/document/{document}', [DocumentController::class, 'show'])->name('document.show')->middleware('auth');




