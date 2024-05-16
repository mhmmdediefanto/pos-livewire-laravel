<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
