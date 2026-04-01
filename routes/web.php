<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;


Route::get('/', function () {
    return view('landingPage');
});
require __DIR__.'/settings.php';
