<?php

use App\Models\Question;

Route::get('/', function () {
    $questions = Question::with('subscribers')->paginate(10);

    return view('home', compact('questions'));
});

Route::get('questions', 'QuestionsController@latest')->name('questions.latest');
Route::get('q/{question}', 'QuestionsController@show')->name('question.show');
Route::get('question/subscribers', 'QuestionsController@subscribers')->name('question.subscribers');

Route::get('user/{user}', 'ProfileController@show')->name('profile');
Route::get('user/{user}/questions', 'ProfileController@questions')->name('profile.questions');
