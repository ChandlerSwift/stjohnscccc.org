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
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('admin', 'AdminController@index')->middleware('auth');

Route::resource('admin/events', 'EventsController');
Route::get('admin/events/{id}/restore', 'EventsController@restore');

Route::resource('admin/groups', 'GroupsController');
