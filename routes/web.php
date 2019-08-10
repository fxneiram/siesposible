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

use App\Models\Preparation;
use App\Models\Product;
use Illuminate\Http\Request;

Route::group(['middleware' => 'install'], function () {

    Route::group(['prefix' => 'install'], function () {

        Route::get('/', 'InstallController@index');
        Route::get('/database', 'InstallController@getDatabase');
        Route::post('/database', 'InstallController@postDatabase');
        Route::get('/user', 'InstallController@getUser');
        Route::post('/user', 'InstallController@postUser');
    });

    //Auth::routes();
    Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout')->name('logout');
    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');


    Route::group(['middleware' => 'auth'], function () {
        #home controller
        Route::get('/', 'HomeController@index')->name('home');

        Route::get('home', 'HomeController@index');

        Route::resource('users', 'UserController');

        Route::resource('roles', 'RoleController');

        Route::resource('permissions', 'PermissionController');

        Route::resource('preparations', 'PreparationController');

        Route::resource('users', 'UserController');

        Route::resource('barrios', 'BarrioController');

        Route::resource('votantes', 'VotanteController');

        Route::resource('tipoVotos', 'TipoVotoController');

        Route::resource('intencionVotos', 'IntencionVotoController');

        Route::resource('sectors', 'SectorController');

        Route::resource('liders', 'LiderController');
    });
});

