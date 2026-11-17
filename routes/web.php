<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Route::get('/projects', function (){
//     return view('projects');
// });

Route::view('/about','about')->name('about');

Route::view('/projects','projects')->name('projects');
