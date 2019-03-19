<?php

Route::post('create-training', 'Api\TrainingController@save');

Route::get('all-trainings', 'Api\TrainingController@index');

Route::get('get-training/{id}', 'Api\TrainingController@show');
