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

Route::get('users', 'UsersController@index')->name('users.all');

Route::get('user/{user}', 'ProfileController@show')->name('profile');
Route::get('user/{user}/answers', 'ProfileController@answers')->name('profile.answers');
Route::get('user/{user}/questions', 'ProfileController@questions')->name('profile.questions');
