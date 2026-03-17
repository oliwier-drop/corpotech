<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/o-nas', function () {
    return view('about');
})->name('about');
Route::get('/kontakt', function () {
    return view('contact');
})->name('contact');
Route::get('/realizacje', function () {
    return view('realizations');
})->name('realizations');
Route::get('/realizacje/{slug}', function ($slug) {
    return view('realization-post', ['slug' => $slug]);
})->name('realization-post');
Route::get('/uslugi', function () {
    return view('services');
})->name('services');
Route::get('uslugi/cyberbezpieczenstwo', function () {
    return view('services.cybersecurity');
})->name('security');
Route::get('uslugi/administracja-systemow', function () {
    return view('services.administration');
})->name('systems');
Route::get('uslugi/smart-home', function () {
    return view('services.smarthome');
})->name('smarthome');
Route::get('uslugi/instalacje-techniczne', function () {
    return view('services.installations');
})->name('installations');
Route::get('uslugi/strony-internetowe', function () {
    return view('services.websites');
})->name('websites');
Route::get('/kariera', function () {
    return view('career');
})->name('career');

