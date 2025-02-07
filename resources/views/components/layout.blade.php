<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jhon Network</title>

    @vite('resources/css/app.css')
</head>

<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1>Jhon Network</h1>
            <a href="{{ route('jhonpabz.index') }}">All Networks</a>
            <a href="{{ route('jhonpabz.create') }}">Create New Network</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>

</html>
