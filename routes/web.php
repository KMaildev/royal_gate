<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::resource('contact', 'ContactController');
Route::resource('news', 'NewsController');
Route::resource('cv', 'CvController');
Route::resource('employer', 'EmployerController');
Route::resource('activities', 'ActivitiesController');
Route::resource('team', 'TeamController');
