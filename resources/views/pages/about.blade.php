@extends('layouts.app')

@section('title', 'À Propos')

@section('content')
<div class="bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">À Propos de BUSIDIG</h1>
        <p class="text-xl max-w-3xl mx-auto">Votre partenaire de confiance pour des solutions de branding et packaging professionnelles</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
        <div>
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Notre Histoire</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Fondée avec la vision de transformer l'identité visuelle des entreprises africaines, BUSIDIG s'est imposée comme un leader dans le domaine du branding et du packaging personnalisé.
            </p>
            <p class="text-gray-600 leading-relaxed mb-4">
                Depuis nos débuts, nous avons accompagné plus de 500 entreprises dans la création de leur identité de marque unique, de la conception de logos aux solutions d'emballage complètes.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Notre équipe de designers et d'experts en packaging travaille en étroite collaboration avec chaque client pour comprendre leurs besoins spécifiques et créer des solutions qui reflètent véritablement leur vision.
            </p>
        </div>
        <div class="bg-gradient-to-br from-busidig-orange to-red-500 rounded-3xl p-12 text-white shadow-2xl">
            <h3 class="text-3xl font-bold mb-8">Nos Valeurs</h3>
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="bg-white text-busidig-orange rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Excellence</h4>
                        <p class="text-white/90">Nous visons l'excellence dans chaque projet et chaque interaction avec nos clients.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-white text-busidig-orange rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Innovation</h4>
                        <p class="text-white/90">Nous restons à la pointe des tendances en matière de design et de packaging.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-white text-busidig-orange rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Durabilité</h4>
                        <p class="text-white/90">Nous proposons des solutions éco-responsables pour un avenir durable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 rounded-3xl p-12 mb-16">
        <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Pourquoi Nous Choisir?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-busidig-blue w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl font-extrabold text-white">500+</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Clients Satisfaits</h3>
                <p class="text-gray-600">Plus de 500 entreprises nous font confiance</p>
            </div>
            <div class="text-center">
                <div class="bg-busidig-orange w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl font-extrabold text-white">1000+</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Projets Réalisés</h3>
                <p class="text-gray-600">Plus de 1000 projets complétés avec succès</p>
            </div>
            <div class="text-center">
                <div class="bg-purple-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl font-extrabold text-white">24/7</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Support Client</h3>
                <p class="text-gray-600">Équipe disponible pour vous accompagner</p>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-6">Prêt à Démarrer Votre Projet?</h2>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Contactez-nous aujourd'hui pour discuter de vos besoins en branding et packaging</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center bg-gradient-to-r from-busidig-orange to-red-500 text-white px-10 py-5 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
            <svg class="w-7 h-7 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
            Contactez-nous
        </a>
    </div>
</div>
@endsection
