<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/houses', 'HouseController@index')->name('house.index');
Route::get('/house/create', 'HouseController@create')->name('house.create');
Route::get('/house/edit', 'HouseController@edit')->name('house.edit');
