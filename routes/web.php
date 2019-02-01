<?php

use App\Models\Question;

Route::get('/', function () {
    $questions = Question::paginate();

    return view('home', compact('questions'));
})->name('home');

Route::get('questions', 'QuestionsController@all')->name('questions.all');
Route::get('question/create', 'QuestionsController@create')->name('question.create');
Route::get('questions/latest', 'QuestionsController@all')->name('questions.latest');
Route::get('questions/without_answer', 'QuestionsController@withoutAnswer')->name('questions.without_answer');
Route::get('q/{question}', 'QuestionsController@show')->name('question.show');
Route::get('question/{question}/subscribers', 'QuestionsController@subscribers')->name('question.subscribers');
Route::match(['post', 'delete'], 'question/{question}/subscribe', 'QuestionsController@subscribe')->name('question.subscribe');
Route::post('questions/{question}/answer', 'AnswerQuestionController')->name('question.answer');

Route::post('answer/{answer}/solution', 'AnswersController@markSolution')->name('answer.solution.mark');

Route::get('users', 'UsersController@index')->name('users.all');

Route::prefix('user/{user}')
    ->group(function () {

        Route::get('', 'ProfileController@show')->name('profile');
        Route::get('answers', 'ProfileController@answers')->name('profile.answers');
        Route::get('questions', 'ProfileController@questions')->name('profile.questions');
        Route::get('subscriptions', 'ProfileController@subscriptions')->name('profile.subscriptions');

    });

Auth::routes();
