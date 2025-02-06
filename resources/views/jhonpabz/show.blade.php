<x-layout>
    <h2>{{ $jhonpabz->name }}</h2>
    <p><strong>Skill level:</strong> {{ $jhonpabz->skill }}</p>
    <p><strong>About me:</strong></p>
    <p>{{ $jhonpabz->bio }}</p>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Netowork Information</h3>
        <p><strong>Network name:</strong>{{ $jhonpabz->network->name }}</p>
        <p><strong>Location:</strong>{{ $jhonpabz->network->location }}</p>
        <p><strong>About the Network:</strong></p>
        <p></p>{{ $jhonpabz->network->description }}</p>
    </div>

</x-layout>
