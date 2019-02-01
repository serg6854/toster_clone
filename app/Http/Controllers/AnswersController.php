<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function markSolution(Answer $answer)
    {
        $answer->markSolution();

        return back();
    }
}
