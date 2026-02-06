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
                    <a href="{{ route('order.now') }}" class="bg-busidig-orange hover:bg-opacity-90 text-white px-8 py-4 rounded-full text-lg font-bold shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        Commander maintenant
                    </a>
                    <a href="#services" class="bg-white text-busidig-blue px-8 py-4 rounded-full text-lg font-bold shadow-2xl hover:shadow-xl transition-all duration-300">
                        Découvrir nos services
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

<!-- Services Section -->
<section id="services" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">Nos Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Solutions complètes de branding et packaging personnalisé pour donner vie à votre marque</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredServices as $service)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover-lift">
                <div class="h-48 bg-gradient-to-br {{ $service->category === 'packaging' ? 'from-blue-500 to-blue-600' : 'from-purple-500 to-purple-600' }} flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xl font-bold text-gray-800">{{ $service->name }}</h3>
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $service->category === 'packaging' ? 'bg-blue-100 text-blue-800' : 'bg-purple-100 text-purple-800' }}">
                            {{ ucfirst($service->category) }}
                        </span>
                    </div>
                    <p class="text-gray-600 mb-4 leading-relaxed">{{ Str::limit($service->description, 120) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-extrabold text-busidig-orange">{{ number_format($service->base_price, 2) }}€</span>
                        <a href="{{ route('order.now') }}" class="bg-busidig-blue text-white px-6 py-2 rounded-lg font-semibold hover:bg-opacity-90 transition-all">
                            Commander
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">Nos Réalisations</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Découvrez quelques-uns de nos projets réussis pour des clients satisfaits</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredPortfolio as $item)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                @if($item->image_path)
                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                @else
                    <div class="w-full h-80 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                        <svg class="w-32 h-32 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold mb-2">{{ $item->title }}</h3>
                        <p class="text-sm mb-2">{{ $item->client_name }}</p>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-busidig-orange">{{ ucfirst($item->category) }}</span>
                    </div>
                </div>
            </div>
            @endforeach
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

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">Contactez-Nous</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Une question? Un projet? Notre équipe est à votre écoute pour vous accompagner</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Options -->
            <div class="space-y-6">
                <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-8 text-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-start">
                        <div class="bg-white text-green-600 p-4 rounded-full mr-6">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2">WhatsApp</h3>
                            <p class="text-green-100 mb-4">Contactez-nous directement via WhatsApp pour une réponse rapide</p>
                            <a href="{{ route('order.now') }}" class="inline-flex items-center bg-white text-green-600 px-6 py-3 rounded-lg font-bold hover:shadow-xl transition-all">
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
            
            <!-- Contact Form -->
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
</section>

<!-- CTA Section -->
<div class="bg-gradient-to-r from-busidig-orange to-red-500 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6">Prêt à Démarrer Votre Projet?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Rejoignez des centaines d'entreprises qui nous font confiance pour leur branding et packaging</p>
        <a href="{{ route('order.now') }}" class="inline-flex items-center bg-white text-busidig-orange px-10 py-5 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
            <svg class="w-7 h-7 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            Commencer maintenant
        </a>
    </div>
</div>
@endsection
