<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }
    
    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }
    
    public function termsOfService()
    {
        return view('pages.terms-of-service');
    }
    
    public function orderNow()
    {
        $whatsappNumber = '22892943617';
        $message = urlencode('Bonjour BUSIDIG! Je souhaite passer une commande.');
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$message}";
        
        return redirect()->away($whatsappUrl);
    }
}