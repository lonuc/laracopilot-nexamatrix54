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
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out',
                        'fade-in-left': 'fadeInLeft 0.6s ease-out',
                        'fade-in-right': 'fadeInRight 0.6s ease-out',
                        'bounce-slow': 'bounce 3s infinite',
                        'gradient': 'gradient 8s ease infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-20px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        fadeInRight: {
                            '0%': { opacity: '0', transform: 'translateX(20px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        gradient: {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                    },
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
        .animation-delay-200 {
            animation-delay: 0.2s;
        }
        .animation-delay-400 {
            animation-delay: 0.4s;
        }
        .animate-gradient {
            background-size: 200% 200%;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 animate-fade-in-up">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('welcome') }}" class="text-3xl font-extrabold transform hover:scale-110 transition-all duration-300">
                    <span class="text-busidig-blue">BUSI</span><span class="text-busidig-orange">DIG</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('welcome') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all transform hover:scale-110 {{ request()->routeIs('welcome') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">Accueil</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all transform hover:scale-110 {{ request()->routeIs('services*') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">Services</a>
                    <a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all transform hover:scale-110 {{ request()->routeIs('portfolio') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">Portfolio</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all transform hover:scale-110 {{ request()->routeIs('about') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">À Propos</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-busidig-orange font-semibold transition-all transform hover:scale-110 {{ request()->routeIs('contact') ? 'text-busidig-orange border-b-2 border-busidig-orange' : '' }}">Contact</a>
                    <a href="{{ route('client.login') }}" class="text-busidig-blue hover:text-busidig-orange font-bold transition-all transform hover:scale-110 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                        Connexion
                    </a>
                    <a href="{{ route('client.register') }}" class="bg-gradient-to-r from-busidig-orange to-red-500 text-white px-6 py-2.5 rounded-full font-bold hover:shadow-xl transition-all transform hover:scale-110">
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
                <div class="animate-fade-in-up">
                    <h3 class="text-2xl font-extrabold mb-4"><span class="text-white">BUSI</span><span class="text-busidig-orange">DIG</span></h3>
                    <p class="text-gray-400 leading-relaxed mb-6">Votre partenaire de confiance pour des solutions de branding et packaging professionnelles en Afrique de l'Ouest.</p>
                    <div class="flex space-x-4">
                        <a href="https://facebook.com/busidig" target="_blank" class="bg-gray-800 hover:bg-busidig-blue w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://instagram.com/busidig" target="_blank" class="bg-gray-800 hover:bg-gradient-to-br hover:from-purple-600 hover:to-pink-500 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://wa.me/22892943617" target="_blank" class="bg-gray-800 hover:bg-green-600 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                        <a href="https://linkedin.com/company/busidig" target="_blank" class="bg-gray-800 hover:bg-blue-600 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://twitter.com/busidig" target="_blank" class="bg-gray-800 hover:bg-blue-400 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 transform">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="animate-fade-in-up animation-delay-200">
                    <h4 class="text-lg font-bold mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('welcome') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">Accueil</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">Services</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">Portfolio</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">À Propos</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">Contact</a></li>
                    </ul>
                </div>
                <div class="animate-fade-in-up animation-delay-400">
                    <h4 class="text-lg font-bold mb-4">Compte</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('client.login') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">Connexion</a></li>
                        <li><a href="{{ route('client.register') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">Inscription</a></li>
                        <li><a href="{{ route('privacy.policy') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">Politique de confidentialité</a></li>
                        <li><a href="{{ route('terms.service') }}" class="text-gray-400 hover:text-busidig-orange transition-all transform hover:translate-x-2 inline-block">Conditions d'utilisation</a></li>
                    </ul>
                </div>
                <div class="animate-fade-in-up">
                    <h4 class="text-lg font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center transform hover:translate-x-2 transition-all">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            +228 92 94 36 17
                        </li>
                        <li class="flex items-center transform hover:translate-x-2 transition-all">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            busidigmark@gmail.com
                        </li>
                        <li class="flex items-center transform hover:translate-x-2 transition-all">
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
    <div id="cookie-banner" class="hidden fixed bottom-0 left-0 right-0 bg-gray-900 text-white p-6 shadow-2xl z-50 animate-fade-in-up">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex-1">
                <h3 class="text-lg font-bold mb-2">🍪 Nous utilisons des cookies</h3>
                <p class="text-sm text-gray-300">Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre utilisation des cookies. <a href="{{ route('privacy.policy') }}" class="text-busidig-orange hover:underline font-semibold">En savoir plus</a></p>
            </div>
            <div class="flex space-x-4">
                <button onclick="acceptCookies()" class="bg-busidig-orange hover:bg-opacity-90 text-white px-6 py-3 rounded-lg font-bold transition-all duration-300 transform hover:scale-110">
                    Accepter
                </button>
                <button onclick="rejectCookies()" class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-110">
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
