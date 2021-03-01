<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Web\Frontend\HomeController@index')->name('home');
Route::get('/about', 'Web\Frontend\HomeController@about')->name('about');
Route::get('/admission-procedure', 'Web\Frontend\HomeController@admissionProcedure')->name('admission-procedure');
Route::get('/admission-result', 'Web\Frontend\HomeController@admissionResult')->name('admission-result');
Route::get('/career', 'Web\Frontend\HomeController@career')->name('career');
Route::get('/marketplace', 'Web\Frontend\HomeController@marketplace')->name('marketplace');
Route::get('/feedback', 'Web\Frontend\HomeController@feedback')->name('feedback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin\AdminController@index');
