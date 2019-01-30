<?php

namespace App\Http\Controllers;

use App\Events\QuestionViewEvent;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->only('subscribe')
        ;
    }

    public function show(Question $question)
    {
        $question->load('subscribers');

        event(new QuestionViewEvent($question));

        return view('questions.show', compact('question'));
    }

    public function latest()
    {
        $questions = Question::orderBy('created_at', 'desc')
            ->paginate();

        return view('questions.index', compact('questions'));
    }

    public function subscribers(Request $request)
    {
        $question = Question::findOrFail($request->question_id);

        return view('questions.subscribers', compact('question'));
    }

    public function subscribe(Question $question)
    {
        $question->subscribe();

        return redirect()->back();
    }
}
