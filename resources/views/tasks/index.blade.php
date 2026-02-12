<x-layout>
    <h2>All current Tasks</h2>

    <ul>
        @foreach($tasks as $task)
            <li>
                <x-card href="/tasks/{{ $task['id'] }}" :highlight="$task['urgency'] <=     3">
                    <h3>{{ $task['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>