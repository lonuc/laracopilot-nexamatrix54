<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSIDIG - Connexion Admin</title>
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
            background: linear-gradient(135deg, #004E89 0%, #1A659E 50%, #FF6B35 100%);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden max-w-4xl w-full flex">
        <div class="w-full md:w-1/2 p-12">
            <div class="mb-8">
                <h1 class="text-4xl font-extrabold mb-2"><span class="text-busidig-blue">BUSI</span><span class="text-busidig-orange">DIG</span></h1>
                <p class="text-gray-600 font-medium">Espace Administration</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
                    <p class="font-semibold">{{ $errors->first() }}</p>
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-2">Mot de passe</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-busidig-orange to-red-500 text-white py-3.5 rounded-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    Se connecter
                </button>
            </form>

            <div class="mt-8 p-6 bg-gradient-to-br from-busidig-blue to-busidig-light-blue rounded-2xl">
                <p class="text-white font-bold mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                    Identifiants de test
                </p>
                <div class="space-y-2 text-sm text-gray-100">
                    <p><span class="font-semibold">Admin:</span> admin@busidig.com / admin123</p>
                    <p><span class="font-semibold">Manager:</span> manager@busidig.com / manager123</p>
                    <p><span class="font-semibold">Superviseur:</span> supervisor@busidig.com / supervisor123</p>
                </div>
            </div>
        </div>

        <div class="hidden md:block w-1/2 bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange p-12 text-white flex flex-col justify-center">
            <h2 class="text-4xl font-extrabold mb-6">Bienvenue!</h2>
            <p class="text-lg mb-8 leading-relaxed">Gérez vos services, commandes, clients et portfolio en toute simplicité avec notre plateforme moderne et intuitive.</p>
            <div class="space-y-4">
                <div class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <h3 class="font-bold">Tableau de bord intuitif</h3>
                        <p class="text-sm text-gray-200">Visualisez toutes vos statistiques en temps réel</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <h3 class="font-bold">Gestion complète</h3>
                        <p class="text-sm text-gray-200">Services, commandes, clients et portfolio</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <h3 class="font-bold">Interface moderne</h3>
                        <p class="text-sm text-gray-200">Design élégant et responsive</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
