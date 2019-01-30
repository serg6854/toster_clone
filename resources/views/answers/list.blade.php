<div class="content-list content-list_answers" id="answers_list">
    {{--content-list_answers_profile--}}
    @foreach($answers as $answer)

        @include('answers.item', ['answer' => $answer, 'withQuestion' => $withQuestion ?? false])

    @endforeach

</div>

{{ $answers->links() }}
