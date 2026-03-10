<x-layout>
    <ul>
        @foreach($scrumboards as $sc)
            <li>
                <x-card href="{{ route('scrumboards.show', $sc->slug) }}">
                    <div>
                        <h3>{{ $sc->name }}</h3>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $scrumboards->links('pagination::tailwind') }}
</x-layout>