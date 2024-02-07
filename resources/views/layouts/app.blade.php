<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="bg-gray-800 text-gray-400 flex-shrink-0 w-64">
        <div class="h-full flex flex-col justify-between">
            <!-- Logo or Site Title -->
            <div class="px-4 py-6">
                <h1 class="text-white text-2xl font-semibold">Livewire</h1>
            </div>
            <!-- Navigation Links -->
            <!-- Navigation Links -->
            <nav class="flex-1 overflow-y-auto">
                <ul class="p-2 space-y-2">
                    <li>
                        <a href="/" class="block px-4 py-2 text-sm {{ Request::is('/') ? 'font-semibold' : 'font-normal' }} hover:bg-gray-900">Posts</a>
                    </li>
                    <li>
                        <a href="/counter" class="block px-4 py-2 text-sm {{ Request::is('counter') ? 'font-semibold' : 'font-normal' }} hover:bg-gray-900">Counter</a>
                    </li>
                    <li>
                        <a href="/todos" class="block px-4 py-2 text-sm {{ Request::is('todos') ? 'font-semibold' : 'font-normal' }} hover:bg-gray-900">Todos</a>
                    </li>
                    <li>
                        <a href="/show-posts" class="block px-4 py-2 text-sm {{ Request::is('show-posts') ? 'font-semibold' : 'font-normal' }} hover:bg-gray-900">All Post</a>
                    </li>
                    <li>
                        <a href="/create-post" class="block px-4 py-2 text-sm {{ Request::is('show-posts') ? 'font-semibold' : 'font-normal' }} hover:bg-gray-900">Create Post</a>
                    </li>
                </ul>
            </nav>

            <!-- Footer or Additional Links -->
            <div class="py-4 px-4">
                <a href="#" class="block text-sm text-gray-500 hover:text-white">Settings</a>
                <!-- Add more footer links as needed -->
            </div>
        </div>
    </aside>

    <!-- Page Content -->
    <main class="flex flex-col flex-1 overflow-y-auto">
        <!-- Header -->
        <header class="bg-white shadow-lg py-4 px-6">
            <h2 class="text-xl font-semibold text-gray-800">{{ $title ?? 'Page Title' }}</h2>
        </header>
        <!-- Content -->
        <div class="p-6">
            {{ $slot }}
        </div>
    </main>
</body>

</html>