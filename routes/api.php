<?php

Route::post('create-training', 'Api\TrainingController@save');

Route::get('all-trainings', 'Api\TrainingController@index');

Route::get('get-training/{id}', 'Api\TrainingController@show');


/**
 * Store Section
 */

Route::get('all-products', 'Api\StoreController@index');

Route::post('place-order', 'Api\StoreController@placeOrder');


//verify if transaction has been paid for
Route::get('verify-transaction-ref/{trxnref}', 'Api\VerificationController@verifyTrxRef');


// verify if payment was truly made on paystack
Route::get('verify-payment/{payment}/{payref}', 'Api\VerificationController@verifyPaymentRef');









/**
 * Admin Section
 */

Route::get('index', 'Api\ProductController@index');
Route::get('products', 'Api\ProductController@list');

//get all orders
Route::get('orders', 'Api\OrdersController@index');

//add new product
Route::post('create', 'Api\ProductController@create');

//delete product
Route::get('delete/{id}', 'Api\ProductController@delete');