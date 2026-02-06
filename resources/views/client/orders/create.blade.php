@extends('layouts.client')

@section('page-title', 'Commander un Service')

@section('content')
<div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">Nos Services</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($services as $service)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300">
            <div class="bg-gradient-to-br from-busidig-orange to-red-500 h-32 flex items-center justify-center">
                <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                </svg>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-xl font-bold text-gray-800">{{ $service->name }}</h3>
                    <span class="px-3 py-1 rounded-full text-xs font-bold
                        @if($service->category === 'packaging') bg-blue-100 text-blue-800
                        @else bg-purple-100 text-purple-800 @endif">
                        {{ ucfirst($service->category) }}
                    </span>
                </div>
                <p class="text-sm text-gray-600 mb-4">{{ Str::limit($service->description, 100) }}</p>
                <p class="text-2xl font-extrabold text-busidig-orange mb-4">{{ number_format($service->base_price, 2) }}€</p>
                
                <form action="{{ route('client.cart.add', $service->id) }}" method="POST" class="space-y-3">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Quantité</label>
                        <input type="number" name="quantity" value="100" min="1" required
                            class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:border-busidig-orange focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Spécifications</label>
                        <textarea name="specifications" rows="2" placeholder="Couleurs, textes, dimensions..."
                            class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:border-busidig-orange focus:outline-none text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-busidig-orange to-red-500 text-white py-3 rounded-lg font-bold hover:shadow-xl transition-all duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                        Ajouter au panier
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8 bg-busidig-blue text-white rounded-2xl shadow-xl p-6 flex items-center justify-between">
        <div class="flex items-center">
            <svg class="w-12 h-12 mr-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
            </svg>
            <div>
                <h3 class="text-xl font-bold">Panier: {{ session()->has('cart') ? count(session('cart')) : 0 }} article(s)</h3>
                <p class="text-sm opacity-90">Cliquez pour voir votre panier et commander</p>
            </div>
        </div>
        <a href="{{ route('client.cart.index') }}" class="bg-white text-busidig-blue px-8 py-3 rounded-xl font-bold hover:shadow-xl transition-all duration-300">
            Voir le panier →
        </a>
    </div>
</div>
@endsection
