<?php

Route::get('adsb', function () {
    return view('adsb');
});

Route::get('adsb/active', 'AdsbController@active');
Route::get('adsb/path/{id}', 'AdsbController@path');

//Route::get('test', 'TestController@insert');
Route::get('test/get', 'TestController@get');
