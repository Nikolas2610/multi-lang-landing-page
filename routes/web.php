<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function ($language) {
        return view('index', ['language' => $language]);
    })->name('{language}.home');
});