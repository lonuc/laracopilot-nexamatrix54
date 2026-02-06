<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function services()
    {
        $services = Service::where('active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        
        return view('pages.services', compact('services'));
    }
    
    public function portfolio()
    {
        $portfolioItems = Portfolio::orderBy('created_at', 'desc')
            ->paginate(12);
        
        return view('pages.portfolio', compact('portfolioItems'));
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
    
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
        return redirect()->route('services');
    }
}