<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $cart = session()->get('cart', []);
        $cartItems = [];
        $total = 0;
        
        foreach ($cart as $serviceId => $item) {
            $service = Service::find($serviceId);
            if ($service) {
                $cartItems[] = [
                    'service' => $service,
                    'quantity' => $item['quantity'],
                    'specifications' => $item['specifications'] ?? '',
                    'subtotal' => $service->base_price * $item['quantity']
                ];
                $total += $service->base_price * $item['quantity'];
            }
        }
        
        return view('client.cart.index', compact('cartItems', 'total'));
    }
    
    public function add(Request $request, $serviceId)
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $service = Service::findOrFail($serviceId);
        
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'specifications' => 'nullable|string'
        ]);
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$serviceId])) {
            $cart[$serviceId]['quantity'] += $request->quantity;
            if ($request->specifications) {
                $cart[$serviceId]['specifications'] = $request->specifications;
            }
        } else {
            $cart[$serviceId] = [
                'quantity' => $request->quantity,
                'specifications' => $request->specifications ?? ''
            ];
        }
        
        session()->put('cart', $cart);
        
        return redirect()->route('client.cart.index')
            ->with('success', 'Service ajouté au panier!');
    }
    
    public function update(Request $request, $serviceId)
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$serviceId])) {
            $cart[$serviceId]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }
        
        return redirect()->route('client.cart.index')
            ->with('success', 'Panier mis à jour!');
    }
    
    public function remove($serviceId)
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$serviceId])) {
            unset($cart[$serviceId]);
            session()->put('cart', $cart);
        }
        
        return redirect()->route('client.cart.index')
            ->with('success', 'Article retiré du panier!');
    }
    
    public function clear()
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        session()->forget('cart');
        
        return redirect()->route('client.cart.index')
            ->with('success', 'Panier vidé!');
    }
    
    public function checkout(Request $request)
    {
        if (!session('client_logged_in')) {
            return redirect()->route('client.login');
        }
        
        $cart = session()->get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('client.cart.index')
                ->with('error', 'Votre panier est vide!');
        }
        
        $clientId = session('client_id');
        $orderDetails = [];
        $totalAmount = 0;
        
        foreach ($cart as $serviceId => $item) {
            $service = Service::find($serviceId);
            if ($service) {
                $subtotal = $service->base_price * $item['quantity'];
                
                Order::create([
                    'client_id' => $clientId,
                    'service_id' => $serviceId,
                    'quantity' => $item['quantity'],
                    'specifications' => $item['specifications'] ?? null,
                    'total_price' => $subtotal,
                    'status' => 'pending'
                ]);
                
                $orderDetails[] = "{$service->name} (x{$item['quantity']}) - {$subtotal}€";
                $totalAmount += $subtotal;
            }
        }
        
        session()->forget('cart');
        
        // Redirect to WhatsApp with complete order details
        $whatsappNumber = '22892943617';
        $message = urlencode(
            "Bonjour BUSIDIG! Je viens de passer une commande:\n\n" .
            implode("\n", $orderDetails) . "\n\n" .
            "TOTAL: {$totalAmount}€\n\n" .
            "Merci de confirmer ma commande."
        );
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$message}";
        
        return redirect()->away($whatsappUrl);
    }
}