<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Admin Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <aside class="w-64 bg-white shadow-lg">
            <div class="p-4 text-xl font-bold border-b">Admin Panel</div>

            <nav class="p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block p-2 rounded hover:bg-gray-200">Dashboard</a>
                <a href="{{ route('admin.posts.index') }}" class="block p-2 rounded hover:bg-gray-200">Posts</a>
                <a href="{{ route('admin.categories.index') }}" class="block p-2 rounded hover:bg-gray-200">Categories</a>
                <a href="{{ route('admin.gallery.index') }}" class="block p-2 rounded hover:bg-gray-200">Gallery</a>
                <a href="{{ route('admin.users.index') }}" class="block p-2 rounded hover:bg-gray-200">Users</a>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1">
            <header class="bg-white p-4 shadow">
                <h1 class="text-2xl font-semibold">@yield('page-title')</h1>
            </header>

            <section class="p-6">
                @yield('content')
            </section>
        </main>

    </div>

</body>
</html>
