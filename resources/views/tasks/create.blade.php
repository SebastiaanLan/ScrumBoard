<x-layout>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <h2>Create Task</h2>

        <label for="title">Task title:</label>
        <input type="text" id="title" name="title" required>

        <label for="priority">Task priority</label>
        <input type="number" id="priority" name="priority" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="5" required></textarea>

        <label for="scrumboard_id">Scrumboard:</label>
        <select name="scrumboard_id" id="scrumboard_id">
            <option value="" disabled selected>Select a scrumboard</option>
            @foreach($scrumboards as $scrumboard)
                <option value="{{ $scrumboard->id }}">
                    {{ $scrumboard->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Task</button>
    </form>
</x-layout>