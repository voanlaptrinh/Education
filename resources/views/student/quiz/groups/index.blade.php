<!-- Trong resources/views/quiz/groups/index.blade.php -->

@foreach($groups as $group)
    <div class="group-link">
        <a href="{{ route('quiz.showGroup', ['groupId' => $group->id]) }}">{{ $group->name }}</a>
    </div>
@endforeach
