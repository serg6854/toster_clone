<?php

namespace App\Providers;

use App\Events\ViewQuestionEvent;
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
     * @param  ViewQuestionEvent $event
     *
     * @return void
     */
    public function handle(ViewQuestionEvent $event)
    {
        /** @var Question $question */
        $question = $event->question;

        $question->increment('views');
    }
}
