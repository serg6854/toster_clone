<ul class="content-list content-list_cards-users">
    @foreach($users as $user)
        @include('users._item', ['user' => $user])
    @endforeach
</ul>

{{ $users->fragment('question_subscribers')->links() }}
