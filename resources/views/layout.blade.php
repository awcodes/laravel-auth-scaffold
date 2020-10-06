<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @isset($title)
        {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ asset('vendor/auth/css/auth.css') }}" rel="stylesheet" />
</head>

<body class="bg-gray-900 text-white antialised h-full flex font-sans">
    <div class="w-full max-w-md h-full flex flex-col justify-center p-10 border-r-4 border-pink-600">
        <h1 class="text-3xl font-bold mb-6">{{ config('app.name') }}</h1>
        @yield('body')
    </div>
    <div class="relative flex-1 hidden w-0 lg:block">
        <img class="absolute inset-0 object-cover w-full h-full" src="https://source.unsplash.com/featured/?wallpaper" alt="">
    </div>
</body>

</html>