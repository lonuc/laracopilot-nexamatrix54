@extends('layouts.admin')

@section('page-title', 'Modifier la Réalisation')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Modifier: {{ $portfolio->title }}</h2>
        
        <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Titre du projet *</label>
                <input type="text" name="title" value="{{ old('title', $portfolio->title) }}" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('title') border-red-500 @enderror">
                @error('title')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Nom du client *</label>
                <input type="text" name="client_name" value="{{ old('client_name', $portfolio->client_name) }}" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('client_name') border-red-500 @enderror">
                @error('client_name')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Catégorie *</label>
                <select name="category" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('category') border-red-500 @enderror">
                    <option value="">Sélectionner une catégorie</option>
                    <option value="packaging" {{ old('category', $portfolio->category) === 'packaging' ? 'selected' : '' }}>Packaging</option>
                    <option value="branding" {{ old('category', $portfolio->category) === 'branding' ? 'selected' : '' }}>Branding</option>
                    <option value="both" {{ old('category', $portfolio->category) === 'both' ? 'selected' : '' }}>Les deux</option>
                </select>
                @error('category')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Description du projet *</label>
                <textarea name="description" rows="5" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('description') border-red-500 @enderror">{{ old('description', $portfolio->description) }}</textarea>
                @error('description')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            @if($portfolio->image_path)
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Image actuelle</label>
                <img src="{{ asset('storage/' . $portfolio->image_path) }}" alt="{{ $portfolio->title }}" class="w-full h-64 object-cover rounded-xl">
            </div>
            @endif

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Nouvelle image (Max 5MB) - Optionnel</label>
                <input type="file" name="image" accept="image/jpeg,image/png,image/jpg,image/webp"
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('image') border-red-500 @enderror">
                @error('image')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
                <p class="text-sm text-gray-500 mt-2">Laissez vide pour conserver l'image actuelle</p>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="featured" id="featured" value="1" {{ old('featured', $portfolio->featured) ? 'checked' : '' }}
                    class="w-5 h-5 text-busidig-orange border-gray-300 rounded focus:ring-busidig-orange">
                <label for="featured" class="ml-3 text-sm font-semibold text-gray-700">Mettre en vedette sur la page d'accueil</label>
            </div>

            <div class="flex justify-end space-x-4 pt-4">
                <a href="{{ route('admin.portfolio.index') }}" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-xl font-semibold hover:bg-gray-400 transition-all duration-300">
                    Annuler
                </a>
                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-busidig-orange to-red-500 text-white rounded-xl font-bold hover:shadow-xl transition-all duration-300">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
