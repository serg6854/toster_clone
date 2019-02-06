<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->only(['subscribe'])
        ;
    }

    public function show(Tag $tag)
    {
        return redirect()->route('tag.questions', $tag);
    }

    public function questions(Tag $tag)
    {
        $questions = $tag->questions()
            ->latest()
            ->paginate();

        return view('tags.questions', [
            'tag'       => $tag,
            'questions' => $questions,
        ]);
    }

    public function subscribe(Tag $tag)
    {
        $tag->subscribe();

        return back();
    }
}
