<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $packagingServices = Service::where('category', 'packaging')
            ->where('active', true)
            ->take(3)
            ->get();
        
        $brandingServices = Service::where('category', 'branding')
            ->where('active', true)
            ->take(3)
            ->get();
        
        $featuredPortfolios = Portfolio::where('featured', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        
        $recentPortfolios = Portfolio::orderBy('created_at', 'desc')
            ->take(8)
            ->get();
        
        return view('welcome', compact('packagingServices', 'brandingServices', 'featuredPortfolios', 'recentPortfolios'));
    }
}