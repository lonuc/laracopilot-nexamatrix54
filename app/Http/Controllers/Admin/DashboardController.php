<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $totalServices = Service::count();
        $activeServices = Service::where('active', true)->count();
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $inProgressOrders = Order::where('status', 'in_progress')->count();
        $deliveredOrders = Order::where('status', 'delivered')->count();
        $totalClients = Client::count();
        $totalRevenue = Order::where('status', 'delivered')->sum('total_price');
        
        $recentOrders = Order::with('client', 'service')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        $adminUser = session('admin_user');
        
        return view('admin.dashboard', compact(
            'totalServices',
            'activeServices',
            'totalOrders',
            'pendingOrders',
            'inProgressOrders',
            'deliveredOrders',
            'totalClients',
            'totalRevenue',
            'recentOrders',
            'adminUser'
        ));
    }
}