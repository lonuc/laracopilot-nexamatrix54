@extends('layouts.admin')

@section('page-title', 'Ajouter une Réalisation')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Nouvelle Réalisation Portfolio</h2>
        
        <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Titre du projet *</label>
                <input type="text" name="title" value="{{ old('title') }}" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('title') border-red-500 @enderror">
                @error('title')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Nom du client *</label>
                <input type="text" name="client_name" value="{{ old('client_name') }}" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('client_name') border-red-500 @enderror">
                @error('client_name')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Catégorie *</label>
                <select name="category" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('category') border-red-500 @enderror">
                    <option value="">Sélectionner une catégorie</option>
                    <option value="packaging" {{ old('category') === 'packaging' ? 'selected' : '' }}>Packaging</option>
                    <option value="branding" {{ old('category') === 'branding' ? 'selected' : '' }}>Branding</option>
                    <option value="both" {{ old('category') === 'both' ? 'selected' : '' }}>Les deux</option>
                </select>
                @error('category')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Description du projet *</label>
                <textarea name="description" rows="5" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Image du projet * (Max 5MB)</label>
                <input type="file" name="image" accept="image/jpeg,image/png,image/jpg,image/webp" required
                    class="w-full px-4 py-3 border-2 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300 @error('image') border-red-500 @enderror">
                @error('image')<span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>@enderror
                <p class="text-sm text-gray-500 mt-2">Formats acceptés: JPG, PNG, WEBP</p>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="featured" id="featured" value="1" {{ old('featured') ? 'checked' : '' }}
                    class="w-5 h-5 text-busidig-orange border-gray-300 rounded focus:ring-busidig-orange">
                <label for="featured" class="ml-3 text-sm font-semibold text-gray-700">Mettre en vedette sur la page d'accueil</label>
            </div>

            <div class="flex justify-end space-x-4 pt-4">
                <a href="{{ route('admin.portfolio.index') }}" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-xl font-semibold hover:bg-gray-400 transition-all duration-300">
                    Annuler
                </a>
                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-busidig-orange to-red-500 text-white rounded-xl font-bold hover:shadow-xl transition-all duration-300">
                    Ajouter la réalisation
                </button>
            </div>
        </form>
    </div>
    
    <div class="mt-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg">
        <div class="flex">
            <svg class="w-5 h-5 text-blue-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
            </svg>
            <div>
                <p class="text-sm font-semibold text-blue-800">Important</p>
                <p class="text-sm text-blue-700 mt-1">Assurez-vous que l'image est de haute qualité et représente bien le projet. Les projets en vedette apparaîtront sur la page d'accueil.</p>
            </div>
        </div>
    </div>
</div>
@endsection
