<?php

header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Credentials: true");

/**
 * Site Section
 */
Route::get('get-training-details/{training}', 'Api\TrainingController@getTraining');

/**
 * Regiter for training
 */
Route::post('training-register', 'Api\TrainingController@register');



Route::post('create-training', 'Api\TrainingController@save');
Route::delete('delete-training/{id}', 'Api\TrainingController@delete');

Route::get('all-trainings', 'Api\TrainingController@index');

Route::get('get-training/{id}', 'Api\TrainingController@show');
Route::get('edit-training/{id}', 'Api\TrainingController@edit');
Route::post('update-training/{id}', 'Api\TrainingController@update');

Route::get('get-applicants/{training}', 'Api\ApplicantController@getApplicants');

Route::get('get-applicant-details/{applicant}', 'Api\ApplicantController@getApplicantDetails');


/**
 * Store Section
 */

//all products
Route::get('all-products', 'Api\StoreController@index');
//get a product
Route::get('get-product/{store}', 'Api\StoreController@getProduct');

Route::post('place-order', 'Api\StoreController@placeOrder');

//verify if transaction has been paid for
Route::get('verify-transaction-ref/{trxnref}', 'Api\VerificationController@verifyTrxRef');

// verify if payment was truly made on paystack
Route::get('verify-payment/{payment}/{payref}/{type}', 'Api\VerificationController@verifyPaymentRef');










/**
 * Admin Section For store
 */

Route::get('index', 'Api\ProductController@index');

Route::get('products', 'Api\ProductController@list');

//get all orders
Route::get('orders', 'Api\OrdersController@index');

//add new product
Route::post('create', 'Api\ProductController@create');

//delete product
Route::delete('delete/{id}', 'Api\ProductController@delete');

Route::get('edit/{id}', 'Api\ProductController@edit');

//update product
Route::post('update/{id}', 'Api\ProductController@update');

//get an Order
Route::get('get-order/{ref}', 'Api\OrdersController@getOrder');