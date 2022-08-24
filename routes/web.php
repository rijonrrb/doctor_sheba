<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Index');
});

Route::get('/admin', function () {
    return view('Admin.create_institute');
});