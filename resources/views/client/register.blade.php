<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSIDIG - Inscription Client</title>
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
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden max-w-4xl w-full p-12">
        <div class="mb-8">
            <a href="{{ route('welcome') }}" class="text-4xl font-extrabold mb-2"><span class="text-busidig-blue">BUSI</span><span class="text-busidig-orange">DIG</span></a>
            <p class="text-gray-600 font-medium mt-2">Créer un compte client</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('client.register') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Nom de l'entreprise *</label>
                    <input type="text" name="company_name" value="{{ old('company_name') }}" required
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Nom du contact *</label>
                    <input type="text" name="contact_name" value="{{ old('contact_name') }}" required
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Téléphone *</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" required
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Mot de passe *</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Confirmer le mot de passe *</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Ville</label>
                    <input type="text" name="city" value="{{ old('city') }}"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Pays</label>
                    <input type="text" name="country" value="{{ old('country') }}"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Adresse</label>
                <textarea name="address" rows="2"
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">{{ old('address') }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Type de client *</label>
                <select name="client_type" required
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                    <option value="">Sélectionner</option>
                    <option value="pme" {{ old('client_type') === 'pme' ? 'selected' : '' }}>PME</option>
                    <option value="startup" {{ old('client_type') === 'startup' ? 'selected' : '' }}>Startup</option>
                    <option value="boutique" {{ old('client_type') === 'boutique' ? 'selected' : '' }}>Boutique</option>
                    <option value="createur" {{ old('client_type') === 'createur' ? 'selected' : '' }}>Créateur</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-busidig-orange to-red-500 text-white py-3.5 rounded-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                Créer mon compte
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">Déjà un compte? <a href="{{ route('client.login') }}" class="text-busidig-orange font-bold hover:underline">Se connecter</a></p>
        </div>
    </div>
</body>
</html>
