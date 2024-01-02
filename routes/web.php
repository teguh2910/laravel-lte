<?php
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/apr', 'HomeController@apr');
Route::get('/upload_apr', 'HomeController@upload_apr');
Route::post('/upload_apr', 'HomeController@post_upload_apr');