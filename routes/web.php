<?php

Route::resource('todos', 'TodoController');
Route::put('todo/{todo}/complete', 'TodoController@complete')->name('todo.complete');
Route::delete('todo/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
