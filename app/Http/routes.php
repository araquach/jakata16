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
Route::get('/caleb', 'PagesController@caleb');
Route::get('/kebelo', 'PagesController@kebelo');

Route::get('/admin', 'AdminController@index');

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('sendEmail', 
  ['as' => 'sendEmail', 'uses' => 'ContactController@sendEmail']);
  
Route::resource('apprentice', 'ApprenticeController');
Route::resource('stylist', 'StylistController');

Route::get('/freeproducts', 'ProspectController@freeproducts');
Route::get('/freeproducts/create', 'ProspectController@create');
Route::post('prospect/store', 'ProspectController@store');


Route::get('feedback/{client}',
  ['as' => 'feedbackCreate', 'uses' => 'FeedbackController@create']);
Route::post('feedback/store',
  ['uses' => 'FeedbackController@store']);
  
Route::get('stylist/{stylist}/note',
  ['as' => 'stylistNoteCreate', 'uses' => 'StylistController@createNote']);
Route::post('stylist/note',
  ['uses' => 'StylistController@storeNote']);
  
Route::get('apprentice/{apprentice}/note',
  ['as' => 'apprenticeNoteCreate', 'uses' => 'ApprenticeController@createNote']);
Route::post('apprentice/note',
  ['uses' => 'ApprenticeController@storeNote']);

Route::get('offer/{client}',
  ['uses' => 'OfferController@show']);
Route::patch('offer/{client}',
  ['as' => 'offerUpdate', 'uses' => 'OfferController@update']);

Route::auth();