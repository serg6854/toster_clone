<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    /**
     * @param Answer $answer
     *
     * @return RedirectResponse
     */
    public function markSolution(Answer $answer)
    {
        $answer->markAsSolution();

        return back();
    }
}
