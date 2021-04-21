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







Auth::routes();




Route::get('/', function () {


    return redirect('login');
});



Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/dashboard', 'HomeController@index')->name('home');

    Route::prefix('/profile')->group(function () {

        Route::get('/view', 'Admin\ProfileController@view')->name('profile.view');
        Route::get('/edit/{slug}', 'Admin\ProfileController@edit')->name('profile.edit');
        Route::post('/update/{id}', 'Admin\ProfileController@update')->name('profile.update');
        Route::get('/password/change', 'Admin\ProfileController@changePasswordForm')->name('password.change');
        Route::post('/password/change', 'Admin\ProfileController@PasswordStore')->name('password.store');
    });

    Route::prefix('/user')->group(function () {

        Route::get('/list', 'Admin\UserController@all_user')->name('user.view');
        Route::get('/create', 'Admin\UserController@create')->name('user.create');
        Route::post('/store', 'Admin\UserController@store')->name('user.store');
        Route::get('/delete/{id}', 'Admin\UserController@delete')->name('user.destroy');
    });








    Route::prefix('/setting')->group(function () {

        Route::get('/create', 'Admin\SettingController@create')->name('setting.create');
        Route::post('/store', 'Admin\SettingController@store')->name('setting.store');
    });
});
