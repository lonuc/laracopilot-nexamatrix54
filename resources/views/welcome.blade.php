@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute transform rotate-45 -top-20 -right-20 w-96 h-96 bg-white rounded-full"></div>
        <div class="absolute transform -rotate-45 -bottom-20 -left-20 w-96 h-96 bg-white rounded-full"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 py-24 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                    Votre <span class="text-busidig-orange">Branding</span> & <span class="text-white">Packaging</span> Personnalisé
                </h1>
                <p class="text-xl mb-8 text-gray-100">
                    Créez une identité visuelle unique pour votre entreprise. Services professionnels de packaging et branding pour PME, startups, boutiques et créateurs.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('services') }}" class="bg-busidig-orange hover:bg-opacity-90 text-white px-8 py-4 rounded-full text-lg font-bold shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                        Voir nos services
                    </a>
                    <a href="{{ route('contact') }}" class="bg-white text-busidig-blue px-8 py-4 rounded-full text-lg font-bold shadow-2xl hover:shadow-xl transition-all duration-300">
                        Nous contacter
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-busidig-orange to-red-500 rounded-3xl transform rotate-6"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl">
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="bg-green-100 p-4 rounded-full mr-4">
                                    <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">Design Professionnel</h3>
                                    <p class="text-gray-600">Créations uniques et sur-mesure</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-4 rounded-full mr-4">
                                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">Livraison Rapide</h3>
                                    <p class="text-gray-600">Respect des délais garantis</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-purple-100 p-4 rounded-full mr-4">
                                    <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">Éco-responsable</h3>
                                    <p class="text-gray-600">Solutions durables disponibles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">Pourquoi Choisir BUSIDIG?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Nous offrons des solutions complètes pour transformer votre marque</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Expertise Reconnue</h3>
                <p class="text-gray-600 leading-relaxed">Plus de 500 entreprises nous font confiance pour leur branding et packaging professionnel.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Équipe Dédiée</h3>
                <p class="text-gray-600 leading-relaxed">Des designers et experts en packaging pour vous accompagner à chaque étape de votre projet.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-orange-500 to-red-500 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Qualité Garantie</h3>
                <p class="text-gray-600 leading-relaxed">Satisfaction client à 100% avec des produits de qualité premium et des finitions impeccables.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">Ce Que Disent Nos Clients</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Des centaines de clients satisfaits nous font confiance pour leur branding et packaging</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative">
                <div class="absolute top-0 left-8 -mt-6 bg-gradient-to-r from-busidig-orange to-red-500 text-white w-14 h-14 rounded-full flex items-center justify-center text-3xl font-bold shadow-xl">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <div class="mt-6 mb-4">
                    <div class="flex space-x-1 mb-3">
                        @for($i = 0; $i < $testimonial['rating']; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-6 italic">"{{ $testimonial['text'] }}"</p>
                </div>
                <div class="border-t pt-4">
                    <div class="flex items-center">
                        <div class="bg-gradient-to-br from-busidig-blue to-busidig-light-blue text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-lg mr-4">
                            {{ substr($testimonial['name'], 0, 1) }}
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">{{ $testimonial['name'] }}</h4>
                            <p class="text-sm text-gray-600">{{ $testimonial['company'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<div class="bg-gradient-to-r from-busidig-orange to-red-500 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6">Prêt à Démarrer Votre Projet?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Rejoignez des centaines d'entreprises qui nous font confiance pour leur branding et packaging</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('services') }}" class="inline-flex items-center bg-white text-busidig-orange px-10 py-5 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                <svg class="w-7 h-7 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                </svg>
                Découvrir nos services
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center bg-busidig-blue text-white px-10 py-5 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                <svg class="w-7 h-7 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                Nous contacter
            </a>
        </div>
    </div>
</div>
@endsection
