<x-layout>
    <h2>All current Tasks</h2>
    <a href="{{ route('tasks.create', [$scrumboard->slug]) }}" class="btn">Create Task</a>

    <form action="{{ route('scrumboards.destroy', $scrumboard->slug) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn my-4">Delete</button>
    </form>

    <x-colomn :tasks="$tasks" :scrumboard="$scrumboard" colomn="backlog"></x-colomn>
    <x-colomn :tasks="$tasks" :scrumboard="$scrumboard" colomn="todo"></x-colomn>
    <x-colomn :tasks="$tasks" :scrumboard="$scrumboard" colomn="doing"></x-colomn>
    <x-colomn :tasks="$tasks" :scrumboard="$scrumboard" colomn="done"></x-colomn>
</x-layout>