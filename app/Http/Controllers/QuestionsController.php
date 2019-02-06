<?php

namespace App\Http\Controllers;

use App\Events\ViewQuestionEvent;
use App\Http\Requests\StoreQuestionRequest;
use App\Models\Question;
use App\Models\Tag;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->only([
                'subscribe',
                'create',
                'store'
            ])
        ;
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(StoreQuestionRequest $request)
    {
        $question = new Question([
            'title' => $request->title,
            'body'  => $request->body,
        ]);
        foreach (explode(',', $request->tags) as $tagTitle) {
            $tags[] = Tag::firstOrNew(['title' => $tagTitle]);
        }
        $question->save();
        $question->tags()->saveMany($tags, ['question_id' => $question->id]);

        return redirect()->route('questions.latest');
    }

    public function show(Question $question)
    {
        $answers = $question->answers->filter->isSolution();
        $similarQuestions = Question::similar($question)->paginate();

        event(new ViewQuestionEvent($question));

        return view('questions.show', [
            'question'         => $question,
            'similarQuestions' => $similarQuestions,
            'solutions'        => $question->solutions,
            'answers'          => $answers,
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
