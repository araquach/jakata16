<?php

Route::get('/', 'PagesController@index');
Route::get('/details', 'PagesController@details');
Route::get('/news', 'PagesController@news');
Route::get('/oldnews', 'PagesController@oldnews');
Route::get('/recruitment', 'PagesController@recruitment');
Route::get('/offers', 'PagesController@offers');
Route::get('/prices', 'PagesController@prices');
Route::get('/team', 'PagesController@team');
Route::get('/trainee', 'PagesController@trainee');
Route::get('/jimmy', 'PagesController@jimmy');
Route::get('/maisie', 'PagesController@maisie');
Route::get('/natalie', 'PagesController@natalie');
Route::get('/vikki', 'PagesController@vikki');
Route::get('/matt', 'PagesController@matt');
Route::get('/lauraC', 'PagesController@lauraC');
Route::get('/lauraM', 'PagesController@lauraM');
Route::get('/caleb', 'PagesController@caleb');
Route::get('/kebelo', 'PagesController@kebelo');

Route::get('/prospect/emailmale', 'ProspectController@emailMale');
Route::get('/prospect/emailmale2', 'ProspectController@emailMale2');
Route::get('/prospect/emailfemale', 'ProspectController@emailFemale');
Route::get('/prospect/emailfemale2', 'ProspectController@emailFemale2');
Route::get('/prospect/emailfemale3', 'ProspectController@emailFemale3');
Route::get('/prospect/test', 'ProspectController@test');


Route::get('/admin', 'AdminController@index');

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('sendEmail', 
  ['as' => 'sendEmail', 'uses' => 'ContactController@sendEmail']);
  
Route::resource('apprentice', 'ApprenticeController');
Route::resource('stylist', 'StylistController');

Route::get('/freeproducts', 'ProspectController@freeproducts');
Route::get('/freeproducts/man', 'ProspectController@freeproducts');
Route::get('/freeproducts/create', 'ProspectController@create');
Route::get('/freeproducts/man/create', 'ProspectController@create');
Route::post('prospect/store', 'ProspectController@store');

Route::get('/consultation', 'ProspectController@consultation');
Route::get('/consultation/man', 'ProspectController@freeproducts');
Route::get('/consultation/create', 'ProspectController@consultationCreate');
Route::get('/consultation/man/create', 'ProspectController@consultationCreate');
Route::post('consultation/store', 'ProspectController@consultationStore');


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
Route::get('offer2/{client}',
  ['uses' => 'OfferController@show2']);
Route::patch('offer/{client}',
  ['as' => 'offerUpdate', 'uses' => 'OfferController@update']);

Route::get('/superstylist', 'SuperstylistController@index');
Route::get('/superstylist/{user}/create', 'SuperstylistController@create');
Route::post('/superstylist/create', 'SuperstylistController@store');

Route::get('/superstylist/admin', 'SuperstylistAdminController@index');
Route::get('/superstylist/test', 'SuperstylistAdminController@test');

Route::auth();