<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ScoreController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('login');
})->name('login');


Route::view('home', 'home')->name('home');
Route::view('register', 'register')->name('register');
Route::view('profile', 'profile')->name('profile');
Route::view('instruction', 'instruction')->name('instruction');
Route::view('quiz', 'quiz')->name('quiz');
Route::view('quiz/result', 'quiz-result')->name('quiz-result');
Route::view('score-history', 'score-history')->name('score-history');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::controller(QuestionController::class)->group(function () {
        Route::get('/question-list', 'question_list')->name('question.list');
        Route::get('/question-add', 'question_add')->name('question.add');
        Route::post('/question-submit', 'question_submit')->name('question.submit');
        Route::get('/question-edit/{question_id}', 'question_edit')->name('question.edit');
        Route::post('/question-update/{question_id}', 'question_update')->name('question.update');
        Route::post('/question-delete/{question_id}', 'question_delete')->name('question.delete');
    });

    Route::controller(AccountController::class)->group(function () {
        Route::get('/account-list', 'account_list')->name('account.list');
    });

    Route::controller(ScoreController::class)->group(function () {
        Route::get('/score-list', 'score_list')->name('score.list');
    });
});
