<?php

use App\Models\Question;

Route::get('/', function () {
    $questions = Question::with('subscribers')->paginate(10);

    return view('home', compact('questions'));
})->name('home');

Route::get('questions/latest', 'QuestionsController@latest')->name('questions.latest');
Route::get('questions', 'QuestionsController@latest')->name('questions.latest');
Route::get('q/{question}', 'QuestionsController@show')->name('question.show');
Route::get('question/subscribers', 'QuestionsController@subscribers')->name('question.subscribers');
Route::match(['post', 'delete'], 'question/{question}/subscribe', 'QuestionsController@subscribe')->name('question.subscribe');

Route::get('users', 'UsersController@index')->name('users.all');

Route::prefix('user/{user}')
    ->group(function () {

        Route::get('', 'ProfileController@show')->name('profile');
        Route::get('answers', 'ProfileController@answers')->name('profile.answers');
        Route::get('questions', 'ProfileController@questions')->name('profile.questions');
        Route::get('subscriptions', 'ProfileController@subscriptions')->name('profile.subscriptions');

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
