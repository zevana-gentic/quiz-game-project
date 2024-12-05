<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');
Route::view('profile', 'profile')->name('profile');
Route::view('instruction', 'instruction')->name('instruction');
Route::view('quiz', 'quiz')->name('quiz');
Route::view('quiz/result', 'quiz-result')->name('quiz-result');
