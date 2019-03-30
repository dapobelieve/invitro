<?php
Route::get('/', 'HomeController@index')->name('home');




Route::get('trainings', function () {
    return view('pages.training');
})->name('trainings');

Route::get('shop', function() {
    return view('pages.store');
})->name('store');

Route::get('contact', function() {
    return view('pages.contact');
})->name('contact');


/**
 * Admin section
 */
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('home', function() {
        return view('admin.home');
    })->name('admin');

    Route::get('training', function () {
        return view('admin.training');
    })->name('admin-train');

    Route::get('store', function () {
        return view('admin.store');
    })->name('admin-store');
});
