<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function services(Request $request)
    {
        $query = Service::where('active', true);
        
        // Search filter
        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }
        
        // Category filter
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        
        // Price filter
        if ($request->has('price_range') && $request->price_range != '') {
            switch ($request->price_range) {
                case 'low':
                    $query->where('base_price', '<', 10000);
                    break;
                case 'medium':
                    $query->whereBetween('base_price', [10000, 50000]);
                    break;
                case 'high':
                    $query->where('base_price', '>', 50000);
                    break;
            }
        }
        
        // Sort
        if ($request->has('sort') && $request->sort != '') {
            switch ($request->sort) {
                case 'price_asc':
                    $query->orderBy('base_price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('base_price', 'desc');
                    break;
                case 'name':
                    $query->orderBy('name', 'asc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }
        
        $services = $query->paginate(12)->withQueryString();
        $categories = Service::where('active', true)->distinct()->pluck('category');
        
        return view('pages.services', compact('services', 'categories'));
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