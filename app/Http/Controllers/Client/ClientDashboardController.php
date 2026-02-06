<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index()
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $clientId = session('client_id');
        $clientName = session('client_name');
        $clientCompany = session('client_company');
        
        $totalOrders = Order::where('client_id', $clientId)->count();
        $pendingOrders = Order::where('client_id', $clientId)->where('status', 'pending')->count();
        $inProgressOrders = Order::where('client_id', $clientId)->where('status', 'in_progress')->count();
        $deliveredOrders = Order::where('client_id', $clientId)->where('status', 'delivered')->count();
        $totalSpent = Order::where('client_id', $clientId)
            ->where('status', 'delivered')
            ->sum('total_price');
        
        $recentOrders = Order::where('client_id', $clientId)
            ->with('service')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        return view('client.dashboard', compact(
            'clientName',
            'clientCompany',
            'totalOrders',
            'pendingOrders',
            'inProgressOrders',
            'deliveredOrders',
            'totalSpent',
            'recentOrders'
        ));
    }
}