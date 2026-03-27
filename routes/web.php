<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\db_controller;
use App\Models\Appt;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [db_controller::class, 'index'])
->name('index');
