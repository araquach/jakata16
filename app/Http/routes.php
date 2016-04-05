<?php

Route::get('/', 'PagesController@index');
Route::get('/details', 'PagesController@details');
Route::get('/news', 'PagesController@news');
Route::get('/oldnews', 'PagesController@oldnews');
Route::get('/recruitment', 'PagesController@recruitment');
Route::get('/offers', 'PagesController@offers');
Route::get('/prices', 'PagesController@prices');
Route::get('/team', 'PagesController@team');


Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
  
Route::resource('apprentice', 'ApprenticeController');
Route::resource('stylist', 'StylistController');
  