@extends('layouts.admin')

@section('page-title', 'Tableau de bord')

@section('content')
<div class="mb-8">
    <h2 class="text-2xl font-bold text-gray-700 mb-2">Bienvenue, <span class="text-busidig-orange">{{ $adminUser }}</span>! 👋</h2>
    <p class="text-gray-600">Voici un aperçu de votre activité aujourd'hui</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-xl p-6 text-white transform hover:scale-105 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-white bg-opacity-30 p-3 rounded-xl">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                </svg>
            </div>
            <span class="text-3xl font-extrabold">{{ $totalServices }}</span>
        </div>
        <p class="text-sm font-medium opacity-90">Services totaux</p>
        <p class="text-xs mt-1 opacity-75">{{ $activeServices }} actifs</p>
    </div>

    <div class="bg-gradient-to-br from-busidig-orange to-red-500 rounded-2xl shadow-xl p-6 text-white transform hover:scale-105 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-white bg-opacity-30 p-3 rounded-xl">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                </svg>
            </div>
            <span class="text-3xl font-extrabold">{{ $totalOrders }}</span>
        </div>
        <p class="text-sm font-medium opacity-90">Commandes totales</p>
        <p class="text-xs mt-1 opacity-75">{{ $pendingOrders }} en attente</p>
    </div>

    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl shadow-xl p-6 text-white transform hover:scale-105 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-white bg-opacity-30 p-3 rounded-xl">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                </svg>
            </div>
            <span class="text-3xl font-extrabold">{{ $totalClients }}</span>
        </div>
        <p class="text-sm font-medium opacity-90">Clients actifs</p>
        <p class="text-xs mt-1 opacity-75">Base de données</p>
    </div>

    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl shadow-xl p-6 text-white transform hover:scale-105 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-white bg-opacity-30 p-3 rounded-xl">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                </svg>
            </div>
            <span class="text-3xl font-extrabold">{{ number_format($totalRevenue, 0, ',', ' ') }}€</span>
        </div>
        <p class="text-sm font-medium opacity-90">Revenu total</p>
        <p class="text-xs mt-1 opacity-75">Commandes complétées</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
            <span class="bg-yellow-100 text-yellow-600 p-2 rounded-lg mr-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                </svg>
            </span>
            En attente
        </h3>
        <p class="text-4xl font-extrabold text-gray-800">{{ $pendingOrders }}</p>
        <p class="text-sm text-gray-500 mt-2">Commandes à traiter</p>
    </div>

    <div class="bg-white rounded-2xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
            <span class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"/>
                </svg>
            </span>
            En cours
        </h3>
        <p class="text-4xl font-extrabold text-gray-800">{{ $inProgressOrders }}</p>
        <p class="text-sm text-gray-500 mt-2">Commandes en production</p>
    </div>

    <div class="bg-white rounded-2xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
            <span class="bg-green-100 text-green-600 p-2 rounded-lg mr-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
            </span>
            Complétées
        </h3>
        <p class="text-4xl font-extrabold text-gray-800">{{ $completedOrders }}</p>
        <p class="text-sm text-gray-500 mt-2">Commandes livrées</p>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="bg-gradient-to-r from-busidig-blue to-busidig-light-blue px-6 py-4">
        <h3 class="text-xl font-bold text-white">Commandes récentes</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Client</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Service</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Montant</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Statut</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($recentOrders as $order)
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4">
                        <div class="font-semibold text-gray-800">{{ $order->client->company_name }}</div>
                        <div class="text-sm text-gray-500">{{ $order->client->contact_name }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-700">{{ $order->service->name }}</td>
                    <td class="px-6 py-4 font-bold text-gray-800">{{ number_format($order->total_price, 2) }}€</td>
                    <td class="px-6 py-4">
                        @if($order->status === 'pending')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-800">En attente</span>
                        @elseif($order->status === 'in_progress')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800">En cours</span>
                        @elseif($order->status === 'completed')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-800">Complété</span>
                        @else
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-800">Annulé</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $order->created_at->format('d/m/Y') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">Aucune commande récente</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
