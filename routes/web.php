<?php

Route::get('/', function () {
    return view('search');
});
Route::get('/search', [
    "as"=> 'search',
    "uses"=> 'SearchController@result']);
    Route::get('/phone', [
        "as"=> 'phone',
        "uses"=> 'SearchController@phone']);
