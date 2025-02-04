<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jhon Network</title>

    @vite('resources/css/app.css')
</head>

<body>

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
