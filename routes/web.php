<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/houses', 'HouseController@index')->name('house.index');
Route::get('/house/create', 'HouseController@create')->name('house.create');
Route::get('/house/{houseId}', 'HouseController@view')->name('house.view');
Route::get('/house/{houseId}/edit', 'HouseController@edit')->name('house.edit');

Route::post('/house/{houseId}/invite', 'InviteController@invite')->name('house.invite');

Route::post('/house/store', 'HouseController@store')->name('house.store');
Route::put('/house/update', 'HouseController@create')->name('house.update');

Route::get('/house/{houseId}/rooms/edit', 'RoomController@edit')->name('house.rooms.edit');
Route::put('/house/{houseId}/rooms/update', 'RoomController@update')->name('house.rooms.update');
