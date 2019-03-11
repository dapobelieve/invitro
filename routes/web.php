<?php
Route::get('/', function () {
    return view('pages.home');
});

Route::get('trainings', function () {
    return view('pages.training');
})->name('trainings');
