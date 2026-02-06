@extends('layouts.app')

@section('title', 'Nos Services')

@section('content')
<div class="bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">Nos Services</h1>
        <p class="text-xl max-w-3xl mx-auto">Solutions complètes de branding et packaging personnalisé pour donner vie à votre marque</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($services as $service)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
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
        @endforeach
    </div>

    <div class="mt-12">
        {{ $services->links() }}
    </div>
</div>
@endsection
