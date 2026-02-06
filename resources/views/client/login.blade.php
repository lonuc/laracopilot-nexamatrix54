<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSIDIG - Connexion Client</title>
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
            background: linear-gradient(135deg, #FF6B35 0%, #004E89 100%);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden max-w-4xl w-full flex">
        <div class="w-full md:w-1/2 p-12">
            <div class="mb-8">
                <a href="{{ route('welcome') }}" class="text-4xl font-extrabold mb-2"><span class="text-busidig-blue">BUSI</span><span class="text-busidig-orange">DIG</span></a>
                <p class="text-gray-600 font-medium mt-2">Espace Client</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
                    <p class="font-semibold">{{ $errors->first() }}</p>
                </div>
            @endif

            <form action="{{ route('client.login') }}" method="POST" class="space-y-6">
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

            <div class="mt-6 text-center">
                <p class="text-gray-600">Pas encore de compte? <a href="{{ route('client.register') }}" class="text-busidig-orange font-bold hover:underline">S'inscrire</a></p>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('welcome') }}" class="text-gray-500 hover:text-busidig-blue transition-all">← Retour à l'accueil</a>
            </div>
        </div>

        <div class="hidden md:block w-1/2 bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange p-12 text-white flex flex-col justify-center">
            <h2 class="text-4xl font-extrabold mb-6">Bienvenue!</h2>
            <p class="text-lg mb-8 leading-relaxed">Accédez à votre espace personnel pour passer des commandes, suivre vos projets et consulter votre historique.</p>
            <div class="space-y-4">
                <div class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <h3 class="font-bold">Commandes simplifiées</h3>
                        <p class="text-sm text-gray-200">Passez vos commandes rapidement via WhatsApp</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <h3 class="font-bold">Suivi en temps réel</h3>
                        <p class="text-sm text-gray-200">Consultez le statut de toutes vos commandes</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <h3 class="font-bold">Historique complet</h3>
                        <p class="text-sm text-gray-200">Accédez à toutes vos commandes passées</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
