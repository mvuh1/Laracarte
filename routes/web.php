<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@home')->name('root_path');

Route::name('about_path')->get('/about','PagesController@about');

/* Route::get('/about',[
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]); */
