<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/formKonsultasi', function () {
    return view('formKonsultasi');
});

Route::get('/historiKonsultasi', function () {
    return view('historiKonsultasi');
});

