<?php

use \Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /* Determine Winter or Summer Worship */
    $labor_day = Carbon::parse('first monday of september this year');
    $memorial_day = Carbon::parse('last monday of may this year -1week');
    $is_summer_time = Carbon::now() > $memorial_day && Carbon::now() < $labor_day;
    return view('index')
        ->with('worship_time', $is_summer_time ? "9:30am Worship" : "9am Bible Study, 10:30am Worship");
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('admin', function() {
    return view('admin.index');
});

Route::resource('admin/events', 'EventController');

Route::get('admin', 'AdminController@index')->middleware('auth');