<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function ($language) {
        return view('welcome', ['language' => $language]);
    })->name('{language}.home');

    Route::get('/company', function ($language) {
        return view('welcome', ['language' => $language]);
    })->name('{language}.company');
});

// Fallback route
Route::fallback(function () {
    return redirect('/en');
});
