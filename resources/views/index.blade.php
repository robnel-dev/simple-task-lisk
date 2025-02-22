<h1>List of Tasks</h1>

@if (count($tasks))
    @foreach ($tasks as $task)
        <div>
            {{ $task->title }}
        </div>
    @endforeach
@else
    <div>There are no tasks!</div>
@endif
