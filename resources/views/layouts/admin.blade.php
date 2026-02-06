<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSIDIG Admin - @yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'busidig-orange': '#FF6B35',
                        'busidig-blue': '#004E89',
                        'busidig-light-blue': '#1A659E',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-busidig-blue to-busidig-light-blue text-white shadow-2xl">
            <div class="p-6 border-b border-busidig-light-blue">
                <a href="{{ route('admin.dashboard') }}" class="text-3xl font-extrabold flex items-center">
                    <span class="text-white">BUSI</span><span class="text-busidig-orange">DIG</span>
                </a>
                <p class="text-xs text-gray-300 mt-1">Admin Panel</p>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3.5 hover:bg-busidig-light-blue transition-all duration-300 {{ request()->routeIs('admin.dashboard') ? 'bg-busidig-orange border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.services.index') }}" class="flex items-center px-6 py-3.5 hover:bg-busidig-light-blue transition-all duration-300 {{ request()->routeIs('admin.services.*') ? 'bg-busidig-orange border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                    </svg>
                    Services
                </a>
                <a href="{{ route('admin.orders.index') }}" class="flex items-center px-6 py-3.5 hover:bg-busidig-light-blue transition-all duration-300 {{ request()->routeIs('admin.orders.*') ? 'bg-busidig-orange border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                    Commandes
                </a>
                <a href="{{ route('admin.clients.index') }}" class="flex items-center px-6 py-3.5 hover:bg-busidig-light-blue transition-all duration-300 {{ request()->routeIs('admin.clients.*') ? 'bg-busidig-orange border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                    </svg>
                    Clients
                </a>
                <a href="{{ route('admin.portfolio.index') }}" class="flex items-center px-6 py-3.5 hover:bg-busidig-light-blue transition-all duration-300 {{ request()->routeIs('admin.portfolio.*') ? 'bg-busidig-orange border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                    </svg>
                    Portfolio
                </a>
            </nav>
            <div class="absolute bottom-0 w-64 p-6 border-t border-busidig-light-blue">
                <div class="mb-4 text-sm">
                    <p class="text-gray-300">Connecté en tant que</p>
                    <p class="font-bold text-white">{{ session('admin_user', 'Admin') }}</p>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center justify-center w-full px-4 py-3 bg-red-600 hover:bg-red-700 rounded-lg transition-all duration-300 font-semibold shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                        </svg>
                        Déconnexion
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <div class="bg-white shadow-md">
                <div class="max-w-7xl mx-auto px-6 py-5">
                    <h1 class="text-3xl font-bold text-gray-800">@yield('page-title', 'Dashboard')</h1>
                </div>
            </div>
            <div class="p-6">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
