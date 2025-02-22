<?php

use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard',[DashboardController::class, 'index'] )->name('dashboard');
    Route::post('/updateInstruction',[DashboardController::class, 'updateInstruction'] )->name('updateInstruction');

    Route::get('/chats',[ChatController::class, 'index'] )->name('chats');
    Route::get('/chat/{id}',[ChatController::class, 'chat'] )->name('chat');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_proccess', [LoginController::class, 'login'])->name('login_proccess');
