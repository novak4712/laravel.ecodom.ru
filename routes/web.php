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

Route::group(['middleware' => 'web'], function () {
    Route::match(['get', 'post'], '/', ['uses' => 'IndexController@execute', 'as' => 'index']);
    Route::get('/page/{alias}', ['uses' => 'PageController@execute', 'as' => 'page']);

    Route::auth();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    // admin
    Route::get('/', function () {

    });
    //admin/pages
    Route::group(['prefix' => 'pages'], function () {
        //admin/pages
        Route::get('/', ['uses' => 'PagesController@execute', 'as' => 'pages']);
        //admin/pages/add
        Route::match(['get', 'post'], '/add', ['uses' => 'PagesAddController@execute', 'as' => 'pagesAdd']);
        //admin/edit/1
        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses' => 'PagesEditController@execute', 'as' => 'pagesEdit']);
    });

    Route::group(['prefix' => 'profit'], function () {

        Route::get('/', ['uses' => 'ProfitController@execute', 'as' => 'profit']);

        Route::match(['get', 'post'], '/add', ['uses' => 'ProfitAddController@execute', 'as' => 'profitAdd']);

        Route::match(['get', 'post', 'delete'], '/edit/{profit}', ['uses' => 'ProfitEditController@execute', 'as' => 'profitEdit']);
    });

    Route::group(['prefix' => 'advantage'], function () {

        Route::get('/', ['uses' => 'AdvantageController@execute', 'as' => 'advantage']);

        Route::match(['get', 'post'], '/add', ['uses' => 'AdvantageAddController@execute', 'as' => 'advantageAdd']);

        Route::match(['get', 'post', 'delete'], '/edit/{advantage}', ['uses' => 'AdvantageEditController@execute', 'as' => 'advantageEdit']);
    });

    Route::group(['prefix' => 'gk'], function () {

        Route::get('/', ['uses' => 'GkController@execute', 'as' => 'gk']);

        Route::match(['get', 'post'], '/add', ['uses' => 'GkAddController@execute', 'as' => 'gkAdd']);

        Route::match(['get', 'post', 'delete'], '/edit/{gk}', ['uses' => 'GkEditController@execute', 'as' => 'gkEdit']);
    });

    Route::group(['prefix' => 'tp'], function () {

        Route::get('/', ['uses' => 'TpController@execute', 'as' => 'tp']);

        Route::match(['get', 'post'], '/add', ['uses' => 'TpAddController@execute', 'as' => 'tpAdd']);

        Route::match(['get', 'post', 'delete'], '/edit/{tp}', ['uses' => 'TpEditController@execute', 'as' => 'tpEdit']);
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
