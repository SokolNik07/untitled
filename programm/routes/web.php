<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/characters','App\Http\Controllers\CharacterController@index')->name('character.index');
Route::get('/character/create','App\Http\Controllers\CharacterController@create')->name('character.create');
Route::post('/characters','App\Http\Controllers\CharacterController@store')->name('character.store');
Route::get('/characters/{character}','App\Http\Controllers\CharacterController@show')->name('character.show');
Route::get('/characters/{character}/edit','App\Http\Controllers\CharacterController@edit')->name('character.edit');
Route::patch('/character/{character}','App\Http\Controllers\CharacterController@update')->name('character.update');
Route::delete('/character/{character}','App\Http\Controllers\CharacterController@destroy')->name('character.destroy');

Route::get('/fractions','App\Http\Controllers\FractionController@index')->name('fraction.index');
Route::get('/fraction/create','App\Http\Controllers\FractionController@create')->name('fraction.create');
Route::post('/Fractions','App\Http\Controllers\FractionController@store')->name('fraction.store');
Route::get('/fractions/{fraction}','App\Http\Controllers\FractionController@show')->name('fraction.show');
Route::get('/fractions/{fraction}/edit','App\Http\Controllers\FractionController@edit')->name('fraction.edit');
Route::patch('/fraction/{fraction}/edit','App\Http\Controllers\FractionController@update')->name('fraction.update');
Route::delete('/fraction/{fraction}','App\Http\Controllers\FractionController@destroy')->name('fraction.destroy');



Route::get('/socials','App\Http\Controllers\SocialsController@index')->name('socials.index');

