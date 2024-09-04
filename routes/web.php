<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-logs', function () {
    Log::info('This is a test log entry.');
    return 'Log entry created.';
});
