@extends('layouts.admin')

@section('page-title', 'Gestion du Portfolio')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Nos Réalisations</h2>
        <p class="text-gray-600 mt-1">Gérez les projets à afficher sur le site</p>
    </div>
    <a href="{{ route('admin.portfolio.create') }}" class="bg-gradient-to-r from-busidig-orange to-red-500 text-white px-6 py-3 rounded-xl font-bold hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
        </svg>
        Ajouter une réalisation
    </a>
</div>

@if(session('success'))
    <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg flex items-center">
        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </svg>
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($portfolios as $portfolio)
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        @if($portfolio->image_path)
            <img src="{{ asset('storage/' . $portfolio->image_path) }}" alt="{{ $portfolio->title }}" class="w-full h-56 object-cover">
        @else
            <div class="w-full h-56 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                <svg class="w-20 h-20 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                </svg>
            </div>
        @endif
        <div class="p-5">
            <div class="flex items-center justify-between mb-3">
                <span class="px-3 py-1 rounded-full text-xs font-bold
                    @if($portfolio->category === 'packaging') bg-blue-100 text-blue-800
                    @elseif($portfolio->category === 'branding') bg-purple-100 text-purple-800
                    @else bg-green-100 text-green-800 @endif">
                    {{ ucfirst($portfolio->category) }}
                </span>
                @if($portfolio->featured)
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-busidig-orange text-white flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        Vedette
                    </span>
                @endif
            </div>
            <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $portfolio->title }}</h3>
            <p class="text-sm text-gray-600 mb-3">{{ Str::limit($portfolio->description, 100) }}</p>
            <p class="text-xs text-gray-500 mb-4"><span class="font-semibold">Client:</span> {{ $portfolio->client_name }}</p>
            <div class="flex space-x-2">
                <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="flex-1 bg-busidig-blue text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-opacity-90 transition-all duration-300 text-center">
                    Modifier
                </a>
                <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Supprimer cette réalisation?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-red-700 transition-all duration-300">
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-3 bg-white rounded-2xl shadow-lg p-12 text-center">
        <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
        </svg>
        <h3 class="text-xl font-bold text-gray-700 mb-2">Aucune réalisation</h3>
        <p class="text-gray-500 mb-6">Commencez par ajouter votre première réalisation</p>
        <a href="{{ route('admin.portfolio.create') }}" class="inline-flex items-center bg-busidig-orange text-white px-6 py-3 rounded-xl font-bold hover:shadow-xl transition-all duration-300">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
            </svg>
            Ajouter une réalisation
        </a>
    </div>
    @endforelse
</div>

<div class="mt-8">
    {{ $portfolios->links() }}
</div>
@endsection
