<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    $path = public_path('frontend/dist/index.html');

    if (!file_exists($path)) {
        return "L-ficher index.html makaynich f had l-path: " . $path;
    }

    return response()->file($path);
})->where('any', '.*');