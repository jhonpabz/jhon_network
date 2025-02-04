<x-layout>
    <h2>Currently Available Network</h2>

    <ul>
        @foreach ($jhonpabz as $item)
            <li>
                <x-card href="{{ route('jhonpabz.show', $item->id) }}" :highlight="$item->skill > 75">
                    <h3>{{ $item->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

</x-layout>
