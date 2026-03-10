<div class="w-1/4"  >
    <h2 class="text-center">{{ $colomn }}</h2>

    <ul >
        @foreach($tasks->where('status', $colomn) as $task)
            <li class="mx-2">
                <a 
                href="{{ route('tasks.show', [$scrumboard->slug, $task->id]) }}"
                class="{{ $task->priorityColor() }} text-white rounded border border-gray-200 my-2 flex justify-between items-stretch min-w-0 overflow-hidden"
                >
                    @if ($colomn != 'backlog')
                        <form action="{{ route('tasks.update', [$scrumboard->slug, $task->id]) }}" method="POST" class="max-w-none m-0 flex">
                            @csrf
                            @method('PUT')
                            
                            <input type="hidden" name="status" value="{{ $task->prevStatus() }}">
                            <button type="submit" class="w-10 self-stretch text-3xl">←</button>
                        </form>
                    @else
                        <div class="w-10 self-stretch"></div>
                    @endif

                    <h3 class="truncate px-1">{{ $task->title }}</h3>

                    @if ($colomn != 'done')
                        <form action="{{ route('tasks.update', [$scrumboard->slug, $task->id]) }}" method="POST" class="max-w-none m-0 flex">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="status" value="{{ $task->nextStatus() }}">
                            <button type="submit" class="w-10 self-stretch text-3xl">→</button>
                        </form>
                    @else
                        <div class="w-10 self-stretch"></div>
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
</div>