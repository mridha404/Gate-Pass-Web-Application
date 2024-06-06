<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gate Pass</title>
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
            <a href="/" class="logo-container" aria-label="Home">
                <img src="{{ Vite::asset('resources/images/logo5.svg') }}" alt="Logo"  class="w-12 h-12 logo">
            </a>
            <div class="flex flex-col leading-tight">
            <span class="text-lg font-medium">Gate Pass Management System</span>

        </div>
        </div>

    <div class="flex items-center space-x-4">
                <a href="{{ route('users.list') }}" class="hover:text-gray-300">User List</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-gray-300">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
</nav>

<main class="mt-10 max-w-[968px] mx-auto">
    {{ $slot }}

</main>

</div>

</body>
</html>
