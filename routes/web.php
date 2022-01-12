<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers;

Route::get('/','PersonController@index');
Route::get('/add-person','PersonController@create');
Route::post('/add-person','PersonController@store');
Route::delete('/delete-person/{person}','PersonController@delete');

Route::get('/statuses','StatusController@index');



Route::get('', function () {
    return view('');
});

Auth::routes();
