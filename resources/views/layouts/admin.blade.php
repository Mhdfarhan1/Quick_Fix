<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Tambahkan ini di head (sekali saja jika belum) -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                            950: '#1e1b4b',
                        },
                    }
                }
            }
        }
    </script>

    <style>
        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans antialiased">

    <div class="flex h-full min-h-screen">

        {{-- Sidebar --}}
        @include('layouts.partials.sidebar')

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col">

            {{-- Header --}}
            @include('layouts.partials.header')

            {{-- Content Section --}}
            <main class="p-4 sm:p-6 flex-1">
                @yield('content')
            </main>

        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>


</body>

</html>