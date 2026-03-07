<x-layout>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <h2>Create Task</h2>

        <label for="title">Task title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>

        <label for="priority">Task priority</label>
        <input type="number" id="priority" name="priority" value="{{ old('priority') }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="5" required>{{ old('description') }}</textarea>

        <label for="scrumboard_id">Scrumboard:</label>
        <select name="scrumboard_id" id="scrumboard_id">
            <option value="" disabled selected>Select a scrumboard</option>
            @foreach($scrumboards as $scrumboard)
                <option value="{{ $scrumboard->id }}" {{ $scrumboard->id == old('scrumboard_id') ? 'selected' : '' }}>
                    {{ $scrumboard->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Task</button>

        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>