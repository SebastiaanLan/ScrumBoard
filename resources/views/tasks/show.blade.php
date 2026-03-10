<x-layout>
    <h2>{{ $task->title }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Priority:</strong> {{$task->priority}}</p>
        <p><strong>Description:</strong></p>
        <p>{{ $task->description }}</p>
    </div>
    
    <form action="{{ route('tasks.destroy', [$scrumboard->slug, $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn my-4">Delete Task</button>
    </form>
</x-layout>