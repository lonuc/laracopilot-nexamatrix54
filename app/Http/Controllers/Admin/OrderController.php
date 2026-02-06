<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $orders = Order::with('client', 'service')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        
        return view('admin.orders.index', compact('orders'));
    }
    
    public function create()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $clients = Client::orderBy('company_name')->get();
        $services = Service::where('active', true)->orderBy('name')->get();
        
        return view('admin.orders.create', compact('clients', 'services'));
    }
    
    public function store(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'quantity' => 'required|integer|min:1',
            'specifications' => 'nullable|string',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|in:pending,in_progress,delivered,cancelled',
            'delivery_date' => 'nullable|date'
        ]);
        
        Order::create($validated);
        
        return redirect()->route('admin.orders.index')
            ->with('success', 'Commande créée avec succès!');
    }
    
    public function show($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $order = Order::with('client', 'service')->findOrFail($id);
        
        return view('admin.orders.show', compact('order'));
    }
    
    public function edit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $order = Order::findOrFail($id);
        $clients = Client::orderBy('company_name')->get();
        $services = Service::where('active', true)->orderBy('name')->get();
        
        return view('admin.orders.edit', compact('order', 'clients', 'services'));
    }
    
    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'quantity' => 'required|integer|min:1',
            'specifications' => 'nullable|string',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|in:pending,in_progress,delivered,cancelled',
            'delivery_date' => 'nullable|date'
        ]);
        
        $order = Order::findOrFail($id);
        $order->update($validated);
        
        return redirect()->route('admin.orders.index')
            ->with('success', 'Commande mise à jour avec succès!');
    }
    
    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $order = Order::findOrFail($id);
        $order->delete();
        
        return redirect()->route('admin.orders.index')
            ->with('success', 'Commande supprimée avec succès!');
    }
    
    public function accept($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $order = Order::findOrFail($id);
        $order->update(['status' => 'in_progress']);
        
        return redirect()->route('admin.orders.index')
            ->with('success', 'Commande acceptée et mise en production!');
    }
    
    public function cancel($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $order = Order::findOrFail($id);
        $order->update(['status' => 'cancelled']);
        
        return redirect()->route('admin.orders.index')
            ->with('success', 'Commande annulée.');
    }
    
    public function deliver($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $order = Order::findOrFail($id);
        $order->update(['status' => 'delivered']);
        
        return redirect()->route('admin.orders.index')
            ->with('success', 'Commande marquée comme livrée! Le chiffre d\'affaires a été mis à jour.');
    }
    
    public function generateInvoice($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        $order = Order::with('client', 'service')->findOrFail($id);
        
        $pdf = Pdf::loadView('admin.orders.invoice', compact('order'))
            ->setPaper([0, 0, 226.77, 841.89], 'portrait'); // 80mm width, A4 height
        
        return $pdf->download('bon-commande-' . $order->id . '.pdf');
    }
}