<?php

use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Route;

// trois mamiere de faire la mme chose

Route::get('/','PagesController@home')->name('root_path');

Route::get('/test-mail',function(){

    $msg = new Message;
    $msg->name = 'nazir';
    $msg->email = 'nazir@gmail.com';
    $msg->message = 'nazir bonjour comment tu vas?';
    return new ContactMessageCreated($msg);
});

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

