<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactControler;
use App\Models\Post;

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
    $posts = Post::query()
        ->latest()
        ->limit(9)
        ->get();

    return view('projects', compact('posts'));
})->name('projects');

Route::get('/realizacje/{slug}', function (string $slug) {
    $post = Post::query()->where('slug', $slug)->firstOrFail();

    return view('project-post', compact('post'));
})->name('post.show');

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


Route::post('/kontakt/submit', [ContactControler::class, 'submit'])->name('contact.submit');

