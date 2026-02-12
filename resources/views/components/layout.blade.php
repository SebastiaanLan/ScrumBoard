<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrumboard</title>
</head>
<body> 
    <header>
        <nav>
            <h1>Scrumboard</h1>
            <a href="/tasks">Show Tasks</a>
            <a href="/tasks/create">Create Task</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>