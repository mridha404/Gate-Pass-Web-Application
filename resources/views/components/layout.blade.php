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
            <span class="text-sm font-medium">Gate</span>
            <span class="text-sm font-medium">Pass</span>
        </div>
        </div>
    <div class="space-x-6 font-bold">
        <a href="#">Gate pass </a>
        <a href="#">Account Panel</a>
        <a href="#">Logout</a>
        <a href="#">FAQS</a>
    </div>
    <div>
        <a href="">Post a Query</a>
    </div>
</nav>

<main class="mt-10 max-w-[968px] mx-auto">
    {{ $slot }}

</main>

</div>

</body>
</html>
