<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ScoreController;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('login');
})->name('login');


Route::view('home', 'home', ['page_title' => 'Halaman Utama'])->name('home');
Route::view('quiz', 'quiz')->name('quiz');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login_index')->name('login.index');
    Route::post('/login-submit', 'login_submit')->name('login.submit');
    Route::get('/register', 'register_index')->name('register.index');
    Route::post('/register-submit', 'register_submit')->name('register.submit');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'profile_index')->name('profile.index');
    Route::post('/toggle-sound', 'toggle_sound')->name('toggle-sound');
    Route::get('/score-history', 'score_history')->name('score-history');
});

Route::get('/instruction', [InstructionController::class, 'show_instruction'])->name('show.instruction');

Route::controller(QuizController::class)->group(function () {
    Route::get('/quiz-start', 'quiz_start')->name('quiz.start');
    Route::post('/quiz-submit', 'quiz_submit')->name('quiz.submit');
    Route::get('/show-score', 'show_score')->name('show.score');
});

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
