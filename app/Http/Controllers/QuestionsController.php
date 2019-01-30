<?php

namespace App\Http\Controllers;

use App\Events\QuestionViewEvent;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function show(Question $question)
    {
        $question->load('subscribers');

        event(new QuestionViewEvent($question));

        return view('questions.show', compact('question'));
    }

    public function latest()
    {
        $questions = Question::orderBy('created_at', 'desc')
            ->paginate(5);

        return view('home', compact('questions'));
    }

    public function subscribers(Request $request)
    {
        $question = Question::findOrFail($request->question_id);

        return view('questions.subscribers', compact('question'));
    }
}
