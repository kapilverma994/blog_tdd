<?php

use App\Blog;
use Illuminate\Support\Facades\Route;


Route::get('/blog','BlogController@index');


Route::get('/blog/{id}','BlogController@show');



Route::get('/', function () {
    return view('welcome');
});

