<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
