<?php

Route::group(['prefix' => 'api'], function () {

	Route::get('config', 'ConfigController@config');
	Route::get('time', 'ConfigController@time');

	Route::get('search', 'StationController@search');
	Route::get('symbols', 'StationController@symbol');

	Route::get('station', 'StationController@index');
});


Route::get('tradingview', 'SiteController@tradingview');
Route::get('dashboard1', 'SiteController@dashboard1');
Route::get('dashboard2', 'SiteController@dashboard2');
Route::get('/', function () {
    return view('welcome');
});
