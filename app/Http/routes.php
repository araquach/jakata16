<?php

Route::get('/', 'PagesController@index');
Route::get('/details', 'PagesController@details');
Route::get('/news', 'PagesController@news');
Route::get('/oldnews', 'PagesController@oldnews');
Route::get('/recruitment', 'PagesController@recruitment');
Route::get('/offers', 'PagesController@offers');
Route::get('/prices', 'PagesController@prices');
Route::get('/team', 'PagesController@team');
Route::get('/jimmy', 'PagesController@jimmy');
Route::get('/maisie', 'PagesController@maisie');
Route::get('/natalie', 'PagesController@natalie');
Route::get('/vikki', 'PagesController@vikki');
Route::get('/matt', 'PagesController@matt');
Route::get('/lauraC', 'PagesController@lauraC');
Route::get('/lauraM', 'PagesController@lauraM');

Route::get('/kebelo', 'PagesController@kebelo');


Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('sendEmail', 
  ['as' => 'sendEmail', 'uses' => 'ContactController@sendEmail']);
  
Route::resource('apprentice', 'ApprenticeController');
Route::resource('stylist', 'StylistController');

Route::get('feedback/{client}',
  ['as' => 'feedbackCreate', 'uses' => 'FeedbackController@create']);
Route::post('feedback/store',
  ['uses' => 'FeedbackController@store']);

Route::auth();