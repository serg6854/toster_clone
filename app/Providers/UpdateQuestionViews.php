<?php

namespace App\Providers;

use App\Events\QuestionViewEvent;
use App\Models\Question;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateQuestionViews
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QuestionViewEvent  $event
     * @return void
     */
    public function handle(QuestionViewEvent $event)
    {
        /** @var Question $question */
        $question = $event->question;

        $question->increment('views');
    }
}
