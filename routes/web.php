<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function() {
   return 'About us page';
});

Route::get('/categories/{url?}',function($url = null){
    return $url == null ? 'list all categories' : "display $url category";
})->name('categories');

Route::get('/blawler/name', 'ShowBrawlerController');
