<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <div class="flex">
                <div class="w-1/5 bg-teal-600 min-h-screen text-white p-4">
                    <div class="sidebar-header mb-6">
                        <h3 class="font-bold text-2xl">BIS UNDIP</h3>
                    </div>
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 hover:bg-teal-700 p-2 rounded">
                                <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mahasiswa') }}" class="flex items-center space-x-2 hover:bg-teal-700 p-2 rounded">
                                <i class="fas fa-user-graduate"></i> <span>Mahasiswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('jadwal') }}" class="flex items-center space-x-2 hover:bg-teal-700 p-2 rounded">
                                <i class="fas fa-calendar-alt"></i> <span>Jadwal Kuliah</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mata_kuliah') }}" class="flex items-center space-x-2 hover:bg-teal-700 p-2 rounded">
                                <i class="fas fa-book"></i> <span>Mata Kuliah</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mt-10">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="flex items-center space-x-2 hover:bg-teal-700 p-2 rounded w-full">
                                <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="w-4/5">
                    <nav class="bg-white shadow px-4 py-4 flex justify-between items-center">
                        <div class="text-lg font-bold">
                            Dashboard
                        </div>
                        <div class="flex items-center space-x-6">
                            <a href="#" class="text-gray-600">
                                <i class="fas fa-bell"></i>
                            </a>
                            <span class="text-gray-800 font-medium">Dr Budi S.Kom, M.Kom</span>
                        </div>
                    </nav>

                    <main class="p-6">
                        @yield('content')
                    </main>

                </div>
            </div>
        </div>
    </body>
</html>
