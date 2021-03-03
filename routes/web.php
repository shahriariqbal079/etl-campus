<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Web\Frontend\HomeController@index')->name('home');
Route::get('/about', 'Web\Frontend\HomeController@about')->name('about');
Route::get('/admission-procedure', 'Web\Frontend\HomeController@admissionProcedure')->name('admission-procedure');
Route::get('/admission-result', 'Web\Frontend\HomeController@admissionResult')->name('admission-result');
Route::get('/career', 'Web\Frontend\HomeController@career')->name('career');
Route::get('/marketplace', 'Web\Frontend\HomeController@marketplace')->name('marketplace');
Route::get('/feedback', 'Web\Frontend\HomeController@feedback')->name('feedback');
Route::get('/blog', 'Web\Frontend\HomeController@blog')->name('blog');
Route::get('/faq', 'Web\Frontend\HomeController@faq')->name('faq');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* -------------------------------------------------------------------------- */
/*                               Admin Dashboard                              */
/* -------------------------------------------------------------------------- */

Route::prefix('admin')->as('admin.')->group(function () {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('logout');
    Route::get('/', 'Admin\AdminController@index')->name('dashboard');


    Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/courses', 'Admin\AdminController@courses')->name('courses');



    });
});

// Route::get('/admin', 'Admin\AdminController@index');
