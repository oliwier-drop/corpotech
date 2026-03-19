<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactControler;
use App\Http\Controllers\ServicesController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;

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
        ->with(['categories', 'author'])
        ->whereNotNull('slug')
        ->latest()
        ->limit(9)
        ->get();

    return view('projects', compact('posts'));
})->name('projects');

Route::get('/realizacje/{slug}', function (string $slug) {
    $post = Post::query()
        ->with(['author', 'categories'])
        ->where('slug', $slug)
        ->firstOrFail();

    $recentPosts = Post::query()
        ->with(['author', 'categories'])
        ->where('id', '!=', $post->id)
        ->whereNotNull('slug')
        ->latest()
        ->limit(4)
        ->get();

    return view('project-post', compact('post', 'recentPosts'));
})->name('post.show');

Route::get('/uslugi', function () {
    return view('services');
})->name('services');
Route::get('uslugi/cyberbezpieczenstwo', [ServicesController::class, 'cybersecurity'])->name('cybersecurity');
Route::get('uslugi/administracja-systemow', [ServicesController::class, 'systems'])->name('systems');
Route::get('uslugi/smart-home', [ServicesController::class, 'smarthome'])->name('smarthome');
Route::get('uslugi/instalacje-techniczne', [ServicesController::class, 'installations'])->name('installations');
Route::get('uslugi/strony-internetowe', [ServicesController::class, 'websites'])->name('websites');

Route::get('/polityka-prywatnosci', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/regulamin', function () {
    return view('terms-of-service');
})->name('terms-of-service');


Route::post('/kontakt/submit', [ContactControler::class, 'submit'])->name('contact.submit');

Route::get('/email/verify/{id}/{hash}', function (Request $request, string $id, string $hash) {
    if (! $request->hasValidSignature()) {
        abort(403);
    }

    $user = User::query()->findOrFail($id);

    if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        abort(403);
    }

    if (! $user->hasVerifiedEmail()) {
        $user->markEmailAsVerified();
        event(new Verified($user));
    }

    return redirect()->route('filament.admin.auth.login')
        ->with('status', 'Adres e-mail został potwierdzony. Możesz się zalogować.');
})->name('verification.verify');

