<?php

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

    // ARRAY PRESENTE NEL FILE PRODUCTS.PHP IN CONFIG
    // CREATO DATA PER PASSARE IN RETURN $DATA
    $data = [
        'products' => config('products')
    ];

    return view('welcome', $data);
})->name('home');
