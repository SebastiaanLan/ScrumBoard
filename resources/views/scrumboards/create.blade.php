<x-layout>
    <form action="{{ route('scrumboards.store') }}" method="POST">
        @csrf

        <h2>Create Scrumboard</h2>

        <label for="name">Scrumboard name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="5" required>{{ old('description') }}</textarea>

        <button type="submit" class="btn mt-4">Create Scrumboard</button>

        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>