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

            <a href="{{ route('login.show') }}" class="btn">Login</a>
            <a href="{{ route('register.show') }}" class="btn">Register</a>

            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf

                <button type='submit' class="btn">Logout</button>
            </form>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>