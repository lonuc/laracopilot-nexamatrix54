<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin - BUSIDIG</title>
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
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #004E89 0%, #1A659E 50%, #FF6B35 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
        }
        #loading-screen.active {
            opacity: 1;
            visibility: visible;
        }
        .loader {
            width: 80px;
            height: 80px;
            border: 8px solid rgba(255, 255, 255, 0.2);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: .5; }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loader mb-8"></div>
        <h2 class="text-white text-2xl font-bold mb-2">Connexion en cours...</h2>
        <p class="text-white/80 text-lg pulse">Veuillez patienter</p>
    </div>

    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="max-w-md w-full">
            <!-- Logo -->
            <div class="text-center mb-8">
                <h1 class="text-5xl font-extrabold">
                    <span class="text-busidig-blue">BUSI</span><span class="text-busidig-orange">DIG</span>
                </h1>
                <p class="text-gray-600 mt-2 text-lg font-semibold">Administration</p>
            </div>

            <!-- Login Card -->
            <div class="bg-white rounded-2xl shadow-2xl p-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Connexion Admin</h2>
                
                @if($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                        <p class="font-bold">Erreur</p>
                        <p>{{ $errors->first() }}</p>
                    </div>
                @endif

                <form action="{{ route('admin.login') }}" method="POST" id="admin-login-form">
                    @csrf
                    <div class="mb-6">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Email *</label>
                        <input type="email" name="email" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300"
                            placeholder="admin@busidig.com">
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Mot de passe *</label>
                        <input type="password" name="password" required
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300"
                            placeholder="••••••••">
                    </div>

                    <button type="submit"
                        class="w-full bg-gradient-to-r from-busidig-blue to-busidig-light-blue text-white py-4 rounded-xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                        Se connecter
                    </button>
                </form>

                <!-- Test Credentials -->
                <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl border-2 border-blue-200">
                    <h3 class="font-bold text-gray-800 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                        Identifiants de test
                    </h3>
                    <div class="space-y-2 text-sm">
                        <div class="bg-white p-3 rounded-lg">
                            <p class="text-gray-600 font-semibold">Email:</p>
                            <p class="text-gray-800 font-mono">admin@busidig.com</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg">
                            <p class="text-gray-600 font-semibold">Mot de passe:</p>
                            <p class="text-gray-800 font-mono">admin123</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('welcome') }}" class="text-gray-600 hover:text-busidig-orange font-semibold transition-all inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                    </svg>
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('admin-login-form').addEventListener('submit', function(e) {
            // Show loading screen
            document.getElementById('loading-screen').classList.add('active');
        });
    </script>
</body>
</html>
