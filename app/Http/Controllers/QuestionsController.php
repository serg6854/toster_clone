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
            ->only([
                'subscribe',
                'create'
            ])
        ;
    }

    public function create()
    {
        return view('questions.create');
    }

    public function show(Question $question)
    {
        $answers = $question->answers->filter(function ($item) {
            return !$item->is_solution;
        });

        event(new QuestionViewEvent($question));

        return view('questions.show', [
            'question'  => $question,
            'solutions' => $question->solutions,
            'answers'   => $answers,
        ]);
    }

    public function all()
    {
        $questions = Question::orderBy('created_at', 'desc')
            ->paginate();

        return view('home', compact('questions'));
    }

    public function latest()
    {
        $questions = Question::latest()->paginate();

        return view('home', compact('questions'));
    }

    public function withoutAnswer()
    {
        $questions = Question::orDoesntHave('answers')
            ->latest()
            ->paginate();

        return view('home', compact('questions'));
    }

    public function subscribers(Question $question)
    {
        return view('questions.subscribers', compact('question'));
    }

    public function subscribe(Question $question)
    {
        $question->subscribe();

        return redirect()->back();
    }
}
