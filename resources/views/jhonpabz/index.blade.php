<x-layout>
    <h2>Currently Available Network</h2>

    <ul>
        @foreach ($jhonpabz as $item)
            <li>
                <x-card href="{{ route('jhonpabz.show', $item->id) }}" :highlight="$item->skill > 75">
                    <div>
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->network->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $jhonpabz->links() }}
</x-layout>
