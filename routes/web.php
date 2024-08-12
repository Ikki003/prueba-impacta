<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::group([
    'prefix' => 'admin'
], function () {
    Route::post('login', [LoginController::class, 'login']);
});
