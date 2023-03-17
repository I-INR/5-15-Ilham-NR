<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/',[BookController::class,'mainpage']);
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.detail');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/home', [HomeController::class, 'index'])->name('home');

    Route::get('/admin/book/index', [BookController::class, 'index'])->name('book.index');
    Route::post('/admin/book/add', [BookController::class, 'store'])->name('book.store');
    Route::get('/exportpdf', [BookController::class, 'exportpdf'])->name('book.exportpdf');
    Route::get('/admin/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/admin/book/{id}/update', [BookController::class, 'update'])->name('book.update');
    Route::get('/admin/book/{id}/destroy', [BookController::class, 'destroy'])->name('book.destroy');

    Route::get('/admin/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/admin/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/admin/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/admin/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');

});
