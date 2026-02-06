@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class="bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">Notre Portfolio</h1>
        <p class="text-xl max-w-3xl mx-auto">Découvrez nos réalisations et projets réussis pour des clients satisfaits</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($portfolioItems as $item)
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
        @empty
        <div class="col-span-3 text-center py-12">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
            </svg>
            <p class="text-xl text-gray-600">Aucun projet à afficher pour le moment</p>
        </div>
        @endforelse
    </div>

    <div class="mt-12">
        {{ $portfolioItems->links() }}
    </div>
</div>
@endsection
