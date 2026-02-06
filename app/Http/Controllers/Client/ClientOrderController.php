<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class ClientOrderController extends Controller
{
    public function index()
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $clientId = session('client_id');
        
        $orders = Order::where('client_id', $clientId)
            ->with('service')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        
        return view('client.orders.index', compact('orders'));
    }
    
    public function create()
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $services = Service::where('active', true)->orderBy('name')->get();
        
        return view('client.orders.create', compact('services'));
    }
    
    public function store(Request $request)
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'quantity' => 'required|integer|min:1',
            'specifications' => 'nullable|string',
            'delivery_date' => 'nullable|date'
        ]);
        
        $service = Service::findOrFail($validated['service_id']);
        $validated['total_price'] = $service->base_price * $validated['quantity'];
        $validated['client_id'] = session('client_id');
        $validated['status'] = 'pending';
        
        Order::create($validated);
        
        // Redirect to WhatsApp with order confirmation
        $whatsappNumber = '22892943617';
        $message = urlencode(
            "Bonjour BUSIDIG! Je viens de passer une commande:\n\n" .
            "Service: {$service->name}\n" .
            "Quantité: {$validated['quantity']}\n" .
            "Montant: {$validated['total_price']}€\n\n" .
            "Merci de confirmer ma commande."
        );
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$message}";
        
        session()->flash('success', 'Commande créée! Vous allez être redirigé vers WhatsApp pour confirmation.');
        
        return redirect()->away($whatsappUrl);
    }
    
    public function show($id)
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $order = Order::where('client_id', session('client_id'))
            ->where('id', $id)
            ->with('service')
            ->firstOrFail();
        
        return view('client.orders.show', compact('order'));
    }
}