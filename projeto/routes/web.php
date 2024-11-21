<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', [AppController::class, 'sobre']);

Route::controller(AppController::class)->group(function () {
    Route::get('/usuarios', 'exibirUsuarios')->middleware('auth');
    Route::post('/add-usuario', 'addUsuario');
    Route::get('/edit-usuario/{id}', 'editUsuario');
    Route::put('/atualizar/{id}', 'atualizar');
    Route::delete('/del-usuario/{id}', 'delUsuario');
    Route::get('/dashboard', 'dashboard')->middleware('auth');
    Route::post('/login', 'loginUsuario')->name('login.post');
    Route::get('/login', 'loginPage')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::post('/register', [AppController::class, 'addUsuario'])->name('register.post');
Route::get('/register', function () {
    return view('welcome');
})->name('register');
