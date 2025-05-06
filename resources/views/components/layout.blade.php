<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NextJob</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="{{ route('index') }}">
                    <h1 class="text-4xl font-extrabold">NextJob</h1>
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="{{ route('index') }}" class="hover:text-blue-800 transition-colors duration-300">Jobs</a>
                <a href="#" class="hover:text-blue-800 transition-colors duration-300">Careers</a>
                <a href="#" class="hover:text-blue-800 transition-colors duration-300">Salaries</a>
                <a href="#" class="hover:text-blue-800 transition-colors duration-300">Companies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="{{ route('jobs.create') }}" class="hover:text-blue-800 transition-colors duration-300">Post a Job</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        @method('DELETE')

                        <button class="hover:text-blue-800 transition-colors duration-300">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="{{ route('register') }}">Sign Up</a>
                    <a href="{{ route('login') }}">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
