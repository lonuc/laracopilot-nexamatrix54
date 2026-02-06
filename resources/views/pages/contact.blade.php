@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">Contactez-Nous</h1>
        <p class="text-xl max-w-3xl mx-auto">Une question? Un projet? Notre équipe est à votre écoute pour vous accompagner</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div class="space-y-6">
            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-8 text-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-start">
                    <div class="bg-white text-green-600 p-4 rounded-full mr-6">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">WhatsApp</h3>
                        <p class="text-green-100 mb-4">Contactez-nous directement via WhatsApp pour une réponse rapide</p>
                        <a href="https://wa.me/22892943617" target="_blank" class="inline-flex items-center bg-white text-green-600 px-6 py-3 rounded-lg font-bold hover:shadow-xl transition-all">
                            Démarrer une conversation
                            <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-busidig-blue to-busidig-light-blue rounded-2xl p-8 text-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-start">
                    <div class="bg-white text-busidig-blue p-4 rounded-full mr-6">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Email</h3>
                        <p class="text-blue-100 mb-2">Envoyez-nous un email détaillé</p>
                        <a href="mailto:busidigmark@gmail.com" class="text-white hover:underline font-semibold text-lg">busidigmark@gmail.com</a>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-busidig-orange to-red-500 rounded-2xl p-8 text-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-start">
                    <div class="bg-white text-busidig-orange p-4 rounded-full mr-6">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Téléphone</h3>
                        <p class="text-orange-100 mb-2">Appelez-nous directement</p>
                        <a href="tel:+22892943617" class="text-white hover:underline font-semibold text-lg">+228 92 94 36 17</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-50 rounded-2xl p-8 shadow-xl">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Envoyez-nous un message</h3>
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Nom complet *</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Email *</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Téléphone *</label>
                    <input type="text" name="phone" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Sujet *</label>
                    <input type="text" name="subject" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Message *</label>
                    <textarea name="message" rows="5" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300"></textarea>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-busidig-orange to-red-500 text-white py-4 rounded-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                    </svg>
                    Envoyer le message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
