<?php

use Illuminate\Support\Facades\Route;

// trois mamiere de faire la mme chose

Route::get('/','PagesController@home')->name('root_path');

Route::get('/about',[
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::name('contact_path')->get('/contact','ContactsController@create');

Route::name('contact_path')->post('/contact','ContactsController@store');

/* Route::resource('/contact', 'ContactsController', ['names' => [
    'create' => 'contact_path',
    'store' => 'contact_path',
]]); */

