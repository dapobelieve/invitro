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