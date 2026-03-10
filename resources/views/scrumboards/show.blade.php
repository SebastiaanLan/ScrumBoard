<x-layout>
    <h2>{{ $scrumboard->name }}</h2>
    <p>{{ $scrumboard->description }}</p>

    <div class=>
        <form action="{{ route('scrumboards.destroy', $scrumboard->slug) }}" method="POST">
            @csrf
            @method('DELETE')

            <a href="{{ route('tasks.create', [$scrumboard->slug]) }}" class="btn mr-4">Create Task</a>
            <button type="submit" class="btn my-4">Delete</button>
        </form>
    </div>

    <div class="flex justify-evenly">
        <x-colomn :tasks="$tasks" :scrumboard="$scrumboard" colomn="backlog"></x-colomn>
        <x-colomn :tasks="$tasks" :scrumboard="$scrumboard" colomn="todo"></x-colomn>
        <x-colomn :tasks="$tasks" :scrumboard="$scrumboard" colomn="doing"></x-colomn>
        <x-colomn :tasks="$tasks" :scrumboard="$scrumboard" colomn="done"></x-colomn>
    </div>
</x-layout>