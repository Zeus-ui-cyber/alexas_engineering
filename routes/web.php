<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/contact-inquiry', function () {
    return view('contact');
});


Route::post('/contact-inquiry', [ContactController::class, 'store'])
    ->name('contact.store');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('/products', function () {
    return view('products');
});

Route::get("send-mail", [ContactController::class, 'index']);