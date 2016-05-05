<?php

Route::get('/hello', function () {
    return view('common.welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');