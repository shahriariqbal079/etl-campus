<?php
use Illuminate\Support\Facades\Route;

/* -------------------------------------------------------------------------- */
/*                                  Utilities                                 */
/* -------------------------------------------------------------------------- */

Route::get('/clear-cache', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    return redirect()->to('/');
});

Route::get('/php-info', function () {
    return phpinfo();
});

/* -------------------------------------------------------------------------- */
/*                                  Frontend                                  */
/* -------------------------------------------------------------------------- */

Route::get('/', 'Web\Frontend\HomeController@index')->name('home');
Route::get('/about', 'Web\Frontend\HomeController@about')->name('about');
Route::get('/admission-procedure', 'Web\Frontend\HomeController@admissionProcedure')->name('admission-procedure');
Route::get('/admission-result', 'Web\Frontend\HomeController@admissionResult')->name('admission-result');
Route::get('/career', 'Web\Frontend\HomeController@career')->name('career');
Route::get('/marketplace', 'Web\Frontend\HomeController@marketplace')->name('marketplace');
Route::get('/feedback', 'Web\Frontend\HomeController@feedback')->name('feedback');
Route::get('/blog', 'Web\Frontend\HomeController@blog')->name('blog');
Route::get('/faq', 'Web\Frontend\HomeController@faq')->name('faq');

/* -------------------------------------------------------------------------- */
/*                                   Backend                                  */
/* -------------------------------------------------------------------------- */

Auth::routes();

/* -------------------------------------------------------------------------- */
/*                           Student/User Dashboard                           */
/* -------------------------------------------------------------------------- */

Route::get('/home', 'Web\Backend\User\UserController@index')->name('home');
Route::prefix('user')->as('user.')->group(function () {
    Route::group(['middleware' => 'auth:web'], function () {

    });
});

/* -------------------------------------------------------------------------- */
/*                               Admin Dashboard                              */
/* -------------------------------------------------------------------------- */

Route::prefix('admin')->as('admin.')->group(function () {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('logout');
    Route::get('/', 'Web\Backend\Admin\AdminController@index')->name('dashboard');

    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/courses', 'Web\Backend\Admin\AdminController@courses')->name('courses');
        Route::post('/course/store', 'Web\Backend\Admin\AdminController@courseStore')->name('course.store');

    });
});
