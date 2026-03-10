<ul>
    <h2>{{ $colomn }}</h2>
    @foreach($tasks->where('status', $colomn) as $task)
        <li>
            <a 
            href="{{ route('tasks.show', [$scrumboard->slug, $task->id]) }}"
            class="bg-white rounded border border-gray-200 px-3 py-3 my-2 flex justify-between items-center"
            >
                <h3>{{ $task->title }}</h3>
            </a>
        </li>
    @endforeach
</ul>