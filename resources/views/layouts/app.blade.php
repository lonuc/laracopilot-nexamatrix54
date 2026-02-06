<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSIDIG - @yield('title', 'Branding & Packaging Professionnel')</title>
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
        .hover-lift:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('welcome') }}" class="text-3xl font-extrabold">
                    <span class="text-busidig-blue">BUSI</span><span class="text-busidig-orange">DIG</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('welcome') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all {{ request()->routeIs('welcome') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">Accueil</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all {{ request()->routeIs('services*') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">Services</a>
                    <a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all {{ request()->routeIs('portfolio') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">Portfolio</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all {{ request()->routeIs('contact') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">Contact</a>
                    <a href="{{ route('client.login') }}" class="text-busidig-blue hover:text-busidig-orange font-bold transition-all flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                        Connexion
                    </a>
                    <a href="{{ route('client.register') }}" class="bg-gradient-to-r from-busidig-orange to-red-500 text-white px-6 py-2.5 rounded-full font-bold hover:shadow-xl transition-all">
                        Inscription
                    </a>
                </div>
                <button class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-extrabold mb-4"><span class="text-white">BUSI</span><span class="text-busidig-orange">DIG</span></h3>
                    <p class="text-gray-400 leading-relaxed">Votre partenaire de confiance pour des solutions de branding et packaging professionnelles en Afrique de l'Ouest.</p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('welcome') }}" class="text-gray-400 hover:text-busidig-orange transition-all">Accueil</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-busidig-orange transition-all">Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-busidig-orange transition-all">Portfolio</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-busidig-orange transition-all">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Compte</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('client.login') }}" class="text-gray-400 hover:text-busidig-orange transition-all">Connexion</a></li>
                        <li><a href="{{ route('client.register') }}" class="text-gray-400 hover:text-busidig-orange transition-all">Inscription</a></li>
                        <li><a href="{{ route('privacy.policy') }}" class="text-gray-400 hover:text-busidig-orange transition-all">Politique de confidentialité</a></li>
                        <li><a href="{{ route('terms.service') }}" class="text-gray-400 hover:text-busidig-orange transition-all">Conditions d'utilisation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            +228 92 94 36 17
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            busidigmark@gmail.com
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            Lomé, Togo
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">© {{ date('Y') }} BUSIDIG. Tous droits réservés.</p>
                <p class="text-gray-500 mt-2 text-sm">Made with ❤️ by <a href="https://laracopilot.com/" target="_blank" class="text-busidig-orange hover:underline">LaraCopilot</a></p>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Banner -->
    <div id="cookie-banner" class="hidden fixed bottom-0 left-0 right-0 bg-gray-900 text-white p-6 shadow-2xl z-50">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex-1">
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
