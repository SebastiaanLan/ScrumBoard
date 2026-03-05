<x-layout>
    <h2>All current Tasks</h2>

    <ul>
        @foreach($tasks as $task)
            <li>
                <x-card href="{{ route('tasks.show', $task->id) }}" :highlight="$task->priority <=     3">
                    <h3>{{ $task->title }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $tasks->links('pagination::tailwind') }}
</x-layout>