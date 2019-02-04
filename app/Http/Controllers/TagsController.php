<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
        $questions = $tag->questions()
            ->latest()
            ->paginate();

        return view('tags.show', [
            'tag'       => $tag,
            'questions' => $questions,
        ]);
    }
}
