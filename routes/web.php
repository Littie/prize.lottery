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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'as' => 'prize.',
    'prefix' => 'prize',
    'middleware' => 'auth',
], function () {
    Route::get('', [
        'as' => 'index',
        'uses' => 'PrizeController@index',
    ]);
    Route::post('generate', [
        'as' => 'generate',
        'uses' => 'PrizeController@generate',
    ]);
    Route::group([
        'as' => 'money.',
        'prefix' => 'money',
    ], function () {
        Route::post('handle', [
            'as' => 'handle',
            'uses' => 'PrizeMoneyController@handle',
        ]);
    });
    Route::group([
        'as' => 'points.',
        'prefix' => 'points',
    ], function () {
        Route::post('handle', [
            'as' => 'handle',
            'uses' => 'PrizePointsController@handle',
        ]);
    });
    Route::group([
        'as' => 'presents.',
        'prefix' => 'presents',
    ], function () {
        Route::post('handle', [
            'as' => 'handle',
            'uses' => 'PrizePresentsController@handle',
        ]);
    });
});
