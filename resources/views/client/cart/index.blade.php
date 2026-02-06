@extends('layouts.client')

@section('page-title', 'Mon Panier')

@section('content')
<div class="max-w-5xl mx-auto">
    @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg flex items-center">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="bg-gradient-to-r from-busidig-orange to-red-500 px-6 py-4">
            <h2 class="text-2xl font-bold text-white flex items-center">
                <svg class="w-7 h-7 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                </svg>
                Mon Panier ({{ count($cartItems) }} article{{ count($cartItems) > 1 ? 's' : '' }})
            </h2>
        </div>

        @if(empty($cartItems))
            <div class="p-12 text-center">
                <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                </svg>
                <h3 class="text-2xl font-bold text-gray-700 mb-2">Votre panier est vide</h3>
                <p class="text-gray-500 mb-6">Ajoutez des services pour commencer</p>
                <a href="{{ route('client.orders.create') }}" class="inline-flex items-center bg-busidig-orange text-white px-6 py-3 rounded-xl font-bold hover:shadow-xl transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                    Parcourir les services
                </a>
            </div>
        @else
            <div class="p-6">
                @foreach($cartItems as $index => $item)
                <div class="flex items-center justify-between border-b pb-6 mb-6 {{ $index === 0 ? '' : 'pt-6' }}">
                    <div class="flex-1">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $item['service']->name }}</h3>
                        <p class="text-sm text-gray-600 mb-2">{{ Str::limit($item['service']->description, 100) }}</p>
                        @if($item['specifications'])
                            <p class="text-sm text-gray-500"><span class="font-semibold">Spécifications:</span> {{ $item['specifications'] }}</p>
                        @endif
                        <p class="text-sm text-gray-700 mt-2"><span class="font-semibold">Prix unitaire:</span> {{ number_format($item['service']->base_price, 2) }}€</p>
                    </div>
                    <div class="flex items-center space-x-6 ml-6">
                        <form action="{{ route('client.cart.update', $item['service']->id) }}" method="POST" class="flex items-center">
                            @csrf
                            @method('PUT')
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="w-20 px-3 py-2 border-2 border-gray-300 rounded-lg text-center font-bold focus:border-busidig-orange focus:outline-none">
                            <button type="submit" class="ml-2 bg-busidig-blue text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition-all text-sm font-semibold">
                                Modifier
                            </button>
                        </form>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-busidig-orange">{{ number_format($item['subtotal'], 2) }}€</p>
                        </div>
                        <form action="{{ route('client.cart.remove', $item['service']->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 transition-all">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach

                <div class="bg-gray-50 rounded-xl p-6 mt-6">
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-2xl font-bold text-gray-800">Total:</span>
                        <span class="text-3xl font-extrabold text-busidig-orange">{{ number_format($total, 2) }}€</span>
                    </div>
                    <div class="flex space-x-4">
                        <form action="{{ route('client.cart.clear') }}" method="POST" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-gray-300 text-gray-700 px-6 py-4 rounded-xl font-bold hover:bg-gray-400 transition-all duration-300">
                                Vider le panier
                            </button>
                        </form>
                        <form action="{{ route('client.cart.checkout') }}" method="POST" class="flex-2">
                            @csrf
                            <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-4 rounded-xl font-bold hover:shadow-2xl transition-all duration-300 flex items-center justify-center">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                Commander via WhatsApp
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
