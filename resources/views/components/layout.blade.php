<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrumboard</title>
    @vite('resources/css/app.css')
</head>
<body> 
    @if (session('succes'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('succes') }}
        </div>
    @endif

    <header>
        <nav>
            <h1>Scrumboard</h1>
            <a href="{{ route('tasks.index') }}">Show Tasks</a>
            <a href="{{ route('tasks.create') }}">Create Task</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>