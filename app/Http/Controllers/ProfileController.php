<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', [
            'user' => $user
        ]);
    }

    public function answers(User $user)
    {
        $answers = $user->answers()->paginate();

        return view('profile.answers', [
            'user'    => $user,
            'answers' => $answers,
        ]);
    }

    public function questions(User $user)
    {
        $questions = $user->questions()->paginate();

        return view('profile.questions', [
            'user'      => $user,
            'questions' => $questions,
        ]);
    }
}
