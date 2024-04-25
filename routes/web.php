<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\LoginController;
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



Route::get('/', function () {
    return redirect()->route('index');
});
// ROUTE CRUD ALBUM

Route::get('/index', [AlbumController::class, 'index'])->name('index');

Route::get('/create', [AlbumController::class, 'create'])->name('create')->middleware('auth');


Route::post('/store', [AlbumController::class, 'store'])->name('store')->middleware('auth');

Route::get('/show/{id}', [AlbumController::class, 'show'])->name('show')->middleware('auth');

Route::post('/update/{id}', [AlbumController::class, 'update'])->name('update')->middleware('auth');

Route::get('/destroy/{id}', [AlbumController::class, 'destroy'])->name('destroy')->middleware('auth');

// ROUTE LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('guest');

Route::post('/registerproses', [LoginController::class, 'registerproses'])->name('registerproses');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// ROUTE FOTO

// Route::get('/image',[FotoController::class,'image'])->name('image');

Route::get('/foto/{albumId}', [FotoController::class, 'foto'])->name('foto')->middleware('auth');

Route::get('/tambahfoto', [FotoController::class, 'tambahfoto'])->name('tambahfoto')->middleware('auth');

Route::post('/upload', [FotoController::class, 'upload'])->name('upload')->middleware('auth');

Route::get('/delete/{id}', [FotoController::class, 'delete'])->name('delete')->middleware('auth');

Route::get('/about', function () {
    return view('about');
});
