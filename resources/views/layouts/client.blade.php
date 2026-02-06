<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSIDIG Client - @yield('title', 'Dashboard')</title>
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
        <aside class="w-64 bg-gradient-to-b from-busidig-orange to-red-500 text-white shadow-2xl">
            <div class="p-6 border-b border-red-400">
                <a href="{{ route('client.dashboard') }}" class="text-3xl font-extrabold flex items-center">
                    <span class="text-white">BUSI</span><span class="text-busidig-blue">DIG</span>
                </a>
                <p class="text-xs text-white opacity-90 mt-1">Espace Client</p>
            </div>
            <nav class="mt-6">
                <a href="{{ route('client.dashboard') }}" class="flex items-center px-6 py-3.5 hover:bg-red-600 transition-all duration-300 {{ request()->routeIs('client.dashboard') ? 'bg-busidig-blue border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                    </svg>
                    Tableau de bord
                </a>
                <a href="{{ route('client.orders.create') }}" class="flex items-center px-6 py-3.5 hover:bg-red-600 transition-all duration-300 {{ request()->routeIs('client.orders.create') ? 'bg-busidig-blue border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                    Nouvelle commande
                </a>
                <a href="{{ route('client.cart.index') }}" class="flex items-center px-6 py-3.5 hover:bg-red-600 transition-all duration-300 {{ request()->routeIs('client.cart.*') ? 'bg-busidig-blue border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                    Panier
                    @if(session()->has('cart') && count(session('cart')) > 0)
                        <span class="ml-auto bg-white text-busidig-orange px-2 py-1 rounded-full text-xs font-bold">{{ count(session('cart')) }}</span>
                    @endif
                </a>
                <a href="{{ route('client.orders.index') }}" class="flex items-center px-6 py-3.5 hover:bg-red-600 transition-all duration-300 {{ request()->routeIs('client.orders.index') || request()->routeIs('client.orders.show') ? 'bg-busidig-blue border-l-4 border-white font-bold' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                    </svg>
                    Mes commandes
                </a>
            </nav>
            <div class="absolute bottom-0 w-64 p-6 border-t border-red-400">
                <div class="mb-4 text-sm">
                    <p class="text-white opacity-75">Connecté en tant que</p>
                    <p class="font-bold text-white">{{ session('client_name', 'Client') }}</p>
                    <p class="text-xs text-white opacity-75">{{ session('client_company', '') }}</p>
                </div>
                <form action="{{ route('client.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center justify-center w-full px-4 py-3 bg-white text-busidig-orange rounded-lg transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                        </svg>
                        Déconnexion
                    </button>
                </form>
            </div>
        </aside>

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

    <!-- Cookie Consent Banner -->
    <div id="cookie-banner" class="hidden fixed bottom-0 left-0 right-0 bg-gray-900 text-white p-6 shadow-2xl z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex-1 mr-8">
                <h3 class="text-lg font-bold mb-2">🍪 Nous utilisons des cookies</h3>
                <p class="text-sm text-gray-300">Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre utilisation des cookies. <a href="{{ route('privacy.policy') }}" class="text-busidig-orange hover:underline font-semibold">En savoir plus</a></p>
            </div>
            <div class="flex space-x-4">
                <button onclick="acceptCookies()" class="bg-busidig-orange hover:bg-opacity-90 text-white px-6 py-3 rounded-lg font-bold transition-all duration-300">
                    Accepter
                </button>
                <button onclick="rejectCookies()" class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                    Refuser
                </button>
            </div>
        </div>
    </div>

    <script>
        // Cookie Consent Logic
        window.addEventListener('DOMContentLoaded', function() {
            if (!localStorage.getItem('cookieConsent')) {
                document.getElementById('cookie-banner').classList.remove('hidden');
            }
        });

        function acceptCookies() {
            localStorage.setItem('cookieConsent', 'accepted');
            document.getElementById('cookie-banner').classList.add('hidden');
        }

        function rejectCookies() {
            localStorage.setItem('cookieConsent', 'rejected');
            document.getElementById('cookie-banner').classList.add('hidden');
        }
    </script>
</body>
</html>
