<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/kategori', 'App\Http\Controllers\PagesController@kategori');
Route::get('/faq', 'App\Http\Controllers\PagesController@faq');

Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

Route::get('/students', 'App\Http\Controllers\StudentsController@index');
Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');
Route::get('/students/{student}', 'App\Http\Controllers\StudentsController@show');
Route::post('/students', 'App\Http\Controllers\StudentsController@store');