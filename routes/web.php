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

Route::group(['middleware' => ['auth']], function() {
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/home', 'FrontendController@index')->name('index');
Route::resource('inventory', 'SchoolInventoryController');
Route::resource('monitoring', 'SchoolMonitoringController');  
Route::resource('survey', 'SchoolSurveyController');
Route::resource('training', 'TrainingAssesmentController');
});



Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'mestaff'], function () {
  Route::get('/login', 'MestaffAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'MestaffAuth\LoginController@login');
  Route::post('/logout', 'MestaffAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'MestaffAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'MestaffAuth\RegisterController@register');

  Route::post('/password/email', 'MestaffAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MestaffAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MestaffAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MestaffAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'costaff'], function () {
  Route::get('/login', 'CostaffAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CostaffAuth\LoginController@login');
  Route::post('/logout', 'CostaffAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CostaffAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CostaffAuth\RegisterController@register');

  Route::post('/password/email', 'CostaffAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CostaffAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CostaffAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CostaffAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'hostaff'], function () {
  Route::get('/login', 'HostaffAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'HostaffAuth\LoginController@login');
  Route::post('/logout', 'HostaffAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'HostaffAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'HostaffAuth\RegisterController@register');

  Route::post('/password/email', 'HostaffAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'HostaffAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'HostaffAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'HostaffAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'donor'], function () {
  Route::get('/login', 'DonorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'DonorAuth\LoginController@login');
  Route::post('/logout', 'DonorAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'DonorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'DonorAuth\RegisterController@register');

  Route::post('/password/email', 'DonorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'DonorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'DonorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'DonorAuth\ResetPasswordController@showResetForm');
});

Auth::routes();


