@extends('layouts.app')

@section('title', 'Nos Services')

@section('content')
<div class="bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">Nos Services</h1>
        <p class="text-xl max-w-3xl mx-auto">Solutions complètes de branding et packaging personnalisé pour donner vie à votre marque</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-12">
    <!-- Filters and Search -->
    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
        <form method="GET" action="{{ route('services') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Search -->
            <div class="md:col-span-2">
                <label class="block text-sm font-bold text-gray-700 mb-2">Rechercher</label>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Nom du service, description..."
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all">
            </div>
            
            <!-- Category Filter -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Catégorie</label>
                <select name="category"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all">
                    <option value="">Toutes les catégories</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                            {{ ucfirst($cat) }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <!-- Price Range -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Gamme de prix</label>
                <select name="price_range"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all">
                    <option value="">Tous les prix</option>
                    <option value="low" {{ request('price_range') == 'low' ? 'selected' : '' }}>< 10,000 FCFA</option>
                    <option value="medium" {{ request('price_range') == 'medium' ? 'selected' : '' }}>10,000 - 50,000 FCFA</option>
                    <option value="high" {{ request('price_range') == 'high' ? 'selected' : '' }}>> 50,000 FCFA</option>
                </select>
            </div>
            
            <!-- Sort -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Trier par</label>
                <select name="sort"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Plus récents</option>
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Prix croissant</option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Prix décroissant</option>
                    <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Nom A-Z</option>
                </select>
            </div>
            
            <div class="md:col-span-2 flex items-end gap-4">
                <button type="submit" class="flex-1 bg-busidig-orange text-white px-6 py-3 rounded-xl font-bold hover:shadow-xl transform hover:scale-105 transition-all">
                    <svg class="w-5 h-5 inline-block mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/></svg>
                    Rechercher
                </button>
                <a href="{{ route('services') }}" class="bg-gray-200 text-gray-700 px-6 py-3 rounded-xl font-bold hover:bg-gray-300 transition-all">
                    Réinitialiser
                </a>
            </div>
        </form>
    </div>
    
    <!-- Results Count -->
    <div class="mb-6 text-gray-600">
        <p class="text-lg font-semibold">{{ $services->total() }} service(s) trouvé(s)</p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($services as $service)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
            @if($service->image_path)
                <img src="{{ asset('storage/' . $service->image_path) }}" alt="{{ $service->name }}" class="w-full h-48 object-cover">
            @else
                <div class="h-48 bg-gradient-to-br {{ $service->category === 'packaging' ? 'from-blue-500 to-blue-600' : 'from-purple-500 to-purple-600' }} flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                </div>
            @endif
            <div class="p-6">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-xl font-bold text-gray-800">{{ $service->name }}</h3>
                    <span class="px-3 py-1 rounded-full text-xs font-bold {{ $service->category === 'packaging' ? 'bg-blue-100 text-blue-800' : 'bg-purple-100 text-purple-800' }}">
                        {{ ucfirst($service->category) }}
                    </span>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">{{ Str::limit($service->description, 120) }}</p>
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-2xl font-extrabold text-busidig-orange">{{ number_format($service->base_price, 0, ',', ' ') }}</span>
                        <span class="text-sm text-gray-600"> FCFA</span>
                    </div>
                    <a href="{{ route('services.show', $service->id) }}" class="bg-busidig-orange text-white px-6 py-2 rounded-lg font-semibold hover:bg-opacity-90 transition-all">
                        Commander
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-3 text-center py-12">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            <p class="text-xl text-gray-600">Aucun service trouvé avec ces critères</p>
            <a href="{{ route('services') }}" class="inline-block mt-4 text-busidig-orange hover:underline font-semibold">Voir tous les services</a>
        </div>
        @endforelse
    </div>

    <div class="mt-12">
        {{ $services->links() }}
    </div>
</div>
@endsection
