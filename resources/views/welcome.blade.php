<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Centered UI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 max-w-sm text-center">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-4">Welcome to Laravel</h1>
            <p class="text-gray-600 dark:text-gray-300 mb-6">
                Get started by logging in or registering to access the dashboard.
            </p>
            <div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-full inline-block mb-3 px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded-lg font-semibold">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="w-full inline-block mb-3 px-4 py-2 text-white bg-green-500 hover:bg-green-600 rounded-lg font-semibold">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w-full inline-block px-4 py-2 text-white bg-purple-500 hover:bg-purple-600 rounded-lg font-semibold">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</body>
</html>
