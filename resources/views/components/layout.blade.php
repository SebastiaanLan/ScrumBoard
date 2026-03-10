<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrumboard</title>
    
    @vite('resources/css/app.css')
</head>
<body> 
    <header>
        <nav>
            <h1><a href="{{ route('scrumboards.index') }}">Scrumboard</a></h1>
            <a href="{{ route('scrumboards.create') }}">Create Scrumboard</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>