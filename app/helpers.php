<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('page_title')) {
    function page_title($title){
        $base_title = config('app.name') .' - Liste of Artisans';
        if ($title === '') {
            return $base_title;
        }
        return $title . ' | ' . $base_title;
    }
}

if (! function_exists('set_active_route')) {
    function set_active_route($route){
        return Route::is($route) ? 'active' : '';   // Route::is() permet de verifier si on se trouve au niveau d'une route
    }
}
