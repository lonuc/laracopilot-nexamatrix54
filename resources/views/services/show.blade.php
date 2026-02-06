@extends('layouts.app')

@section('title', $service->name)

@section('content')
<div class="bg-gradient-to-br from-busidig-blue via-busidig-light-blue to-busidig-orange py-12">
    <div class="max-w-7xl mx-auto px-4">
        <a href="{{ route('services') }}" class="inline-flex items-center text-white hover:text-gray-200 font-semibold mb-6 transition-all">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
            </svg>
            Retour aux services
        </a>
        <h1 class="text-5xl font-extrabold text-white mb-4">{{ $service->name }}</h1>
        <p class="text-xl text-gray-100">{{ $service->description }}</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Service Details -->
        <div>
            <div class="bg-gradient-to-br {{ $service->category === 'packaging' ? 'from-blue-500 to-blue-600' : 'from-purple-500 to-purple-600' }} rounded-3xl p-12 text-white shadow-2xl mb-8">
                <div class="flex items-center justify-center mb-6">
                    <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                </div>
                <div class="text-center">
                    <div class="text-6xl font-extrabold mb-2">{{ number_format($service->base_price, 0, ',', ' ') }}</div>
                    <div class="text-2xl font-bold">FCFA / unité</div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Détails du service</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-green-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-800">Design professionnel</h4>
                            <p class="text-gray-600">Créations uniques et personnalisées selon vos besoins</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-green-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-800">Livraison rapide</h4>
                            <p class="text-gray-600">Respect des délais garantis</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-green-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-800">Qualité premium</h4>
                            <p class="text-gray-600">Matériaux de haute qualité et finitions soignées</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-green-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-800">Support dédié</h4>
                            <p class="text-gray-600">Accompagnement personnalisé tout au long du projet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Form -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Commander ce service</h2>
            <form action="{{ route('services.order', $service->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Votre nom complet *</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Email *</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Téléphone (WhatsApp) *</label>
                    <input type="text" name="phone" required placeholder="Ex: +228 92 94 36 17"
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Quantité *</label>
                    <input type="number" name="quantity" min="1" value="100" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300"
                        onchange="calculateTotal()" id="quantity">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Format / Dimensions *</label>
                    <input type="text" name="format" required placeholder="Ex: 10x15cm, A4, 500ml, etc."
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Importer vos fichiers (Logo, maquettes, etc.)</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-busidig-orange transition-all">
                        <input type="file" name="files[]" multiple accept=".jpg,.jpeg,.png,.pdf,.ai,.psd,.svg,.eps" class="hidden" id="file-upload">
                        <label for="file-upload" class="cursor-pointer">
                            <svg class="w-16 h-16 mx-auto text-gray-400 mb-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"/>
                            </svg>
                            <p class="text-gray-600 font-semibold mb-1">Cliquez pour importer vos fichiers</p>
                            <p class="text-sm text-gray-500">JPG, PNG, PDF, AI, PSD, SVG, EPS (Max 10MB par fichier)</p>
                        </label>
                    </div>
                    <div id="file-list" class="mt-3 space-y-2"></div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Spécifications / Instructions</label>
                    <textarea name="specifications" rows="4" placeholder="Décrivez vos besoins: couleurs, textes à inclure, style souhaité, etc."
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-busidig-orange focus:ring-2 focus:ring-busidig-orange focus:outline-none transition-all duration-300"></textarea>
                </div>

                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-lg font-semibold text-gray-700">Prix unitaire:</span>
                        <span class="text-lg font-bold text-gray-800">{{ number_format($service->base_price, 0, ',', ' ') }} FCFA</span>
                    </div>
                    <div class="flex justify-between items-center border-t pt-2">
                        <span class="text-2xl font-bold text-gray-800">Total estimé:</span>
                        <span class="text-3xl font-extrabold text-busidig-orange" id="total-price">{{ number_format($service->base_price * 100, 0, ',', ' ') }} FCFA</span>
                    </div>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-4 rounded-xl font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    Commander via WhatsApp
                </button>
            </form>
        </div>
    </div>
</div>

<script>
const basePrice = {{ $service->base_price }};

function calculateTotal() {
    const quantity = document.getElementById('quantity').value || 1;
    const total = basePrice * quantity;
    document.getElementById('total-price').textContent = total.toLocaleString('fr-FR') + ' FCFA';
}

// File upload preview
document.getElementById('file-upload').addEventListener('change', function(e) {
    const fileList = document.getElementById('file-list');
    fileList.innerHTML = '';
    
    for (let i = 0; i < e.target.files.length; i++) {
        const file = e.target.files[i];
        const fileSize = (file.size / 1024).toFixed(2);
        
        const fileItem = document.createElement('div');
        fileItem.className = 'flex items-center justify-between bg-gray-50 p-3 rounded-lg';
        fileItem.innerHTML = `
            <div class="flex items-center">
                <svg class="w-6 h-6 text-busidig-orange mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"/>
                </svg>
                <div>
                    <p class="font-semibold text-gray-800">${file.name}</p>
                    <p class="text-sm text-gray-500">${fileSize} KB</p>
                </div>
            </div>
            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
        `;
        fileList.appendChild(fileItem);
    }
});
</script>
@endsection
