<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gate Pass</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .logo {
            filter: drop-shadow(2px 2px 5px rgba(255, 255, 255, 0.5));
        }
    </style>
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div class="flex items-center space-x-4">
                <a class="logo-container" aria-label="Home">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo" class="w-12 h-12 logo">
                </a>
                <div class="flex flex-col leading-tight">
                    <span class="text-lg font-medium">Gate Pass Management System</span>

                </div>
            </div>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-forms.button>Log Out</x-forms.button>
                </form>
            @endauth
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
