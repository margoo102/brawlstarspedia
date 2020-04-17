<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SinglePageController@index')->where('any', '.*');

Route::get('/categories/{url?}',function($url = null){
    return $url == null ? 'list all categories' : "display $url category";
})->name('categories');

Route::get('/blawler/name', 'ShowBrawlerController');
