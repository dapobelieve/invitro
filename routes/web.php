<?php
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('trainings', function () {
    return view('pages.training');
})->name('trainings');

Route::get('store', function() {
    return view('pages.store');
})->name('store');

Route::get('contact', function() {
    return view('pages.contact');
})->name('contact');




Route::get('admin', function() {
    return view('admin.home');
})->name('admin');