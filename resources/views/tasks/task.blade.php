<x-layout>
    <h2>{{ $task->title }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Priority:</strong> {{$task->priority}}</p>
        <p><strong>Description:</strong></p>
        <p>{{ $task->description }}</p>
    </div>

    <div class="bg-white p-4 my-4 rounded">
        <h3>Scrumboard info</h3>
        <p><strong>Scrumboard name:</strong> {{ $task->scrumboard->name }}</p>
        <p><strong>Description:</strong></p>
        <p>{{ $task->scrumboard->description }}</p>
    </div>

    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn my-4">Delete Task</button>
    </form>
</x-layout>