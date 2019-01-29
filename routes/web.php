<?php

use App\Models\Question;

Route::get('/', function () {
    $questions = Question::all();

    return view('home', compact('questions'));
});

Route::get('q/{question}', 'QuestionsController@show')->name('question.show');
