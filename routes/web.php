<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portfolio;
use App\Http\Controllers\About;
use App\Http\Controllers\Hobbies;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/port', function () {
    return view('portfolio');
});

Route::get('/hob', function () {
    return view('hobbies');
});

Route::get('/bout', function () {
    return view('about');
}); 
