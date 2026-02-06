@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">À Propos de BUSIDIG</h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto">Votre partenaire de confiance pour des solutions créatives de branding et packaging</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
        <div>
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Notre Mission</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                BUSIDIG est née de la passion de transformer les idées en réalités visuelles impactantes. Notre mission est d'accompagner les PME, startups, boutiques et créateurs dans la construction d'une identité de marque forte et mémorable.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Nous croyons que chaque entreprise, quelle que soit sa taille, mérite un branding professionnel et un packaging qui reflète son unicité. C'est pourquoi nous mettons notre expertise créative et technique au service de votre réussite.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed">
                En digitalisant nos services, nous rendons le design accessible, rapide et collaboratif. Notre plateforme vous permet de commander, suivre et valider vos projets en toute transparence.
            </p>
        </div>
        <div class="bg-gradient-to-br from-busidig-orange to-red-500 rounded-3xl p-8 text-white">
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="bg-white text-busidig-orange p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Qualité Professionnelle</h3>
                        <p class="text-white text-opacity-90">Designs créatifs réalisés par des experts passionnés</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-white text-busidig-orange p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Livraison Rapide</h3>
                        <p class="text-white text-opacity-90">Respect des délais et suivi en temps réel de vos projets</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-white text-busidig-orange p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Engagement Écologique</h3>
                        <p class="text-white text-opacity-90">Solutions durables et matériaux respectueux de l'environnement</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 rounded-3xl p-12 mb-16">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Nos Valeurs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-gradient-to-br from-busidig-blue to-busidig-light-blue w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Vision Claire</h3>
                <p class="text-gray-600">Nous comprenons vos objectifs et traduisons votre vision en créations marquantes</p>
            </div>
            <div class="text-center">
                <div class="bg-gradient-to-br from-busidig-orange to-red-500 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Innovation</h3>
                <p class="text-gray-600">Designs modernes et solutions créatives adaptées aux tendances actuelles</p>
            </div>
            <div class="text-center">
                <div class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Excellence</h3>
                <p class="text-gray-600">Qualité supérieure garantie sur tous nos services et produits</p>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-6">Prêt à Démarrer Votre Projet?</h2>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Contactez-nous dès aujourd'hui et donnons vie à vos idées ensemble</p>
        <a href="{{ route('order.now') }}" class="inline-flex items-center bg-gradient-to-r from-busidig-orange to-red-500 text-white px-10 py-4 rounded-full text-lg font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Commander maintenant via WhatsApp
        </a>
    </div>
</div>
@endsection
