<?php

namespace App\Http\Controllers;

use App\Events\QuestionViewEvent;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function show(Question $question)
    {
        event(new QuestionViewEvent($question));

        return view('questions.show', compact('question'));
    }
}
