<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\ProfileController;
use App\Models\Artist;
use App\Models\Artwork;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
    Route::resource('/artists', ArtistController::class);
});

// Routes accessible to guests (not logged in)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::get('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('register');
});

Route::get('/', function () {
    $artworks = Artwork::with('artist')->get();
    return view('welcome',['artworks' => $artworks]);
});

Route::get(
    '/artworks/showPublic/{id}', 
[ArtworkController::class, 'showPublic']
)->name('artworks.show-public');

Route::get('/artists', function () {
    return view('artists.index',['artists' => Artist::all()]);
})->middleware(['auth', 'verified'])->name('artists');

Route::resource('artworks', ArtworkController::class)->middleware(['auth', 'verified']);
Route::resource('artists', ArtistController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
