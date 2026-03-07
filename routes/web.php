<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::fallback(fn(): RedirectResponse => to_route('login'));
