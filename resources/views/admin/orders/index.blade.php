@extends('layouts.admin')

@section('page-title', 'Gestion des Commandes')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Toutes les commandes</h2>
        <p class="text-gray-600 mt-1">Gérez et suivez toutes les commandes clients</p>
    </div>
    <a href="{{ route('admin.orders.create') }}" class="bg-gradient-to-r from-busidig-orange to-red-500 text-white px-6 py-3 rounded-xl font-bold hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
        </svg>
        Nouvelle commande
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

<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase">N°</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase">Client</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase">Service</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase">Qté</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase">Montant</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase">Statut</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase">Date</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($orders as $order)
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 font-bold text-gray-800">#{{ $order->id }}</td>
                    <td class="px-6 py-4">
                        <div class="font-semibold text-gray-800">{{ $order->client->company_name }}</div>
                        <div class="text-sm text-gray-500">{{ $order->client->contact_name }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-700">{{ $order->service->name }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $order->quantity }}</td>
                    <td class="px-6 py-4 font-bold text-gray-800">{{ number_format($order->total_price, 2) }}€</td>
                    <td class="px-6 py-4">
                        @if($order->status === 'pending')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-800">En attente</span>
                        @elseif($order->status === 'in_progress')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800">En cours</span>
                        @elseif($order->status === 'delivered')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-800">Livré</span>
                        @else
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-800">Annulé</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $order->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            @if($order->status === 'pending')
                                <form action="{{ route('admin.orders.accept', $order->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-green-600 text-white px-3 py-1 rounded text-xs font-semibold hover:bg-green-700">Accepter</button>
                                </form>
                            @endif
                            @if($order->status === 'in_progress')
                                <form action="{{ route('admin.orders.deliver', $order->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded text-xs font-semibold hover:bg-blue-700">Livrer</button>
                                </form>
                            @endif
                            @if($order->status !== 'cancelled' && $order->status !== 'delivered')
                                <form action="{{ route('admin.orders.cancel', $order->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-xs font-semibold hover:bg-red-700">Annuler</button>
                                </form>
                            @endif
                            <a href="{{ route('admin.orders.invoice', $order->id) }}" class="bg-purple-600 text-white px-3 py-1 rounded text-xs font-semibold hover:bg-purple-700">PDF</a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-12 text-center text-gray-500">
                        <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                        </svg>
                        Aucune commande trouvée
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-6">
    {{ $orders->links() }}
</div>
@endsection
