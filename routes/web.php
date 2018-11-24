<?php

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

// Site Display Routes...
Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/contact', 'SiteController@contact');
Route::post('/contact/send', 'SiteController@sendMessage');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Password Change Routes...
Route::get('password/change', 'Auth\ChangePasswordController@showChangeForm')->middleware('auth')->name('password.change');
Route::post('password/change', 'Auth\ChangePasswordController@change')->middleware('auth');

// Admin Routes
Route::get('admin', 'AdminController@index')->middleware('auth');
Route::resource('admin/events', 'EventsController');
Route::get('admin/events/{id}/restore', 'EventsController@restore');
Route::get('admin/events/{id}/copy', 'EventsController@copy');
Route::resource('admin/groups', 'GroupsController');

Route::get('/conference', function() {
	return view('conference');
});
