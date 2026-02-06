<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicePageController extends Controller
{
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    }
    
    public function submitOrder(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'quantity' => 'required|integer|min:1',
            'format' => 'required|string|max:255',
            'specifications' => 'nullable|string|max:2000',
            'files.*' => 'nullable|file|max:10240|mimes:jpg,jpeg,png,pdf,ai,psd,svg,eps'
        ]);
        
        $uploadedFiles = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('order-files', $filename, 'public');
                $uploadedFiles[] = [
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'size' => $file->getSize(),
                    'type' => $file->getClientMimeType()
                ];
            }
        }
        
        $totalPrice = $service->base_price * $validated['quantity'];
        
        // Build WhatsApp message
        $whatsappNumber = '22892943617';
        $message = "🎨 NOUVELLE COMMANDE - {$service->name}\n\n";
        $message .= "👤 Client: {$validated['name']}\n";
        $message .= "📧 Email: {$validated['email']}\n";
        $message .= "📱 Téléphone: {$validated['phone']}\n\n";
        $message .= "📦 Quantité: {$validated['quantity']}\n";
        $message .= "📐 Format: {$validated['format']}\n";
        $message .= "💰 Prix total: " . number_format($totalPrice, 0, ',', ' ') . " FCFA\n\n";
        
        if (!empty($validated['specifications'])) {
            $message .= "📝 Spécifications:\n{$validated['specifications']}\n\n";
        }
        
        if (!empty($uploadedFiles)) {
            $message .= "📎 Fichiers joints: " . count($uploadedFiles) . " fichier(s)\n";
            foreach ($uploadedFiles as $file) {
                $message .= "- {$file['name']} (" . round($file['size'] / 1024, 2) . " KB)\n";
            }
            $message .= "\n";
        }
        
        $message .= "Merci de confirmer cette commande!";
        
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);
        
        // Store order info in session for admin to see
        session()->put('pending_order', [
            'service_id' => $service->id,
            'customer_name' => $validated['name'],
            'customer_email' => $validated['email'],
            'customer_phone' => $validated['phone'],
            'quantity' => $validated['quantity'],
            'format' => $validated['format'],
            'specifications' => $validated['specifications'] ?? null,
            'total_price' => $totalPrice,
            'files' => $uploadedFiles,
            'created_at' => now()
        ]);
        
        return redirect()->away($whatsappUrl);
    }
}