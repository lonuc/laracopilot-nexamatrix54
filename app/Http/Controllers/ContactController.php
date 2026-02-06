<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000'
        ]);
        
        // Redirect to WhatsApp with contact message
        $whatsappNumber = '22892943617';
        $whatsappMessage = urlencode(
            "📧 NOUVEAU MESSAGE DE CONTACT\n\n" .
            "Nom: {$validated['name']}\n" .
            "Email: {$validated['email']}\n" .
            "Téléphone: {$validated['phone']}\n" .
            "Sujet: {$validated['subject']}\n\n" .
            "Message:\n{$validated['message']}"
        );
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$whatsappMessage}";
        
        return redirect()->away($whatsappUrl);
    }
}